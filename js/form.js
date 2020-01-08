
 $(document).ready(function($){
 
    // on submit...
    $('#ajax-form').submit(function(e){
 
        e.preventDefault();
 
        var errores;
        var name = $("input#nombre").val();
        var email = $("input#email").val();
        var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
        var mensaje = $("input#mensaje").val();
        var checkbox1 = $("input#checkbox1").val();
        //var checkbox2 = $("input#checkbox2").val();
    
     
        if(name == ""){
            $("#error-nombre").fadeIn()
            $("input#nombre").focus();
            errores = true;
        }
    
        if( !email_regex.test(email) ){
            $("#error-email").fadeIn()
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
 
        // ajax
        $.ajax({
            type:"POST",
            url: "./form/ajax-form-store.php",
            data: $(this).serialize(), // get all form field value in serialize form
            success: function(){
              $("#mensaje-exito").fadeIn();
              $(".input-submit").fadeOut();
            }
        });
    });  
 
    return false;
    });
