jQuery(document).ready(function() {
			
	$(".boton-desplegar").click(function () {

		var id = $(this).attr('id');


		var tipo = $("."+id).hasClass("oculto");

		if (tipo) {

			if (id == "kendo") {

				$(".kendo.video .solapa.superior.textura").hide();
				$(".kendo.video .solapa.inferior.blanco").show();
			}

			if (id == "iaido-1") {
				$(".kendo.saber-mas .solapa.superior.textura").hide();
			}

			if (id == "iaido-2") {
				$(".iaido.video .solapa.superior.textura").hide();
				$(".iaido.video .solapa.inferior.blanco").show();
			}


			$( "."+id+".oculto" ).slideToggle("1000", function(){


			$("#"+id+".boton-desplegar").fadeOut();
			
			$("html, body").animate({
    				scrollTop: $("."+id+".saber-mas").offset().top
				}, 2000);

		});

		}

		

	
	});
	

});
