
 $(document).ready(function($){
 
    // on submit...
    $('#ajax-form').submit(function(e){
 
        e.preventDefault();
 
        $("#error").hide();
 
        var name = $("input#nombre").val();
        if(name == ""){
            $("#error").fadeIn()
            $("input#nombre").focus();
            return false;
        }
 

        var email = $("input#email").val();
        if(email == ""){
            $("#error").fadeIn()
            $("input#email").focus();
            return false;
        }
 

        var mensaje = $("input#mensaje").val();
        if(mensaje == ""){
            $("#error").fadeIn()
            $("input#mensaje").focus();
            return false;
        }

        var checkbox1 = $("input#checkbox1").val();
        if( $("input#checkbox1").prop("checked") == false) {

            $("#error").fadeIn()
            $("input#checkbox1").focus();
            return false;
        }

        var checkbox2 = $("input#checkbox2").val();
 
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