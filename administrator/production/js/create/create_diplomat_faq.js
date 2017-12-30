$(function () {
    $('#create_diplomat_question').submit(function () {
        var comprobar = $('#question').val().length * $('#answer').val().length 
                * $('#category').val().length;
        if (comprobar > 0) {

            var formulario = $('#create_diplomat_question');
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

                    setInterval(function () {
                        $('#guardando').modal('show');
                    }, 2000);
                },
                success: function (data) {
                    if (data.status == 'success') {
                        setInterval(function () {
                            $('#guardando').modal('hide');
                            $('#cargando').modal('show');
                        }, 4000);


                        setTimeout(function () {
                            $('#guardando').modal('hide');
                            $('#cargando').modal('hide');
                            $(location).attr('href', 'preguntas_diplomados.php');
                        }, 6000);
                
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
