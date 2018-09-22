$(function () {
    $('#create_matter').submit(function () {
      var comprobar = $('#name_matter').val().length * $('#section').val().length;
        if (comprobar > 0) {

            var formulario = $('#create_matter');
            var datos = formulario.serialize();
            var archivos = new FormData();
            var url = '../model/register_matter.php';
            

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
                    
                    $(location).attr('href', '../consultar/materias.php');
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
