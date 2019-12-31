jQuery(document).ready(function() {

    console.log( "ready!" );
    $("#kendo-mas").click(
    	function(){
    		$(".kendo.oculto").toggle();
    		$(".solapa.oculto").toggle();
    		$(".textura").toggle();

    	}
    );
// $(".oculto").show();

});
