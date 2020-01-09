<?php 
session_start();

if ( isset($_GET['lang']) ){

    $_SESSION['lang'] = $_GET['lang'];
    header('Location:'.$_SERVER['PHP_SELF']);
    exit();
}
else {

}

switch($_SESSION['lang']){
    case "es":
        require('locale/es.php');        
    break;
    case "en":
        require('locale/en.php');        
    break;
    case "fr":
        require('locale/fr.php');        
    break;
    default: 
        require('locale/es.php');        
    }
?>

<!DOCTYPE html>

<html>

<head>
	<!--Codificación del sitio-->

    <meta charset="UTF-8">
    <html lang=" <?php echo $codigoIdioma ?> ">

    <meta name="author" content="José Ángel Maestre, Circle Of Creators">

    <!--SEO TAGS-->
    <title> <?php echo $title ?> </title>
    <meta name="keywords" content="<?php echo $keywords ?>">

    <meta name="description" content="<?php echo $description ?>">

    <!-- MODO DESARROLLO - SITIO INVISIBLE PARA ROBOTS HASTA COMIENZO DE CAMPAÑA -->
    <meta name="robots" content="noindex, nofollow">
    <!-- Etiqueta canonical, indica que es el contenido original y las otras páginas son duplicados/traducciones -->
    <?php 

    if ($_SESSION['lang'] == "es") {
        echo $canonical;
    }
     
    ?>

    <!-- CSS & Responsive-->
    <link rel="stylesheet" href="./fonts/fonts.css" type="text/css">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
        <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width">

</head>


<body>
    

    <!-- Menús -->
    <header id="menu-01" class="desktop menu top">
        <div class="row">
            <div class="col-2">
                <div class="contenedor-logo">
                    <a href="/#"><img src="./images/kikentai-logo-2.png" alt=" <?php echo $altLogo ?> "></a>
                </div>
            </div>
            <div class="col-10">
                <ul class="lang-menu">
                    <li class="lang-link"><a href="index.php?lang=es">ES</a></li>
                    <li class="lang-link"><a href="index.php?lang=en">EN</a></li>
                    <li class="lang-link"><a href="index.php?lang=fr">FR</a></li>
                </ul>
                <ul class="menu">
                    <li class="menu-link"><a href="#el-kendo"><?php echo $elKendo ?> </a></li>
                    <li class="menu-link"><a href="#el-juego"><?php echo $elJuego ?> </a></li>
                    <li class="menu-link"><a href="#la-demo"><?php echo $laDemo ?> </a></li>
                    <li class="menu-link"><a href="#dojos"><?php echo $dojos ?> </a></li>
                    <li class="menu-link"><a href="#contacto"><?php echo $contacto ?> </a></li>
                </ul>
            </div>
        </div>
    </header>
    <header id="menu-02" class="desktop menu sticky">
        <div class="row">
            <div class="col-2">
                <div class="contenedor-logo">
                    <a href="/#"><img src="./images/kikentai-logo-2.png" alt=" <?php echo $altLogo ?> " ></a>
                </div>
            </div>
            <div class="col-10">
                <ul class="lang-menu">
                    <li class="lang-link"><a href="index.php?lang=es">ES</a></li>
                    <li class="lang-link"><a href="index.php?lang=en">EN</a></li>
                    <li class="lang-link"><a href="index.php?lang=fr">FR</a></li>
                </ul>
                <ul class="menu">
                    <li class="menu-link"><a href="#el-kendo"><?php echo $elKendo ?> </a></li>
                    <li class="menu-link"><a href="#el-juego"><?php echo $elJuego ?> </a></li>
                    <li class="menu-link"><a href="#la-demo"><?php echo $laDemo ?> </a></li>
                    <li class="menu-link"><a href="#dojos"><?php echo $dojos ?> </a></li>
                    <li class="menu-link"><a href="#contacto"><?php echo $contacto ?> </a></li>
                </ul>
            </div>
        </div>
    </header>

