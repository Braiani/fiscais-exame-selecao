$(document).ready(function(){
    $("#docAnexo").on('change', function(){
        var arquivo = this.value;
        var extensao = (arquivo.substring(arquivo.lastIndexOf("."))).toLowerCase();
        if (extensao !== ".pdf") {
            alert("O formato do arquivo deve ser PDF!");
            if (!$("#docAnexo").parent().parent().hasClass("has-error")) {
                $("#docAnexo").parent().parent().addClass("has-error");
            }
        }else if ($("#docAnexo").parent().parent().hasClass("has-error")) {
            $("#docAnexo").parent().parent().removeClass("has-error");
        }
        //alert(this.value);
    });

    $("#cpf").inputmask("999.999.999-99",{
        "placeholder": " ",
        "onincomplete": function(){
            verificarPreenchimento("#cpf");
        },
        "oncomplete": function(){
            verificarPreenchimento("#cpf");
        }
    });
    $('#telefone').inputmask({
		mask: ["(99) 9999-9999", "(99) 99999-9999", ],
        "placeholder": " ",
        "onincomplete": function(){
            verificarPreenchimento("#telefone");
        },
        "oncomplete": function(){
            verificarPreenchimento("#telefone");
        }
    });

    //Valida a existência de dados no campo Nome do formulário
    $("#nome").on("blur", function(){
        verificarPreenchimento("#nome");
    });

    //Verifica a existência de CPF cadastrado anteriormente
    $(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);
    $("#cpf").on('blur', function(){
        var numCpf = $("#cpf").val();
        $.ajax({
            url: "valida.php",
            type: "POST",
            data: {
                codigo: 1,
                numCpf: numCpf
            },
            dataType: "json"
        }).done(function(resposta){
            console.log(resposta);
            // if (resposta.soma > 0) {
            //     if ($('#erroPort').hasClass('hidden')) {
            //         $('#erroPort').toggleClass('hidden');
            //         $("#NumPort").toggleClass('invalido');
            //     }
            // }else if (!$('#erroPort').hasClass('hidden')) {
            //     $('#erroPort').toggleClass('hidden');
            //     $("#NumPort").toggleClass('invalido');
            // }
        });
    });

	//Verifica se o candidato é servidor público federal
	$('#servidorOutraInstituicao').on('change', function(){
		if($("#servidorOutraInstituicao").val() == "Sim"){
			if($("#siape").parent().parent().hasClass("hidden")){
				$("#siape").parent().parent().toggleClass("hidden");
				$("#siape").prop({required: true});
			}
		}else{
			if(!$("#siape").parent().parent().hasClass("hidden")){
				$("#siape").parent().parent().toggleClass("hidden");
				$("#siape").prop({required: false});
			}
		}
	});

	//Verifica se o candidato for servidor do IF para retirar necessidade do documento e sumir com campo de servidor de outra instituição
	$('#servidor').on('change', function(){
		if($("#servidor").val() == "Sim"){
			if(!$("#servidorOutraInstituicao").parent().parent().hasClass("hidden")){
				$("#servidorOutraInstituicao").parent().parent().addClass("hidden");
				$("#servidorOutraInstituicao").prop({required: false});
			}
			if(!$("#siape").parent().parent().hasClass("hidden")){
				$("#siape").parent().parent().toggleClass("hidden");
				$("#siape").prop({required: false});
			}
			if(!$("#docAnexo").parent().parent().hasClass("hidden")){
				$("#docAnexo").parent().parent().addClass("hidden");
				$("#docAnexo").prop({required: false});
			}
		}else{
			if($("#servidorOutraInstituicao").parent().parent().hasClass("hidden")){
				$("#servidorOutraInstituicao").parent().parent().removeClass("hidden");
				$("#servidorOutraInstituicao").prop({required: true});
			}
			if($("#docAnexo").parent().parent().hasClass("hidden")){
				$("#docAnexo").parent().parent().removeClass("hidden");
				$("#docAnexo").prop({required: true});
			}
		}
	});

    //Valida a existência de dados no campo identidade do formulário
    $("#identidade").on("blur", function(){
        verificarPreenchimento("#identidade");
    });

    //Valida a existência de dados no campo email do formulário
    $("#email").on("blur", function(){
        verificarPreenchimento("#email");
    });
	
	//Valida a existência de dados no campo siape do formulário
	$("#siape").on("blur", function(){
        verificarPreenchimento("#siape");
    });

    function verificarPreenchimento(id) {
        if ($(id).val() !== "") {
            if (!$(id).parent().hasClass("has-error") && !$(id).parent().hasClass("has-success")) {
                $(id).parent().addClass("has-success has-feedback");
                $(id).parent().append("<span class='glyphicon glyphicon-ok form-control-feedback' aria-hidden='true'></span><span class='sr-only'>(success)</span>");
            }else if ($(id).parent().hasClass("has-error")) {
                $(id).parent().removeClass("has-error");
				$(id).nextAll().remove();
                $(id).parent().addClass("has-success has-feedback");
                $(id).parent().append("<span class='glyphicon glyphicon-ok form-control-feedback' aria-hidden='true'></span><span class='sr-only'>(success)</span>");
            }
        }else {
            if (!$(id).parent().hasClass("has-error") && !$(id).parent().hasClass("has-success")) {
                $(id).parent().addClass("has-error has-feedback");
                $(id).parent().append("<span class='glyphicon glyphicon-remove form-control-feedback' aria-hidden='true'></span><span class='sr-only'>(error)</span>");
            }else if ($(id).parent().hasClass("has-success")) {
                $(id).parent().removeClass("has-success");
				$(id).nextAll().remove();
                $(id).parent().addClass("has-error has-feedback");
                $(id).parent().append("<span class='glyphicon glyphicon-remove form-control-feedback' aria-hidden='true'></span><span class='sr-only'>(error)</span>");
            }
        }
    }
});
