<?php 
session_start();

if ( ($_GET['lang']) ){

    $lang = $_GET['lang'];
    //header('Location:'.$_SERVER['PHP_SELF']);
    header('Location: /kikentai/'.$lang."/");
    exit();
}

else {

// echo ($lang);
// echo ("<br>");
// echo ($_SERVER['PHP_SELF']);
 
}

switch($lang){
    case "es":
        include('locale/es.php');        
    break;
    case "en":
        include('locale/en.php');        
    break;
    case "fr":
        include('locale/fr.php');        
    break;
    default: 
        include('locale/es.php');

    }

?>

<!DOCTYPE html>

<html lang=" <?php echo $codigoIdioma ?> ">

<head>
	<!--Codificación del sitio-->

    <meta charset="UTF-8">
    
    <meta name="author" content="José Ángel Maestre, Circle Of Creators">

    <!--SEO TAGS-->
    <title> <?php echo $title ?> </title>
    <meta name="keywords" content="<?php echo $keywords ?>">

    <meta name="description" content="<?php echo $description ?>">

    <!-- MODO DESARROLLO - SITIO INVISIBLE PARA ROBOTS HASTA COMIENZO DE CAMPAÑA -->
    <meta name="robots" content="noindex, nofollow">

    <!-- Etiqueta canonical, indica que es el contenido original y las otras páginas son duplicados/traducciones -->

    <!-- FRAMEWORKS DE JAVASCRIPT -->
    <!-- jQuery-->
    <script src="../js/frameworks/jquery-3.4.1.min.js"></script>
    <!--jQuery UI-->
    <script src="../js/frameworks/jquery-ui.min.js"></script>
	<!--ResponsiveSlides-->
    <script src="../js/frameworks/responsiveslides.min.js"></script>


        <!-- CSS & Responsive-->
    <link rel="stylesheet" href="../fonts/fonts.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
                <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <?php 

    if ($_SESSION['lang'] == "es") {
        echo $canonical;
    }
     
    ?>

    <meta name="viewport" content="width=device-width">

</head>


<body>

    <!-- Menús -->
    <header id="menu-01" class="desktop menu top">
        <div class="row">
            <div class="col-2">
                <div class="contenedor-logo">
                    <a href="index.php?lang=<?php echo $lang ?>"><img src="../images/logos/kikentai-logo.png" alt=" <?php echo $altLogo ?> "></a>
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
                    <a href="index.php?lang=<?php echo $lang ?>><img src="../images/logos/kikentai-logo.png" alt=" <?php echo $altLogo ?> " ></a>
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
                    <a href="index.php?lang=<?php echo $lang ?>"><img src="../images/logos/kikentai-logo.png" alt=" <?php echo $altLogo ?> "></a>
                </div>
            </div>
            <div class="col-10">
                <div class="contenedor-qr">
                    <a href="../ar/"><img src="../images/menu/qr-code.png"></a>
                </div>
                <div id="lanza-menu" class="contenedor-menu">
                    <img src="../images/menu/hamburguesa.png">
                </div>
            </div>
        </div>
    </header>

  
    <div class="contenedor-principal oculto">

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
                            <li><img src="../images/slides-portada/kikentai-kendoka.jpg"></li>
                            <li><img src="../images/slides-portada/kikentai-men-nuki-do.jpg"></li>
                            <li><img src="../images/slides-portada/kikentai-kendo-shiai.jpg"></li>
                            <li><img src="../images/slides-portada/kikentai-men-kaeshi.jpg"></li>
                </ul>
            <img class="cartas-portada" src="../images/portada/cartas-kikentai.png">
            <div class="solapa inferior blanco"></div>
            
        </section>

        <!-- Información sobre el Kendo visible -->

        <section id="el-kendo" class="kendo intro">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div  class="contenedor-titulo">
                        <img src="../images/elementos-decorativos/kendo-enso-positivo.png">
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
                    <iframe id="yt-frame" class="desktop" width="853" height="480" src="https://www.youtube.com/embed/b3q6i_k8oME?autoplay=1&mute=1&loop=1&playlist=b3q6i_k8oME&controls=0&enablejsapi=1&modestbranding=1&start=77"> </iframe>
