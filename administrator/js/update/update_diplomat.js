$(function() {
  $('#update_diplomat').submit(function() {
    var comprobar = $('#id').val().length*$('#name').val().length*$('#review').val().length*$('#addressed').val().length*$('#objetive').val().length * 
                    $('#duration').val().length*$('#period').val().length*$('#date_start').val().length*$('#date_finish').val().length*
                    $('#time_start').val().length*$('#time_finish').val().length*$('#days').val().length*$('#modality').val().length*$('#requirements').val().length*
                    $('#aditional_information').val().length*$('#cost').val().length*$('#pay_method').val().length*
                    $('#update_date').val().length*$('#admin').val().length;
    if (comprobar > 0) {
      
          var formulario = $('#update_diplomat');
          var datos = formulario.serialize();
          var archivos = new FormData();
          var url = '../update/update_diplomat.php';
          
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
                    
                    $(location).attr('href', '../consultar/diplomados.php');
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
