/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
    $("#ok").hide();

    $("#formid").validate({
        rules: {
            FullName: { required: true, minlength: 5},
            email: { required:true, email: true},
            subject: { required:true, minlength: 5},
            message: { required:true, minlength: 10}
        },
        messages: {
            FullName: "Por Favor introduce tu Nombre.",
            email : "Introduce un correo electronico Correcto",
            subject : "Ingresa el asunto del mensaje",
            message : "El campo Mensaje es obligatorio.",
        },
        submitHandler: function(form){
            var dataString = 'FullName='+$('#FullName').val()+'&email='+$('#email').val()+'&subject='+$('#subject').val()+'&message='+$('#message').val();
            $.ajax({
                type: "POST",
                url:"model/contacto_mail.php",
                data: dataString,
                success: function(data){
                    $("#ok").html(data);
                    $("#ok").show();
                    document.getElementById('formid').reset();
                 
                }
            });
        }
    });
});