jQuery(document).ready(function() {

	//Scroll a las diferentes secciones la web
	//las restas en píxeles son un pequeño ajuste para que el sticky header no tape parte de la sección

	$(".menu-link a ").click(function() {

		var href = $(this).attr('href');

		var posicion = $(href).offset().top;

		if (href == "#el-kendo") {
			posicion -= 50; 
		}

		if (href == "#el-juego") {
			posicion -= 150; 
		}

		if (href == "#dojos") {
			posicion -= 100; 
		}

		$("html, body").animate({
    				scrollTop: posicion
				}, 1000);
	});

	


	//Botones de la portada del slider

	$(".boton.portada-1").click(function () {
		$(".boton.portada-1").fadeOut();
		$(".boton.portada-2").fadeIn();
	});

	$(".boton.portada-2").click(function () {
		$(".boton.portada-2").fadeOut();
		$("html, body").animate({
    				scrollTop: $(".kendo.intro").offset().top
				}, 1000);
	});

	//Botones que despliegan los contenidos ocultos.
			
	$(".boton-desplegar").click(function () {

		var id = $(this).attr('id'); //Filtramos con la id del botón y la hago coincidir con la clase a desplegar

		var tipo = $("."+id).hasClass("oculto"); //filtro por el que me aseguro que sólo se despliegan divs ocultos

		if (tipo) {

			//Esta parte es para que las solapas diagonales casen unas con otras estéticamente según cambiamos los contenidos

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

			//la función que despliega el contenido propiamente


			$( "."+id+".oculto" ).slideToggle("1000", function(){

			//Oculta el botón para que la acción no sea reversible


			$("#"+id+".boton-desplegar").fadeOut();

			//Los diferentes scrollsTo para una transición más suave
			

			if (id == "kendo") {

				var posicionKendo = $("."+id+".saber-mas").offset().top - 100;
			
				$("html, body").animate({
    				scrollTop: posicionKendo
				}, 1000);
			}

			if (id =="iaido-1") {
				var posicionIaido = $(".iaido.intro").offset().top - 120;

				$("html, body").animate({
    				scrollTop: posicionIaido
				}, 1000);

			}

			if (id =="iaido-2") {
				var posicionIaido = $(".iaido.saber-mas").offset().top - 100;

				$("html, body").animate({
    				scrollTop: posicionIaido
				}, 1000);

			}

		});

		}

	});

	//Función de jQuery UI para cambiar entre tabs en la sección del juego

  	$( function() {
		$( "#tabs" ).tabs({
			collapsible: true
		});
	});
	

});
