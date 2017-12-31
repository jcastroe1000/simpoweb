/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
    $("#oknewsletter").hide();

    $("#newsletterid").validate({
        rules: {
            email_newsletter: { required:true, email: true},
            seccion: { required:true, minlength:1}
            
        },
        messages: {
            email_newsletter : "Introduce un correo electronico Correcto",
            seccion : "Selecciona una sección",
            
        },
        submitHandler: function(form){
            var dataString = 'email_newsletter='+$('#email_newsletter').val()+'&seccion='+$('#seccion').val();
            $.ajax({
                type: "POST",
                url:"model/newsletter.php",
                data: dataString,
                success: function(data){
                    $("#oknewsletter").html(data);
                    $("#oknewsletter").show();
                    document.getElementById('newsletterid').reset();
                 
                }
            });
        }
    });
});