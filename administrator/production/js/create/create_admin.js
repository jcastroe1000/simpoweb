$(function () {
    $('#create_admin').submit(function () {
        var comprobar = $('#name').val().length * $('#apellido_paterno').val().length
                * $('#apellido_materno').val().length * $('#email_admin').val().length * $('#creation_date_admin').val().length;
        if (comprobar > 0) {

            var formulario = $('#create_admin');
            var datos = formulario.serialize();
            var archivos = new FormData();
            var url = 'model/register_admin.php';

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
                        $('#cargando h3').text('Operador Registrado Exitosamente.');
                        setTimeout(function () {
                    $(location).attr('href', 'administradores.php');
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
