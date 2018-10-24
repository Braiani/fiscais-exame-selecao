$(document).ready(function(){
    $("#cpf").inputmask("999.999.999-99",{
        "onincomplete": function(){
            verificarPreenchimento("#cpf");
        },
        "oncomplete": function(){
            verificarPreenchimento("#cpf");
            verificarCpf($(this).val());
        }
    });
    $('#telefone').inputmask({
		mask: ["(99) 9999-9999", "(99) 99999-9999", ],
        "onincomplete": function(){
            verificarPreenchimento("#telefone");
        },
        "oncomplete": function(){
            verificarPreenchimento("#telefone");
        }
    });

    $("input").on("blur", function(){
        verificarPreenchimento("#" + this.id);
    });

    $('#servidor').on('change', function(){
        if($(this).is(':checked')){
            if ($('#siape').parent().hasClass('hidden')) {
                $('#siape').parent().toggleClass('hidden');
            }
        }else{
            if (!$('#siape').parent().hasClass('hidden')) {
                $('#siape').parent().toggleClass('hidden');
            }
        }
    });

    $("#arquivo").on('change', function(){
        var arquivo = this.value;
        var extensao = (arquivo.substring(arquivo.lastIndexOf("."))).toLowerCase();
        if (extensao !== ".pdf") {
            alert("O formato do arquivo deve ser PDF!");
            if (!$("#arquivo").parent().parent().hasClass("has-error")) {
                $("#arquivo").parent().parent().addClass("has-error");
            }
        }else if ($("#arquivo").parent().parent().hasClass("has-error")) {
            $("#arquivo").parent().parent().removeClass("has-error");
        }
        //alert(this.value);
    });


    function verificarCpf (numCpf){
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function(){
                $.blockUI();
            },
            url: $buscarCpf,
            type: "POST",
            data: {
                cpf: numCpf
            },
            dataType: "json"
        }).done(function(resposta){
            $.unblockUI();
            console.log(resposta);
            if (resposta.error != 1) {
                preencherInformacoes(resposta);
            }
        });
    }

    function preencherInformacoes (data){
        $('#nome').val(data.nome);
        $('#rg').val(data.rg);
        $('#orgao_emissor').val(data.orgao_emissor);
        $('#pis').val(data.pis);
        $('#telefone').val(data.telefone);
        // $('#nome').val(data.nome); //Banco
        $('#agencia').val(data.agencia);
        $('#operacao').val(data.operacao);
        $('#conta').val(data.conta);
    }

    function verificarPreenchimento(id) {
        if ($(id).val() !== "") {
            if (!$(id).parent().hasClass("has-error") && !$(id).parent().hasClass("has-success")) {
                $(id).parent().addClass("has-success has-feedback");
            }else if ($(id).parent().hasClass("has-error")) {
                $(id).parent().removeClass("has-error");
				$(id).nextAll().remove();
                $(id).parent().addClass("has-success has-feedback");
            }
        }else {
            if (!$(id).parent().hasClass("has-error") && !$(id).parent().hasClass("has-success")) {
                $(id).parent().addClass("has-error has-feedback");
            }else if ($(id).parent().hasClass("has-success")) {
                $(id).parent().removeClass("has-success");
				$(id).nextAll().remove();
                $(id).parent().addClass("has-error has-feedback");
            }
        }
    }
});