<header id="menu-03" class="mobile menu top sticky">
        <div class="row">
            <div class="col-2">
                <div class="contenedor-logo">
                    <a href="/#"><img src="./images/kikentai-logo-2.png" alt=" <?php echo $altLogo ?> "></a>
                </div>
            </div>
            <div class="col-10">
                <div class="contenedor-qr">
                    <a href="ar/index.html"><img href="/ardemo2/" src="./images/qr-code.png"></a>
                </div>
                <div id="lanza-menu" class="contenedor-menu">
                    <img src="./images/hamburguesa.png">
                </div>
            </div>
        </div>
    </header>

  
    <div class="contenedor-principal">

    	<!--Menú desplegable móvil -->

        <section class="menu-full-mobile oculto">
            <div class="row">
                <div class="col-12">
                 <ul class="lang-menu">
                    <li class="lang-link"><a href="index.php?lang=es">ES</a></li>
                    <li class="lang-link"><a href="index.php?lang=en">EN</a></li>
                    <li class="lang-link"><a href="index.php?lang=fr">FR</a></li>
                </ul>
                <ul class="menu">
                    <li class="menu-link"><a href="#el-kendo"><?php echo $elKendo ?> </a></li>
                    <li class="menu-link"><a href="#el-juego"><?php echo $elJuego ?> </a></li>
                    <li class="menu-link"><a href="#la-demo"><?php echo $laDemo ?> </a></li>
                    <li class="menu-link"><a href="#dojos"><?php echo $dojos ?> </a></li>
                    <li class="menu-link"><a href="#contacto"><?php echo $contacto ?> </a></li>
                </ul>
                </div>
            </div>
        </section>
        
        <!-- Slider de imágenes -->

        <section class="slider">
            <div class="row">
                <div class="col-12 col-lg-10">
                    <h1>KI KEN TAI</h1>
                    <h2> <?php echo $sliderTitulo ?> </h2>
                </div>
                <div class="col-12">
                    <div class="contenedor-boton centro">
                        <div class="boton portada-1">
                            <a><?php echo $sliderBoton ?></a>
                            <div class="fondo-boton"></div>
                        </div>
                        <div class="boton portada-2">
                            <a><?php echo $sliderBoton2 ?></a>
                            <div class="fondo-boton"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="capa-slider"></div>
                <ul class="rslides">
                            <li><img src="./images/slides/imagen-0.jpg"></li>
                            <li><img src="./images/slides/imagen-1.jpg"></li>
                            <li><img src="./images/slides/imagen-2.jpg"></li>
                            <li><img src="./images/slides/imagen-3.jpg"></li>
                </ul>
            <img class="cartas-portada" src="./images/cartas-kikentai-portada.png">
            <div class="solapa inferior blanco"></div>
            
        </section>

        <!-- Información sobre el Kendo visible -->

        <section id="el-kendo" class="kendo intro">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div  class="contenedor-titulo">
                        <img src="./images/kendo-enso-positivo.png">
                        <h3 class="subtitulo"> <?php echo $queEsKendo ?> </h3>
                    </div>
                </div>
                <div class="col-12">
                    <div class="contenedor-texto">
                        <p>
                            Nulla eget cursus ante. Praesent sit amet mauris eget justo vulputate pellentesque quis pretium purus. Pellentesque scelerisque dictum ex, vitae lobortis arcu dictum vel. Curabitur et urna condimentum, dapibus tellus sit amet, sagittis lectus. Suspendisse
                            non nunc faucibus, elementum libero ut, pretium ex. Morbi vestibulum, sem quis luctus tristique, eros sem finibus massa, nec finibus metus arcu hendrerit arcu. Aenean at varius felis. Donec id quam quis massa cursus pretium
                            eget id velit. Cras at ultrices sem. Quisque eu molestie nisl. Aenean auctor urna eget mi ultricies, at sollicitudin turpis interdum. Aenean viverra ac nulla sed porttitor.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="kendo video">
            <div class="solapa superior blanco"></div>
                <div class="caja-video">
                    <div class="row">
                        <div class="col-12">
                            <div class="contenedor-boton centro inicio">
                                <div id="kendo" class="boton boton-desplegar">
                                    <a><?php echo $sabermasBoton ?></a>
                                    <div class="fondo-boton"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <img src="./images/practicar-kendo.jpg"> -->
                    <iframe id="yt-frame" width="100%" height="850px" src="https://www.youtube.com/embed/LHNPoSBJvn8?autoplay=1&mute=1&enablejsapi=1"> </iframe>
                </div>

            <div class="solapa inferior blanco oculto"></div>
            <div class="solapa superior textura"></div>

        </section>

        <!-- Información sobre el Kendo desplegable -->

        <section id="kendo-saber-mas" class="kendo saber-mas oculto ">

            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="contenedor-texto">
                        <p>
                            Nulla eget cursus ante. Praesent sit amet mauris eget justo vulputate pellentesque quis pretium purus. Pellentesque scelerisque dictum ex, vitae lobortis arcu dictum vel. Curabitur et urna condimentum, dapibus tellus sit amet, sagittis lectus. Suspendisse
                            non nunc faucibus, elementum libero ut, pretium ex. Morbi vestibulum, sem quis luctus tristique, eros sem finibus massa, nec finibus metus arcu hendrerit arcu. Aenean at varius felis. Donec id quam quis massa cursus pretium
                            eget id velit. Cras at ultrices sem. Quisque eu molestie nisl. Aenean auctor urna eget mi ultricies, at sollicitudin turpis interdum. Aenean viverra ac nulla sed porttitor.
                        </p>
                    </div>
                    <div class="contenedor-imagen mobile">
                        <img src="./images/kendo-generica.jpg">
                    </div>
                    <div class="contenedor-texto">
                        <p>
                            Nulla eget cursus ante. Praesent sit amet mauris eget justo vulputate pellentesque quis pretium purus. Pellentesque scelerisque dictum ex, vitae lobortis arcu dictum vel. Curabitur et urna condimentum, dapibus tellus sit amet, sagittis lectus. Suspendisse
                            non nunc faucibus, elementum libero ut, pretium ex. Morbi vestibulum, sem quis luctus tristique, eros sem finibus massa, nec finibus metus arcu hendrerit arcu. Aenean at varius felis. Donec id quam quis massa cursus pretium
                            eget id velit. Cras at ultrices sem. Quisque eu molestie nisl. Aenean auctor urna eget mi ultricies, at sollicitudin turpis interdum. Aenean viverra ac nulla sed porttitor.
                        </p>
                    </div>
                    <div class="contenedor-imagen mobile">
                        <img src="./images/kendo-generica.jpg">
                    </div>
                    <div class="contenedor-texto">
                        <p>
                            Nulla eget cursus ante. Praesent sit amet mauris eget justo vulputate pellentesque quis pretium purus. Pellentesque scelerisque dictum ex, vitae lobortis arcu dictum vel. Curabitur et urna condimentum, dapibus tellus sit amet, sagittis lectus. Suspendisse
                            non nunc faucibus, elementum libero ut, pretium ex. Morbi vestibulum, sem quis luctus tristique, eros sem finibus massa, nec finibus metus arcu hendrerit arcu. Aenean at varius felis. Donec id quam quis massa cursus pretium
                            eget id velit. Cras at ultrices sem. Quisque eu molestie nisl. Aenean auctor urna eget mi ultricies, at sollicitudin turpis interdum. Aenean viverra ac nulla sed porttitor.
                        </p>
                    </div>
                    <div class="contenedor-imagen mobile">
                        <img src="./images/kendo-generica.jpg">
                    </div>
                </div>
                <div class="col-sm-6 desktop">
                    <div class="contenedor-imagen">
                        <img src="./images/kendo-generica.jpg">
                    </div>
                    <div class="contenedor-imagen">
                        <img src="./images/kendo-generica.jpg">
                    </div>
                    <div class="contenedor-imagen">
                        <img src="./images/kendo-generica.jpg">
                    </div>
                </div>
                <div class="col-12">
                    <div class="contenedor-boton centro">
                        <div id ="iaido-1" class="boton boton-desplegar">
                            <a><?php echo $queEsIaido ?></a>
                            <div class="fondo-boton"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="solapa inferior blanco oculto"></div>
            <div class="solapa superior textura"></div>
        </section>
        <!-- Información sobre el Iaido desplegable -->

        <section class="iaido iaido-1 intro oculto">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="contenedor-titulo">
                        <img src="./images/kendo-enso-positivo.png">
                        <h3 class="subtitulo"><?php echo $queEsIaido ?></h3>
                    </div>
                </div>
                <div class="col-12">
                    <div class="contenedor-texto">
                        <p>
                            Nulla eget cursus ante. Praesent sit amet mauris eget justo vulputate pellentesque quis pretium purus. Pellentesque scelerisque dictum ex, vitae lobortis arcu dictum vel. Curabitur et urna condimentum, dapibus tellus sit amet, sagittis lectus. Suspendisse
                            non nunc faucibus, elementum libero ut, pretium ex. Morbi vestibulum, sem quis luctus tristique, eros sem finibus massa, nec finibus metus arcu hendrerit arcu. Aenean at varius felis. Donec id quam quis massa cursus pretium
                            eget id velit. Cras at ultrices sem. Quisque eu molestie nisl. Aenean auctor urna eget mi ultricies, at sollicitudin turpis interdum. Aenean viverra ac nulla sed porttitor.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="iaido iaido-1 video oculto">

            <div class="solapa superior blanco"></div>

            <div class="caja-video">
                <div class="row">
                        <div class="col-12">
                            <div class="contenedor-boton centro inicio">
                                <div id="iaido-2" class="boton boton-desplegar">
                                    <a><?php echo $sabermasBoton ?></a>
                                    <div class="fondo-boton"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <img src="./images/iaido_general_01.jpg">
            </div>

            <div class="solapa inferior blanco oculto"></div>
            <div class="solapa superior textura"></div>

        </section>

        <section class="iaido iaido-2 saber-mas oculto">

            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="contenedor-texto">
                        <p>
                            Nulla eget cursus ante. Praesent sit amet mauris eget justo vulputate pellentesque quis pretium purus. Pellentesque scelerisque dictum ex, vitae lobortis arcu dictum vel. Curabitur et urna condimentum, dapibus tellus sit amet, sagittis lectus. Suspendisse
                            non nunc faucibus, elementum libero ut, pretium ex. Morbi vestibulum, sem quis luctus tristique, eros sem finibus massa, nec finibus metus arcu hendrerit arcu. Aenean at varius felis. Donec id quam quis massa cursus pretium
                            eget id velit. Cras at ultrices sem. Quisque eu molestie nisl. Aenean auctor urna eget mi ultricies, at sollicitudin turpis interdum. Aenean viverra ac nulla sed porttitor.
                        </p>
                    </div>
                    <div class="contenedor-imagen mobile">
                        <img src="./images/kendo-generica.jpg">
                    </div>
                    <div class="contenedor-texto">
                        <p>
                            Nulla eget cursus ante. Praesent sit amet mauris eget justo vulputate pellentesque quis pretium purus. Pellentesque scelerisque dictum ex, vitae lobortis arcu dictum vel. Curabitur et urna condimentum, dapibus tellus sit amet, sagittis lectus. Suspendisse
                            non nunc faucibus, elementum libero ut, pretium ex. Morbi vestibulum, sem quis luctus tristique, eros sem finibus massa, nec finibus metus arcu hendrerit arcu. Aenean at varius felis. Donec id quam quis massa cursus pretium
                            eget id velit. Cras at ultrices sem. Quisque eu molestie nisl. Aenean auctor urna eget mi ultricies, at sollicitudin turpis interdum. Aenean viverra ac nulla sed porttitor.
                        </p>
                    </div>
                    <div class="contenedor-imagen mobile">
                        <img src="./images/kendo-generica.jpg">
                    </div>
                    <div class="contenedor-texto">
                        <p>
                            Nulla eget cursus ante. Praesent sit amet mauris eget justo vulputate pellentesque quis pretium purus. Pellentesque scelerisque dictum ex, vitae lobortis arcu dictum vel. Curabitur et urna condimentum, dapibus tellus sit amet, sagittis lectus. Suspendisse
                            non nunc faucibus, elementum libero ut, pretium ex. Morbi vestibulum, sem quis luctus tristique, eros sem finibus massa, nec finibus metus arcu hendrerit arcu. Aenean at varius felis. Donec id quam quis massa cursus pretium
                            eget id velit. Cras at ultrices sem. Quisque eu molestie nisl. Aenean auctor urna eget mi ultricies, at sollicitudin turpis interdum. Aenean viverra ac nulla sed porttitor.
                        </p>
                    </div>
                    <div class="contenedor-imagen mobile">
                        <img src="./images/kendo-generica.jpg">
                    </div>
                </div>
                <div class="col-sm-6 desktop">
                    <div class="contenedor-imagen">
                        <img src="./images/kendo-generica.jpg">
                    </div>
                    <div class="contenedor-imagen">
                        <img src="./images/kendo-generica.jpg">
                    </div>
                    <div class="contenedor-imagen">
                        <img src="./images/kendo-generica.jpg">
                    </div>
                </div>
                <div class="col-12">
                    <div class="contenedor-boton centro">
                        <div id ="iaido-1" class="boton boton-desplegar">
                            <a><?php echo $queEsIaido ?></a>
                            <div class="fondo-boton"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="solapa superior textura"></div>
        </section>

        <!-- Información sobre el juego de cartas visible -->


        <section class="juego intro">

            <div class="solapa superior azul oculto"></div>

            <div class="row sin-margen-izq">
                <div class="col-lg-6 col-12">
                    <div id="el-juego" class="contenedor-imagen">
                        <img src="./images/cartas-kikentai.png">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="contenedor-titulo">
                        <img src="./images/kendo-enso-negativo.png">
                        <h3 class="subtitulo"><?php echo $queEsKikentai ?></h3>
                    </div>
                    <div class="contenedor-texto">
                        <p>
                            Nulla eget cursus ante. Praesent sit amet mauris eget justo vulputate pellentesque quis pretium purus. Pellentesque scelerisque dictum ex, vitae lobortis arcu dictum vel. Curabitur et urna condimentum, dapibus tellus sit amet, sagittis lectus. Suspendisse
                            non nunc faucibus, elementum libero ut, pretium ex. Morbi vestibulum, sem quis luctus tristique, eros sem finibus massa, nec finibus metus arcu hendrerit arcu. Aenean at varius felis. Donec id quam quis massa cursus pretium
                            eget id velit. Cras at ultrices sem. Quisque eu molestie nisl. Aenean auctor urna eget mi ultricies, at sollicitudin turpis interdum. Aenean viverra ac nulla sed porttitor.
                        </p>
                    </div>
                </div>
            </div>

            <div id="tabs">

                <div id ="la-demo" class="row botonera">
                    <ul class="contenedor-boton centro">
                        <li class="boton"><a href="#tabs-1"><?php echo $juegoMasInfoBoton ?></a><div class="fondo-boton"></div></li>
                        <li class="boton"><a href="#tabs-2"><?php echo $descargaBoton ?></a><div class="fondo-boton"></div></li>
                        <li class="boton"><a href="#tabs-3"><?php echo $demoBoton ?></a><div class="fondo-boton"></div></li>
                    </ul>
                </div>

                <div id="tabs-1" class="row">
                    <div class="col-lg-6 col-12">
                        <div class="contenedor-texto">
                            <p>
                                Nulla eget cursus ante. Praesent sit amet mauris eget justo vulputate pellentesque quis pretium purus. Pellentesque scelerisque dictum ex, vitae lobortis arcu dictum vel. Curabitur et urna condimentum, dapibus tellus sit amet, sagittis lectus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="contenedor-imagen">
                            <img src="./images/kendo-generica.jpg">
                        </div>
                    </div>

                </div>

            </div>

            <div class="solapa inferior azul"></div>
            
        </section>

        <!-- Mapa de dojos en España visible -->

        <section class="mapa intro">

            <div id="dojos" class="row">
                <div class="col-lg-6 col-12">
                    <div  class="contenedor-titulo">
                        <img src="./images/kendo-enso-positivo.png">
                        <h3 class="subtitulo"><?php echo $dondeEntreno ?></h3>
                    </div>
                </div>
                <div class="col-12">
                    <div class="contenedor-texto">
                        <p>
                            Nulla eget cursus ante. Praesent sit amet mauris eget justo vulputate pellentesque quis pretium purus. Pellentesque scelerisque dictum ex, vitae lobortis arcu dictum vel. Curabitur et urna condimentum, dapibus tellus sit amet, sagittis lectus. Suspendisse
                            non nunc faucibus, elementum libero ut, pretium ex. Morbi vestibulum, sem quis luctus tristique, eros sem finibus massa, nec finibus metus arcu hendrerit arcu. Aenean at varius felis. Donec id quam quis massa cursus pretium
                            eget id velit. Cras at ultrices sem. Quisque eu molestie nisl. Aenean auctor urna eget mi ultricies, at sollicitudin turpis interdum. Aenean viverra ac nulla sed porttitor.
                        </p>
                    </div>
                </div>
            </div>

        </section>
        <section class="mapa frame">

            <div class="solapa superior blanco"></div>


                        <div class="caja-mapa">
                            <iframe src="https://www.google.com/maps/d/embed?mid=1y1FBLnJkUs7TAMh6CSfgZu3vM-HhPW6w" width="100%" height="650"></iframe>
                        </div>


            <div class="solapa inferior blanco"></div>

        </section>

        
        <section class="listado">
            <div class="row">
                <div class="col-12">
                    <div class="contenedor-boton centro inicio">
                        <div id="listado-de-dojos" class="boton boton-desplegar">
                            <a><?php echo $listadoBoton ?></a>
                            <div class="fondo-boton"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Listado de dojos en España desplegable -->

        <section class="listado-de-dojos oculto">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <ul class="listado-dojos">
                        <li>Andalucía</li>
                        <li>Aragón</li>
                        <li>Principado de Asturias</li>
                        <li>Baleares</li>
                        <li>Canarias</li>
                        <li>Cantabria</li>
                        <li>Castilla-La Mancha</li>
                        <li>Castilla y León</li>
                        <li>Ceuta y Melilla</li>
                    </ul>
                </div>
                <div class="col-sm-6 col-12">
                    <ul class="listado-dojos">
                        <li>Cataluña</li>
                        <li>Extremadura</li>
                        <li>Galicia</li>
                        <li>La Rioja</li>
                        <li>Comunidad de Madrid</li>
                        <li>Región de Murcia</li>
                        <li>Comunidad Foral de Navarra</li>
                        <li>País Vasco</li>
                        <li>Comunidad Valenciana</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Formulario de contacto -->
        <section id="contacto" class="formulario">
            <div class="row">
                <div class="col-12">
                    <div  class="contenedor-titulo">
                        <img src="./images/kendo-enso-negativo.png">
                        <h3 class="subtitulo"><?php echo $queContacto ?></h3>
                    </div>
                    <div class="contenedor-texto">
                        <p>
                            Nulla eget cursus ante. Praesent sit amet mauris eget justo vulputate pellentesque quis pretium purus. Pellentesque scelerisque dictum ex, vitae lobortis arcu dictum vel. Curabitur et urna condimentum, dapibus tellus sit amet, sagittis lectus. Suspendisse
                            non nunc faucibus, elementum libero ut, pretium ex. Morbi vestibulum, sem quis luctus tristique, eros sem finibus massa, nec finibus metus arcu hendrerit arcu. Aenean at varius felis. Donec id quam quis massa cursus pretium
                            eget id velit. Cras at ultrices sem. Quisque eu molestie nisl. Aenean auctor urna eget mi ultricies, at sollicitudin turpis interdum. Aenean viverra ac nulla sed porttitor.
                        </p>
                    </div>
                </div>


                <form action="javascript:void(0)" method="post" id="ajax-form" class="form-contacto form-contacto-es" novalidate="novalidate">
                    <div class="row estructura-formulario">
                        <div class="col-12 col-md-6">
                            <div class="caja-formulario nombre">
                                <input type="text" id="nombre" name="nombre" value="" class="input input-texto" aria-required="true" aria-invalid="false" placeholder="<?php echo $placeholderNombre ?>">
                                <span id="error-nombre" class="campos-ocultos"><?php echo $errorNombre ?></span>
                </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="caja-formulario email">
                                
                <input type="email" id="email" name="email" value="" class="input input-texto" aria-required="true" aria-invalid="true" placeholder="<?php echo $placeholderEmail ?>">                              
                            <span id="error-email" class="campos-ocultos"><?php echo $errorEmail ?></span>
                            <span id="mail-invalido" class="campos-ocultos"><?php echo $errorEmail2 ?></span>
                    </div>
                        </div>
                        <div class="col-12">
                            <div class="caja-formulario mensaje">
                                <input type="textarea" id="mensaje" name="mensaje" value="" class="input input-texto" aria-invalid="false" placeholder="<?php echo $placeholderMensaje ?>">                               
                                <span id="error-mensaje" class="campos-ocultos"><?php echo $errorMensaje ?></span>
                    </div>
                        </div>
                        <div class="col-12">
                            <div class="caja-formulario check-privacy">
                                <input type="checkbox" id="checkbox1" name="checkbox1" value="1" aria-invalid="false" aria-required="true">
                                
                    <a><?php echo $checkbox1 ?></a>
                            <span id="error-checkbox" class="campos-ocultos"><?php echo $errorCheckbox ?></span>
                        </div>
                        <div class="col-12">
                            <div class="caja-formulario check-privacy">
                                <input type="checkbox" id="checkbox2" name="checkbox2" value="1" aria-invalid="false" aria-required="true">
                                <a><?php echo $checkbox2 ?></a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="caja-formulario-boton">
                                <input type="submit" value="<?php echo $botonSubmit ?>" class="input-submit obligatorio">
                                <p id="error" class="campos-ocultos"><?php echo $errorGeneral ?></p>
                                <p id="mensaje-exito" class="campos-ocultos"><?php echo $mensajeExito ?></p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

    </div>

    <!-- Footer -->

    <footer>

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="logo-footer">
                            <img src="./images/circle-of-creators.png">
                        </div>
                    </div>
                </div>
                <div class="row iconos-redes">
                    <div class="col-6">
                        <div class="caja-icono izq">
                            <a href="https://facebook.com/circle-of-creators">
                                    <img src="./images/facebook.png">
                                </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="caja-icono der">
                            <a href="mailto:circle-of-creators@mail.com">
                                    <img src="./images/email.png">
                                </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 copyright">
                <p><?php echo $footer ?></p>
            </div>
        </div>
    </footer>
    

    <!-- FRAMEWORKS DE JAVASCRIPT -->
    <!-- jQuery-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!--jQuery UI-->
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="crossorigin="anonymous"></script>
	<!--ResponsiveSlides-->
    <script src="./js/responsiveslides.min.js"></script>
    
    <!--CARGA DE SCRIPTS JS-->
	<!--Script de slider-->
    <script src="./js/slider.js"></script>
    <!-- Scripts de navegación-->
    <script src="./js/desplegar.js"></script>
    <!-- Script de sticky header-->
    <script src="./js/sticky-header.js"></script>   
    <!-- AJAX del formulario --> 
	<script type="text/javascript" src="./js/form.js"> </script>


</body>

</html>

