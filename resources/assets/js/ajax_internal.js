$(function () {

    //Ajax setup for internal AJAX's
    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name=csrf_token]').attr("content")}
    });

    //Ajax do Solicite um Contato
    $('.btn-sub').on('click', function (e) {
        e.preventDefault();
        var form = $('#ajax-contact');

        var inputs = form.serializeArray();

        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: inputs,
            dataType: 'json',
            timeout: 10000,
            success: function (resposta) {

                if (resposta.status === 'success') {
                    form.parent().append('<div class="alert alert-success" id="alert">Adicionado com sucesso!</div>');
                } else if (resposta.status === 'warning') {
                    form.parent().append('<div class="alert alert-danger" id="alert">Erro ao adicionar!</div>');
                } else if (resposta.status === 'error') {
                    form.parent().append('<div class="alert alert-danger" id="alert">Erro ao adicionar!</div>');
                }
            },
            fails: function () {

            },
            beforeSend: function () {
                $('#alert').remove();
            },
            complete: function () {

            }
        });
    });

});