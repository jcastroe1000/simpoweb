$(function () {
    $('#create_user').submit(function () {
        var comprobar = $('#name').val().length *$('#surname_p').val().length *$('#surname_m').val().length * $('#telephone_contact').val().length * $('#email_contact').val().length
                * $('#gender').val().length * $('#password').val().length * $('#confirm_password').val().length * $('#creation_date').val().length;

        if (comprobar > 0) {

            var p1 = document.getElementById("password").value;
            var p2 = document.getElementById("confirm_password").value;
            if (p1 != p2) {

                $('#invalidPass').modal('show');

                return false;
            } else {
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
                    $('#myModal').modal('show');
                    // alert("primero");
                },
                success: function (data) {
                    if (data.status == 'success') {
                        $('#cargando').modal('show');
                        setTimeout(function () {
                    $(location).attr('href', 'index.php');
                }, 2000);

                    }  else if (data.status='exist'){
                          setTimeout(function () {
                    $('#cargando').modal('hide');
                }, 2000);
                setTimeout(function () {
                        $('#myModal').modal('hide');
                        $('#user_exist').modal('show');
                }, 2500);
                        
                        return false;
                    }
                        
                },
                
            });
            return false;


            }

            
        } else {
            $('#cargando').modal('show');
            $('#cargando h4').text("Por favor,llena todos los campos solicitados");
            return false;
        }
    })
});

 