$(function() {
  $('#update_faq_course').submit(function() {
    var comprobar = $('#question').val().length * $('#answer').val().length 
                * $('#id_faqs').val().length;
    if (comprobar > 0) {
      
          var formulario = $('#update_faq_course');
          var datos = formulario.serialize();
          var archivos = new FormData();
          var url = '../update/update_faq_course.php';
          
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
                    
                    $(location).attr('href', '../consultar/preguntas_cursos.php');
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
