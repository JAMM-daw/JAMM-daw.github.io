<?php 

session_start();

if ( ($_GET['lang']) ){

    $lang = $_GET['lang'];
    header('Location: /kikentai/'.$lang."/");
    exit();
}

else {

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
    <!-- MODO DESARROLLO - SITIO INVISIBLE PARA ROBOTS HASTA COMIENZO DE CAMPAÑA -->
    <meta name="robots" content="noindex, nofollow">


    <!--El título lleva las palabras clave-->
    <title> <?php echo $title ?> </title>

    <!--Palabras clave que queremos indicar a Google-->

    <meta name="keywords" content="<?php echo $keywords ?>">

    <!--La descripción lleva las palabras clave-->

    <meta name="description" content="<?php echo $description ?>">

     <!-- Etiqueta canonical, indica que es el contenido original y las otras páginas son duplicados/traducciones -->
    <?php 


        if ($lang == "es") {
            echo     "<link rel='canonical' href='https:/esedigital.ovh/kikentai/es/'/> " ;
            echo     "<link rel='home' href='https:/esedigital.ovh/kikentai/es/' />" ;
        }
     
    ?>



<!--
    <script type="application/ld+json" class="aioseop-schema">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://pedropena.com/#organization","url":"https://pedropena.com/","name":"Pedro Pe\u00f1a","sameAs":["https://www.facebook.com/decoracionpedropena/","https://www.instagram.com/pedropenainteriordesign/"]},{"@type":"WebSite","@id":"https://pedropena.com/#website","url":"https://pedropena.com/","name":"Pedro pe\u00f1a","publisher":{"@id":"https://pedropena.com/#organization"}},{"@type":"WebPage","@id":"https://pedropena.com/#webpage","url":"https://pedropena.com/","inLanguage":"es","name":"INICIO","isPartOf":{"@id":"https://pedropena.com/#website"},"datePublished":"2018-07-05T09:24:29+00:00","dateModified":"2018-10-12T11:14:42+00:00","about":{"@id":"https://pedropena.com/#organization"},"description":"Pedro Pe\u00f1a es l\u00edder en dise\u00f1o de interiores exclusivo en Marbella. Proyectos de decoraci\u00f3n de interiores en Madrid, Nueva York, Londres y Par\u00eds entre otras."}]}</script>

    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php // echo $title ?>" />
    <meta property="og:description" content="<?php //echo $description ?>" />
    <meta property="og:url" content="https://esedigital.ovh/kikentai/" />
    <meta property="og:site_name" content="Ki Ken Tai" />
    <meta property="og:image" content="https://pedropena.com/wp-content/uploads/2018/10/pedro-pena-bueno.png" />
    <meta property="og:image:width" content="500" />
    <meta property="fb:admins" content="269827816375908" />
    <meta property="og:image:secure_url" content="https://pedropena.com/wp-content/uploads/2018/10/pedro-pena-bueno.png" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?php // echo $title ?>" />
    <meta name="twitter:description" content="<?php //echo $description ?>" />
    <meta name="twitter:image" content="https://pedropena.com/wp-content/uploads/2018/10/pedro-pena-bueno.png" />
            <script type="text/javascript" >
                window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
                ga('create', 'UA-8693451-1', 'auto');
                // Plugins
                
                ga('send', 'pageview');
            </script>
            <script async src="https://www.google-analytics.com/analytics.js"></script>

  --> 


    <link rel="apple-touch-icon" sizes="57x57" href="../images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../images/favicon/ms-icon-144x144.png">

        <!-- CSS & Responsive-->
    <link rel="stylesheet" href="../fonts/fonts.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
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
                        <li class="boton"><a href="#tabs-1"><?php echo $demoBoton ?></a><div class="fondo-boton"></div></li>
                        <li class="boton"><a href="#tabs-2"><?php echo $juegoMasInfoBoton ?></a><div class="fondo-boton"></div></li>
                        <li class="boton"><a href="#tabs-3"><?php echo $descargaBoton ?></a><div class="fondo-boton"></div></li>
                        
                    </ul>
                </div>

                <div id="tabs-1" class="row">
                    <div class="col-12">
                        <ul class="demo-kikentai desktop">
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>¿Cómo se juega a Ki Ken Tai?</h5>
                                        <p>Ki Ken Tai es una fiel representación de un combate de Kendo (shiai)</p>
                                        <p>Saluda a tu rival, ponte en guardia y...</p>
                                        <p>¡Hajime!</p>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-kikentai/como-se-juega-kikentai.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>El objetivo del juego</h5>
                                        <p>Un combate de kikentai representa un combate a SAN BON SHOBU de Kendo (al mejor de tres puntos) por lo que dura hasta que un kendoka marca 2 IPPON (puntos) o hasta que cualquier jugador roba su última carta del mazo, indicando con ello que el tiempo del combate se acabó.
                                        </p>
                                       <ul>
                                            <li>Si un kendoka consigue dos ippones, gana el combate.</li>
                                            <li>Si cuando se acaba el tiempo sólo un kendoka tiene un ippon, gana el combate.</li>
                                            <li>En cualquier otro caso, se produce un Hikiwake (empate).</li>
                                       </ul>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-kikentai/los-objetivos-de-kikentai.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>¿Cómo se marca un ippon?</h5>
                                        <p>Nuestros amigos de Zanshin Madrid te lo explican en este vídeo:</p>
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/TrXVyiznhes?start=47" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-kikentai/que-es-un-ippon-kendo.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>Tipos de ippon: el men</h5>
                                        <p>Es un corte en la zona superior de la cabeza del adversario</p>
                                        <p>¡MEN ARI!</p>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-kikentai/kendo-men-ippon.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>Tipos de ippon: el kote</h5>
                                        <p>Es un corte en la zona de las muñecas donde protegen los guantes</p>
                                        <p>¡KOTE ARI!</p>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-kikentai/kendo-kote-ippon.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>Tipos de ippon: el do</h5>
                                        <p>Es un corte en el zona del costado (izquierdo o derecho) donde nos protege la armadura</p>
                                        <p>¡DO ARI!</p>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-kikentai/kendo-do-ippon.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>Tipos de ippon: el tsuki</h5>
                                        <p>Es una estocada en una lengüeta que nos protege la garganta. Es un ataque muy arriesgado y sólo los kendokas más experimentados</p>
                                        <p>¡TSUKI ARI!</p>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-kikentai/kendo-tsuki-ippon.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>La zona de juego</h5>
                                        <p>El Shiajo o terreno de batalla está dividido en dos mitades, una para cada jugador. Cada mitad tiene a su vez tres áreas o Zonas: la zona de Combate, el área técnica y la zona de Focus.</p>
                                        <p>Se barajean y dividen las cartas de árbitro  en 3 montones de 5. Se coloca un montón en medio del área de combate, a la derecha del jugador rojo y los otros dos a la izquierda de las áreas técnica de cada jugador. </p> 
                                        <p>Los jugadores también barajean sus mazos de combate  y los colocan a su derecha. Enfrente de su mazo, pondrán su carta de personaje. Las cartas que jueguen como FOCUS durante la partida se colocarán en su zona de focus boca abajo, las tácticas y técnicas en el área técnica y las guardias  y ataques en la zona de combate.</p>
                                        <p>Las cartas eliminadas del juego irán a la pila de descartes , a la izquierda del jugador. A su derecha colocaremos los marcadores de Hansoku , si es que tenemos alguno.</p>
                                        </p>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-kikentai/el-shiaijo-kendo.jpg">
                            </li>
                            <li>
                                <img src="../images/demo-kikentai/zona-de-juego.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>Rondas de combate</h5>
                                        <p>Cada combate se divide en RONDAS. Una ronda se acaba cuando:</p>
                                        <ul>
                                            <li>Se consigue un punto.</li>
                                            <li>Se sufre un Hansoku (amonestación).</li>
                                            <li>Un jugador roba su última carta. Final del combate por tiempo.</li>
                                       </ul>
                                        <h5>Cada ronda se divide en 4 fases:</h5>
                                        <ul>
                                            <li>1.  Fase de Kamae (guardia): Cada jugador roba hasta tener 7 cartas y elige una guardia inicial.</li>
                                            <li>2.  Fase de Kiai (preparación): Donde se decide quien tendrá el primer turno.</li>
                                            <li>3.  Fase de negociación: Los jugadores juegan turnos alternos aplicando técnicas y ataques.</li>
                                            <li>4.  Fase de resolución: Se descubren las cartas de árbitro y se decide si hay ippon.</li>
                                       </ul>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-kikentai/el-shiaijo-kendo.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>Rondas de combate</h5>
                                        <ul>
                                            <li>1.  Fase de Kamae (guardia): Cada jugador roba hasta tener 7 cartas y elige una guardia inicial.</li>
                                       </ul>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-kikentai/cartas-de-guardia.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>Rondas de combate</h5>
                                        <ul>
                                            <li>2.  Fase de Kiai (preparación): Donde se decide quien tendrá el primer turno.</li>
                                       </ul>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-kikentai/kendo-jodan-kamae.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>Rondas de combate</h5>
                                        <ul>
                                            <li>3.  Fase de negociación: Los jugadores juegan turnos alternos aplicando técnicas y ataques.</li>
                                       </ul>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-kikentai/cartas-de-ataque.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>Rondas de combate</h5>
                                        <ul>
                                            <li>3.  Fase de negociación: Los jugadores juegan turnos alternos aplicando técnicas y ataques.</li>
                                       </ul>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-kikentai/cartas-de-tecnica.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>Rondas de combate</h5>
                                        <ul>
                                            <li>3.  Fase de negociación: Los jugadores juegan turnos alternos aplicando técnicas y ataques.</li>
                                       </ul>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-kikentai/cartas-de-tactica.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>Rondas de combate</h5>
                                        <ul>
                                            <li>4.  Fase de resolución: Se descubren las cartas de árbitro y se decide si hay ippon.</li>
                                       </ul>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-kikentai/cartas-de-arbitro.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>¡...y eso es todo!</h5>
                                        <p>Estamos preparando muchas cosas que iremos publicando próximamente. Si quieres estar al tanto de todas las noticias de Ki Ken Tai puedes suscribirte a nuestra newsletter para enterarte de todo antes que nadie.</p>
                                        <div class="contenedor-boton centro">
                                            <div class="boton suscribir">
                                                <a>Quiero suscribirme<?php// echo $queEsIaido ?></a>
                                                <div class="fondo-boton"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-kikentai/el-shiaijo-kendo.jpg">
                            </li>                              
                        </ul>
                        <ul class="demo-kikentai mobile">
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>¿Cómo se juega a Ki Ken Tai?</h5>
                                        <p>Ki Ken Tai es una fiel representación de un combate de Kendo (shiai)</p>
                                        <p>Saluda a tu rival, ponte en guardia y...</p>
                                        <p>¡Hajime!</p>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-mobile/como-se-juega.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>El objetivo del juego</h5>
                                        <p>Un combate de kikentai representa un combate a SAN BON SHOBU de Kendo (al mejor de tres puntos) por lo que dura hasta que un kendoka marca 2 IPPON (puntos) o hasta que cualquier jugador roba su última carta del mazo, indicando con ello que el tiempo del combate se acabó.
                                        </p>
                                       <ul>
                                            <li>Si un kendoka consigue dos ippones, gana el combate.</li>
                                            <li>Si cuando se acaba el tiempo sólo un kendoka tiene un ippon, gana el combate.</li>
                                            <li>En cualquier otro caso, se produce un Hikiwake (empate).</li>
                                       </ul>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-mobile/los-objetivos-kikentai.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>¿Cómo se marca un ippon?</h5>
                                        <p>Nuestros amigos de Zanshin Madrid te lo explican en este vídeo:</p>
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/TrXVyiznhes?start=47" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-mobile/que-es-un-ippon-kendo.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>Tipos de ippon: el men</h5>
                                        <p>Es un corte en la zona superior de la cabeza del adversario</p>
                                        <p>¡MEN ARI!</p>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-mobile/kendo-men-ippon.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>Tipos de ippon: el kote</h5>
                                        <p>Es un corte en la zona de las muñecas donde protegen los guantes</p>
                                        <p>¡KOTE ARI!</p>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-mobile/kendo-kote-ippon.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>Tipos de ippon: el do</h5>
                                        <p>Es un corte en el zona del costado (izquierdo o derecho) donde nos protege la armadura</p>
                                        <p>¡DO ARI!</p>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-mobile/kendo-do-ippon.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>Tipos de ippon: el tsuki</h5>
                                        <p>Es una estocada en una lengüeta que nos protege la garganta. Es un ataque muy arriesgado y sólo los kendokas más experimentados</p>
                                        <p>¡TSUKI ARI!</p>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-mobile/kendo-tsuki-ippon.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>La zona de juego</h5>
                                        <p>El Shiajo o terreno de batalla está dividido en dos mitades, una para cada jugador. Cada mitad tiene a su vez tres áreas o Zonas: la zona de Combate, el área técnica y la zona de Focus.</p>
                                        <p>Se barajean y dividen las cartas de árbitro  en 3 montones de 5. Se coloca un montón en medio del área de combate, a la derecha del jugador rojo y los otros dos a la izquierda de las áreas técnica de cada jugador. </p> 
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-mobile/el-shiaijo.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>Las rondas de juego</h5>
                                        <p>1. Fase de Kamae: Cada jugador roba hasta tener 7 cartas y elige una guardia inicial.</p>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-mobile/kendo-jodan-kamae.jpg">
                            </li>
                            <li>
                                <img src="../images/demo-mobile/cartas-de-guardia.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>Las rondas de juego</h5>
                                        <p>2.   Fase de Kiai : Donde se decide quien tendrá el primer turno.</p>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-mobile/el-shiaijo.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>Las rondas de juego</h5>
                                        <p>3.   Fase de negociación: Los jugadores juegan turnos alternos hasta que hay IPPON o uno recibe un Hansoku.</p>
                                        <p>En esta fase se juegan las cartas de ataque, técnica y táctica.</p>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-mobile/el-shiaijo.jpg">
                            </li>
                            <li>
                                <img src="../images/demo-mobile/cartas-de-ataque.jpg">
                            </li>
                            <li>
                                <img src="../images/demo-mobile/cartas-de-tecnica.jpg">
                            </li>
                            <li>
                                <img src="../images/demo-mobile/cartas-de-tacticas.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>Las rondas de juego</h5>
                                        <p>4. Fase de resolución: donde se decide si hay punto o no.</p>
                                        <p>En esta fase se revela la decisión de cada árbitro</p>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-mobile/el-shiaijo.jpg">
                            </li>
                            <li>
                                <img src="../images/demo-mobile/cartas-de-arbitro.jpg">
                            </li>
                            <li>
                                <div class="row contenido-demo">
                                    <div class="col-12">
                                        <div class="caja-texto">
                                        <h5>¡...y eso es todo!</h5>
                                        <p>Estamos preparando muchas cosas que iremos publicando próximamente. Si quieres estar al tanto de todas las noticias de Ki Ken Tai puedes suscribirte a nuestra newsletter para enterarte de todo antes que nadie.</p>
                                        <div class="contenedor-boton centro">
                                            <div class="boton suscribir">
                                                <a>Quiero suscribirme<?php// echo $queEsIaido ?></a>
                                                <div class="fondo-boton"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <img src="../images/demo-mobile/el-shiaijo.jpg">
                            </li> 
                        </ul>
                    </div>

                </div>

                <div id="tabs-2" class="row">
                    <div class="col-12">
                        <div class="contenedor-texto">
                            <h4>Contenido de la caja (100 cartas):</h4>
                            <ul>
                                <li>15 Cartas de árbitro</li>
                                <li>10 Cartas de Personaje</li>
                                <li>2 Cartas de Hansoku</li>
                                <li>2 Cartas de Guardias (dos caras)</li>
                                <li>15 Cartas de Ataques</li>
                                <li>36 Cartas Técnicas</li>
                                <li>20 Cartas de Tácticas</li>
                            </ul>
                            <h4>Formación del mazo:</h4>
                            <p>Para jugar una partida de KiKenTai, los jugadores necesitan tener un juego de cartas arbitrales. Además, cada jugador debe prepararse un mazo  de cartas que contenga las siguientes cartas y en las siguientes proporciones:</p>
                            <ul>
                                <li>1 Personaje</li>
                                <li>1 copia de cada carta de GUARDIA (Chudan, Jodan, Gedan, TsubaZeriAi)</li>
                                <li>50 Cartas de combate:</li>
                                <li>
                                    <ul>
                                        <li>Mínimo 15 cartas de ATAQUE, pudiendo tenerlas en cualquier proporción.</li>
                                        <li>4 copias máximo del resto de cartas.</li>
                                    </ul>
                                </li>
                            </ul>  

                        </div>
                    </div>
                </div>
                <div id="tabs-3" class="row">
                    <div class="col-12">
                        <div class="contenedor-texto">
                            <h4>Aún no tenemos material de descarga, pero...</h4>
                            <p>Estamos preparando muchas cosas que iremos publicando próximamente. Si quieres estar al tanto de todas las noticias de Ki Ken Tai puedes suscribirte a nuestra newsletter para enterarte de todo antes que nadie.</p>
                            <div class="contenedor-boton centro">
                                <div class="boton suscribir">
                                    <a>Quiero suscribirme<?php// echo $queEsIaido ?></a>
                                    <div class="fondo-boton"></div>
                                </div>
                        </div>
                 	</div>
            	</div>


            
            
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

        <section class="listado-de-dojos oculto">
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
                        <li id="nava" class="comunidad">Comunidad Foral de Navarra</li>
                            <ul class="nava comunidad-desplegable">
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

        <!-- FRAMEWORKS DE JAVASCRIPT -->
    <!-- jQuery-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
    </script>
    <!--jQuery UI-->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
            integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
            crossorigin="anonymous"
            async >
    </script>
    <!--ResponsiveSlides-->
    <script src="../js/frameworks/responsiveslides.min.js"></script>
       
        <!--CARGA DE SCRIPTS JS-->
    <!--Script de slider-->
    <script type="text/javascript" src="../js/slider.js"></script>
    <!-- Scripts de navegación-->
    <script type="text/javascript" src="../js/desplegar.js"></script>
    <!-- Script de sticky header-->
    <script type="text/javascript" src="../js/sticky-header.js"></script>   
    <!-- AJAX del formulario --> 
    <script type="text/javascript" src="../js/form.js"> </script>





</body>

</html>

