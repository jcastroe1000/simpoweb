$(function() {
  $('#update_biography').submit(function() {
    var comprobar = $('#name').val().length*$('#surname_p').val().length*$('#surname_m').val().length*$('#review').val().length
            *$('#id').val().length;
    if (comprobar > 0) {
      
          var formulario = $('#update_biography');
          var datos = formulario.serialize();
          var archivos = new FormData();
          var url = '../update/update_biography.php';
          
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
                    
                    $(location).attr('href', '../consultar/biografias.php');
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
