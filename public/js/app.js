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

    $('input[name="servidor"]').on('change', function(){
        if($(this).val() == 1){
            if ($('#siape').attr('readonly')) {
                $('#siape').removeAttr('readonly');
            }
            if (!$('#gecc').hasClass('hidden')) {
                $('#gecc').toggleClass('hidden');
            }
        }else{
            if (!$('#siape').attr('readonly')) {
                $('#siape').attr('readonly', true);
            }
            if ($('#gecc').hasClass('hidden')) {
                $('#gecc').toggleClass('hidden');
            }
        }
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
        }).fail(function(){
            alert('Um erro ocorreu!');
        }).done(function(resposta){
            if (resposta.error != 1) {
                preencherInformacoes(resposta);
            }else if (!$('#arquivo').attr('required')) {
                $('#arquivo').attr('required', true);
            }
        }).always(function(){
            $.unblockUI();
        });
    }

    function preencherInformacoes (data){
        $('#nome').val(data.nome);
        $('#identidade').val(data.identidade);
        $('#pis').val(data.pis);
        $('#telefone').val(data.telefone);
        $('#banco_id').val(data.banco_id);
        $('#agencia').val(data.agencia);
        $('#operacao').val(data.operacao);
        $('#conta').val(data.conta);
        $('#email').val(data.email);
        $('#arquivo').removeAttr('required');

        preencheLocal(data.exames, $('#ano').val());

        if (data.servidor == 1) {
            if (!$('#servidor-1').is(':checked')) {
                $('#servidor-1').trigger('click');
            }
            $('#siape').val(data.siape);
        }else{
            if (!$('#servidor-0').is(':checked')) {
                $('#servidor-0').trigger('click');
            }
        }
    }

    function preencheLocal(data, exame){
        data.forEach(exames => {
            if (exames.id == exame) {
                $('#local_prova_id').val(exames.pivot.local_prova_id);
            }
        });
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
