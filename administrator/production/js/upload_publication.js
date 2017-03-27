$(function() {
  $('#upload_publication').submit(function() {
    var comprobar = $('#publication_name').val().length *$('#review').val().length * $('#addressed').val().length * $('#objetive').val().length * $('#periodicity').val().length*
                    $('#cost').val().length *$('#creation_date').val().length*$('#created_by').val().length*$('#publication_image').val().length;
    if (comprobar > 0) {
      var imagen = document.getElementById("publication_image").files;
      if (imagen[0].type != "image/png" && imagen[0].type != "image/jpg" && imagen[0].type != "image/jpeg") {
        $('#cargando').modal('show');
        $('#cargando h3').text("El archivo " + imagen[0].name + " no es una imagen");
        return false;
      } else {
        if (imagen[0].size > 1024 * 1024 * 2) {
          $('#cargando').modal('show');
          $('#cargando h3').text("El archivo " + imagen[0].name + " sobrepasa el peso permitido");
          return false;
        } else {
          var formulario = $('#upload_publication');
          var datos = formulario.serialize();
          var archivos = new FormData();
          var url = 'gallery/upload_publication.php';
          for (var i = 0; i < (formulario.find('input[type=file]').length); i++) {
            archivos.append((formulario.find('input[type="file"]:eq(' + i + ')').attr("name")), ((formulario.find('input[type="file"]:eq(' + i + ')')[0]).files[0]));
          }
          $.ajax({
            url: url + '?' + datos,
            type: 'POST',
            contentType: false,
            data: archivos,
            processData: false,
            beforeSend: function() {
               setTimeout(function () {
                    $('#cargando').modal('show');
                }, 2000);
            },
            success: function (data) {
                setTimeout(function () {
                    $('#cargando h3').text('Publicación creada de manera exitosa');
                    
                }, 8000);
                setTimeout(function () {
                    
                    $(location).attr('href', 'publicaciones.php');
                }, 13000);
            },
            error: function(data) {
                $('#cargando h3').text('Ocurrio un error. Intentalo de nuevo.');
            }
          });
          return false;
        }
      }
    } else {
      $('#cargando').modal('show');
      $('#cargando h3').text("Llena todos los campos");
      return false;
    }
  })
})
