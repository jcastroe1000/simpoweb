$(function () {
    $('#create_teacher').submit(function () {
      var comprobar = $('#name').val().length * $('#last_name_p').val().length*
                      $('#last_name_m').val().length;
        if (comprobar > 0) {

            var formulario = $('#create_teacher');
            var datos = formulario.serialize();
            var archivos = new FormData();
            var url = '../model/register_teacher.php';
            

            $.ajax({
            url: url + '?' + datos,
            type: 'POST',
            contentType: false,
            data: archivos,
            processData: false,
            beforeSend: function() {
                
                    $('#myModal').modal('show');
             
            },
            success: function (data) {
                
                setTimeout(function () {
                  $('#cargando ').modal('show');
                    
                }, 9500);
                setTimeout(function () {
                    
                    $(location).attr('href', '../consultar/profesores.php');
                }, 12000);
            },
            error: function(data) {
                $('#cargando h3').text('Ocurrio un error. Intentalo de nuevo.');
            }
          });
            return false;


        } else {
            $('#cargando').modal('show');
            $('#cargando h3').text("Llena todos los campos");
            return false;
        }
    });
});