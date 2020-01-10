
 $(document).ready(function($){


    $('#ajax-form').submit(function(e){
 
        e.preventDefault();

        $("#error").hide();
        $("#error-nombre").hide();
        $("#error-email").hide();
        $("#mail-invalido").hide()
        $("#error-mensaje").hide();
        $("#error-checkbox").hide();
 
        var errores;
        var name = $("input#nombre").val();
        var email = $("input#email").val();
        var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
        var mensaje = $("input#mensaje").val();
        var checkbox1 = $("input#checkbox1").val();
             
        if(name == ""){
            $("#error-nombre").fadeIn()
            $("input#nombre").focus();
            errores = true;
        }

        if(email == ""){
            $("#error-email").fadeIn()
            $("input#nombre").focus();
            errores = true;
        }
    
        if( !email_regex.test(email) ){
            $("#mail-invalido").fadeIn()
            $("input#email").focus();
            errores = true;
        }

        if(mensaje == ""){
            $("#error-mensaje").fadeIn()
            $("input#mensaje").focus();
            errores = true;
        }

        if( $("input#checkbox1").prop("checked") == false) {
            $("#error-checkbox").fadeIn()
            $("input#checkbox1").focus();
            errores = true;
        }
     
        if(errores) {
            $("#error").fadeIn()
            return false;
         
        }

 
        ajax
        $.ajax({
            type:"POST",
            url: "./form/ajax-form-store.php",
            data: $(this).serialize(), 
            success: function(){
              $("#mensaje-exito").fadeIn();
              $(".input-submit").fadeOut();
            }
        });
    });  
 
    return false;


});
