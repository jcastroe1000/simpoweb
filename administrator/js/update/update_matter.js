$(function() {
  $('#update_matter').submit(function() {
    var comprobar = $('#name_matter').val().length * $('#section').val().length*
             $('#area').val().length*$('#nombre_prof').val().length*$('#apellido_pat_prof').val().length*
             $('#apellido_mat_prof').val().length*$('#id').val().length;
                   
    if (comprobar > 0) {
      
          var formulario = $('#update_matter');
          var datos = formulario.serialize();
          var archivos = new FormData();
          var url = '../update/update_matter.php';
          
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
                    
                }, 10500);
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
  })
})
