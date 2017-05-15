$(function () {
    $('#create_diplomat_faq').submit(function () {
        var comprobar = $('#question').val().length * $('#answer').val().length* $('#category').val().length;
        if (comprobar > 0) {

            var formulario = $('#create_diplomat_faq');
            var datos = formulario.serialize();
            var archivos = new FormData();
            var url = 'model/register_question.php';

            $.ajax({
                url: url + '?' + datos,
                type: 'POST',
                contentType: false,
                data: archivos,
                processData: false,
                beforeSend: function () {
                    $('#cargando').modal('show');
                },
                success: function (data) {
                    if (data.status == 'success') {
                        $('#cargando h3').text('Pregunta creada exitosamente.');
                        setTimeout(function () {
                    $(location).attr('href', 'preguntas_diplomados.php');
                }, 2000);
                        
                    } else if (data.status == 'error') {
                         setTimeout(function () {
                    $('#cargando').modal('hide');
                }, 2000);
                setTimeout(function () {
                    $('#cargando').modal('show');
                    $('#cargando h3').text("El Operador ya se encuentra registrado");
                }, 2500);
                        
                        return false;

                    }
                },
            });
            return false;


        } else {
            $('#cargando').modal('show');
            $('#cargando h3').text("Llena todos los campos");
            return false;
        }
    });
});
