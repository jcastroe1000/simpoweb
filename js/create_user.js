$(function () {
    $('#create_user').submit(function () {
        var comprobar = $('#name').val().length * $('#surnames').val().length * $('#telephone_contact').val().length* $('#email_contact').val().length 
        * $('#gender').val().length *$('#password').val().length*$('#confirm_password').val().length* $('#creation_date').val().length;
        if (comprobar > 0) {

            var formulario = $('#create_user');
            var datos = formulario.serialize();
            var archivos = new FormData();
            var url = 'model/register_user.php';

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
                    bootbox.alert({
                            message: "Usuario Duplicado,Verifica la información \n\
                                        e Intentalo de nuevo",
                            backdrop: false
                        });
                }, 2500);
                        
                        return false;
//                        setTimeout(function () {
//                    bootbox.alert({
//    message: "This alert can be dismissed by clicking on the background!",
//    backdrop: true
//});
//                }).hide(300);
                    }
                },
            });
            return false;


        } else {
            $('#cargando').modal('show');
            $('#cargando h3').text("Llena todos los campos");
            return false;
        }
    })
})

 