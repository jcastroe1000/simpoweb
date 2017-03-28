$(function () {
    $('#create_user').submit(function () {
        var comprobar = $('#name').val().length * $('#surnames').val().length * $('#telephone_contact').val().length* $('#email_contact').val().length 
        * $('#gender').val().length* $('#password').val().length* $('#creation_date').val().length;
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
//                    $('#myModal').modal('show');
                    alert("primero");
                },
                success: function (data) {
                    alert ("aqui");
                
//                setTimeout(function () {
//                  $('#cargando').modal('show');
//                    
//                }, 9500);
//                setTimeout(function () {
//                    
//                    $(location).attr('href', 'index.php');
//                }, 12000);
            },
            error: function(data) {
                $('#cargando h2').text('Ocurrio un error. Intentalo de nuevo.');
            }
          });
          return false;
        
      
    } else {
      $('#cargando').modal('show');
      $('#cargando h4').text("Por favor,llena todos los campos solicitados");
      return false;
    }
  })
});

 