<!--                      <video class="desktop" width="853" height="480" autoplay muted loop>
                        <source src="../videos/kendo-video.mp4" type="video/mp4">
                        <source src="" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>  -->
                    <ul class="rslides mobile">
                            <li><img src="../images/slides-kendo/kendo-tsuki.jpg"></li>
                            <li><img src="../images/slides-kendo/kendo-bogu.jpg"></li>
                            <li><img src="../images/slides-kendo/kendo-entrenamiento.jpg"></li>
                    </ul>
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
                        <img src="../images/kendo-sabermas/kendo-shinai.jpg">
                    </div>
                    <div class="contenedor-texto">
                        <p>
                            Nulla eget cursus ante. Praesent sit amet mauris eget justo vulputate pellentesque quis pretium purus. Pellentesque scelerisque dictum ex, vitae lobortis arcu dictum vel. Curabitur et urna condimentum, dapibus tellus sit amet, sagittis lectus. Suspendisse
                            non nunc faucibus, elementum libero ut, pretium ex. Morbi vestibulum, sem quis luctus tristique, eros sem finibus massa, nec finibus metus arcu hendrerit arcu. Aenean at varius felis. Donec id quam quis massa cursus pretium
                            eget id velit. Cras at ultrices sem. Quisque eu molestie nisl. Aenean auctor urna eget mi ultricies, at sollicitudin turpis interdum. Aenean viverra ac nulla sed porttitor.
                        </p>
                    </div>
                    <div class="contenedor-imagen mobile">
                        <img src="../images/kendo-sabermas/kendo-seiza.jpg">
                    </div>
                    <div class="contenedor-texto">
                        <p>
                            Nulla eget cursus ante. Praesent sit amet mauris eget justo vulputate pellentesque quis pretium purus. Pellentesque scelerisque dictum ex, vitae lobortis arcu dictum vel. Curabitur et urna condimentum, dapibus tellus sit amet, sagittis lectus. Suspendisse
                            non nunc faucibus, elementum libero ut, pretium ex. Morbi vestibulum, sem quis luctus tristique, eros sem finibus massa, nec finibus metus arcu hendrerit arcu. Aenean at varius felis. Donec id quam quis massa cursus pretium
                            eget id velit. Cras at ultrices sem. Quisque eu molestie nisl. Aenean auctor urna eget mi ultricies, at sollicitudin turpis interdum. Aenean viverra ac nulla sed porttitor.
                        </p>
                    </div>
                    <div class="contenedor-imagen mobile">
                        <img src="../images/kendo-sabermas/kendo-men.jpg">
                    </div>
                </div>
                <div class="col-sm-6 desktop">
                    <div class="contenedor-imagen">
                        <img src="../images/kendo-sabermas/kendo-shinai.jpg">
                    </div>
                    <div class="contenedor-imagen">
                        <img src="../images/kendo-sabermas/kendo-seiza.jpg">
                    </div>
                    <div class="contenedor-imagen">
                        <img src="../images/kendo-sabermas/kendo-men.jpg">
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
                        <img src="../images/elementos-decorativos/kendo-enso-positivo.png">
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
                <!-- <img src="../images/iaido_general_01.jpg"> -->
                <ul class="rslides">
                            <li><img src="../images/slides-iaido/iaido-nukisuke.jpg"></li>
                            <li><img src="../images/slides-iaido/iaido-noto.jpg"></li>
                            <li><img src="../images/slides-iaido/iaido-kirioroshi.jpg"></li>
                </ul>
            </div>

            <div class="solapa inferior blanco oculto"></div>
            <div class="solapa superior textura"></div>

        </section>

        <section class="iaido iaido-2 saber-mas oculto">

            <div class="row">
                <div class="col-sm-6 desktop">
                    <div class="contenedor-imagen">
                        <img src="../images/iaido-sabermas/iaido-chiburi.jpg">
                    </div>
                    <div class="contenedor-imagen">
                        <img src="../images/iaido-sabermas/iaido-iaito.jpg">
                    </div>
                    <div class="contenedor-imagen">
                        <img src="../images/iaido-sabermas/iaido-furikaburi.jpg">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="contenedor-texto">
                        <p>
                            Nulla eget cursus ante. Praesent sit amet mauris eget justo vulputate pellentesque quis pretium purus. Pellentesque scelerisque dictum ex, vitae lobortis arcu dictum vel. Curabitur et urna condimentum, dapibus tellus sit amet, sagittis lectus. Suspendisse
                            non nunc faucibus, elementum libero ut, pretium ex. Morbi vestibulum, sem quis luctus tristique, eros sem finibus massa, nec finibus metus arcu hendrerit arcu. Aenean at varius felis. Donec id quam quis massa cursus pretium
                            eget id velit. Cras at ultrices sem. Quisque eu molestie nisl. Aenean auctor urna eget mi ultricies, at sollicitudin turpis interdum. Aenean viverra ac nulla sed porttitor.
                        </p>
                    </div>
                    <div class="contenedor-imagen mobile">
                        <img src="../images/iaido-sabermas/iaido-chiburi.jpg">
                    </div>
                    <div class="contenedor-texto">
                        <p>
                            Nulla eget cursus ante. Praesent sit amet mauris eget justo vulputate pellentesque quis pretium purus. Pellentesque scelerisque dictum ex, vitae lobortis arcu dictum vel. Curabitur et urna condimentum, dapibus tellus sit amet, sagittis lectus. Suspendisse
                            non nunc faucibus, elementum libero ut, pretium ex. Morbi vestibulum, sem quis luctus tristique, eros sem finibus massa, nec finibus metus arcu hendrerit arcu. Aenean at varius felis. Donec id quam quis massa cursus pretium
                            eget id velit. Cras at ultrices sem. Quisque eu molestie nisl. Aenean auctor urna eget mi ultricies, at sollicitudin turpis interdum. Aenean viverra ac nulla sed porttitor.
                        </p>
                    </div>
                    <div class="contenedor-imagen mobile">
                        <img src="../images/iaido-sabermas/iaido-iaito.jpg">
                    </div>
                    <div class="contenedor-texto">
                        <p>
                            Nulla eget cursus ante. Praesent sit amet mauris eget justo vulputate pellentesque quis pretium purus. Pellentesque scelerisque dictum ex, vitae lobortis arcu dictum vel. Curabitur et urna condimentum, dapibus tellus sit amet, sagittis lectus. Suspendisse
                            non nunc faucibus, elementum libero ut, pretium ex. Morbi vestibulum, sem quis luctus tristique, eros sem finibus massa, nec finibus metus arcu hendrerit arcu. Aenean at varius felis. Donec id quam quis massa cursus pretium
                            eget id velit. Cras at ultrices sem. Quisque eu molestie nisl. Aenean auctor urna eget mi ultricies, at sollicitudin turpis interdum. Aenean viverra ac nulla sed porttitor.
                        </p>
                    </div>
                    <div class="contenedor-imagen mobile">
                        <img src="../images/iaido-sabermas/iaido-furikaburi.jpg">
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
                        <img src="../images/elementos-decorativos/cartas-kikentai.png">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="contenedor-titulo">
                        <img src="../images/elementos-decorativos/kendo-enso-negativo.png">
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
                            <img src="../images/kendo-generica.jpg">
                        </div>
                    </div>

                </div>
                <div id="tabs-2" class="row">
                 	<div class="col-lg-6 col-12">
                        <div class="contenedor-imagen">
                            <img src="../images/kendo-generica.jpg">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="contenedor-texto">
                            <p>
                                Nulla eget cursus ante. Praesent sit amet mauris eget justo vulputate pellentesque quis pretium purus. Pellentesque scelerisque dictum ex, vitae lobortis arcu dictum vel. Curabitur et urna condimentum, dapibus tellus sit amet, sagittis lectus.
                            </p>
                        </div>
                 	</div>
            	</div>
            	<div id="tabs-3" class="row">
                 	<div class="col-12">
                 		<ul class="rslides">
                            <li><img src="../images/slides/imagen-0.jpg"></li>
                            <li><img src="../images/slides/imagen-1.jpg"></li>
                            <li><img src="../images/slides/imagen-2.jpg"></li>
                            <li><img src="../images/slides/imagen-3.jpg"></li>
                		</ul>
                    </div>

                </div>

            <div class="solapa inferior azul"></div>
            
        </section>

        <!-- Mapa de dojos en España visible -->

        <section class="mapa intro">

            <div id="dojos" class="row">
                <div class="col-lg-6 col-12">
                    <div  class="contenedor-titulo">
                        <img src="../images/elementos-decorativos/kendo-enso-positivo.png">
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
                            <iframe src="https://www.google.com/maps/d/embed?mid=1y1FBLnJkUs7TAMh6CSfgZu3vM-HhPW6w&ll=40.11139452423873%2C-3.082549678169471&z=6&ll=40.11139452423873%2C-3.082549678169471&z=6" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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

        <section class="listado-de-dojos">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <ul class="listado-dojos">
                        <li id="and" class="comunidad">Andalucía</li>
                            <ul class="and comunidad-desplegable">
                                <li><a href="">Kishinkai Dojo</a></li>
                            </ul>
                        <li id="ara" class="comunidad">Aragón</li>
                            <ul class="ara comunidad-desplegable">
                                <li><a href="">Kishinkai Dojo</a></li>
                            </ul>
                        <li id="ast"class="comunidad">Principado de Asturias</li>
                            <ul class="ast comunidad-desplegable">
                                <li><a href="">Kishinkai Dojo</a></li>
                            </ul>
                        <li id="bal" class="comunidad">Baleares</li>
                            <ul class="bal comunidad-desplegable">
                                <li><a href="">Kishinkai Dojo</a></li>
                            </ul>
                        <li id="can" class="comunidad">Canarias</li>
                            <ul class="can comunidad-desplegable">
                                <li><a href="">Kishinkai Dojo</a></li>
                            </ul>
                        <li id="cant" class="comunidad">Cantabria</li>
                            <ul class="cant comunidad-desplegable">
                                <li><a href="">Kishinkai Dojo</a></li>
                            </ul>
                        <li id="cast" class="comunidad">Castilla-La Mancha</li>
                            <ul class="cast comunidad-desplegable">
                                <li><a href="">Kishinkai Dojo</a></li>
                            </ul>
                        <li id="leo"class="comunidad">Castilla y León</li>
                            <ul class="leo comunidad-desplegable">
                                <li><a href="">Kishinkai Dojo</a></li>
                            </ul>
                        <li id="ceu" class="comunidad">Ceuta y Melilla</li>
                            <ul class="ceu comunidad-desplegable">
                                <li><a href="">Kishinkai Dojo</a></li>
                            </ul>
                    </ul>
                </div>
                <div class="col-sm-6 col-12">
                    <ul class="listado-dojos">
                        <li id="cat" class="comunidad">Cataluña</li>
                            <ul class="cat comunidad-desplegable">
                                <li><a href="">Kishinkai Dojo</a></li>
                            </ul>
                        <li id="ext" class="comunidad">Extremadura</li>
                            <ul class="ext comunidad-desplegable">
                                <li><a href="">Kishinkai Dojo</a></li>
                            </ul>
                        <li id="gal" class="comunidad">Galicia</li>
                            <ul class="gal comunidad-desplegable">
                                <li><a href="">Kishinkai Dojo</a></li>
                            </ul>
                        <li id="rio" class="comunidad">La Rioja</li>
                            <ul class="rio comunidad-desplegable">
                                <li><a href="">Kishinkai Dojo</a></li>
                            </ul>
                        <li id="mad" class="comunidad">Comunidad de Madrid</li>
                            <ul class="mad comunidad-desplegable">
                                <li><a href="">Kishinkai Dojo</a></li>
                            </ul>
                        <li id="mur" class="comunidad">Región de Murcia</li>
                            <ul class="mur comunidad-desplegable">
                                <li><a href="">Kishinkai Dojo</a></li>
                            </ul>
                        <li id="nav" class="comunidad">Comunidad Foral de Navarra</li>
                            <ul class="nav comunidad-desplegable">
                                <li><a href="">Kishinkai Dojo</a></li>
                            </ul>
                        <li id="vas" class="comunidad">País Vasco</li>
                            <ul class="vas comunidad-desplegable">
                                <li><a href="">Kishinkai Dojo</a></li>
                            </ul>
                        <li id="val" class="comunidad">Comunidad Valenciana</li>
                            <ul class="val comunidad-desplegable">
                                <li><a href="">Kishinkai Dojo</a></li>
                            </ul>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Formulario de contacto -->
        <section id="contacto" class="formulario">
            <div class="row">
                <div class="col-12">
                    <div  class="contenedor-titulo">
                        <img src="../images/elementos-decorativos/kendo-enso-negativo.png">
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
                            <img src="../images/footer/circle-of-creators.png">
                        </div>
                    </div>
                </div>
                <div class="row iconos-redes">
                    <div class="col-6">
                        <div class="caja-icono izq">
                            <a href="https://facebook.com/circle-of-creators">
                                    <img src="../images/footer/facebook.png">
                                </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="caja-icono der">
                            <a href="mailto:circle-of-creators@mail.com">
                                    <img src="../images/footer/email.png">
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
       
        <!--CARGA DE SCRIPTS JS-->
    <!--Script de slider-->
    <script src="../js/slider.js"></script>
    <!-- Scripts de navegación-->
    <script src="../js/desplegar.js"></script>
    <!-- Script de sticky header-->
    <script src="../js/sticky-header.js"></script>   
    <!-- AJAX del formulario --> 
    <script type="text/javascript" src="../js/form.js"> </script>




</body>

</html>

