<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Inet Servicio de Internet</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img/logo_inet.png" type="image/x-icon">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header class="header"><!-- Seccion Header -->
        <div class="contenedor header-content">
            <div class="logo-content">
                <a href="index.php"><img src="img/logo_inet_negro.png" alt="logo_inet"></a>
            </div>
            <div id="menu-btn" class="menu-btn">Menú
                <div class="menu-icon">
                    <span class="lin1"></span>
                    <span class="lin2"></span>
                    <span class="lin3"></span>
                </div>
            </div>
            <nav class="menu" id="menu">
                <ul>
                    <li><a href="planes.php">Planes</a></li>
                    <li><a href="productosyservicios.php">Productos y Servicios</a>
                        <ul>
                            <li><a href="productosyservicios.php#sec-productos">Productos</a></li>
                            <li><a href="productosyservicios.php#sec-servicios">Servicios</a></li>
                        </ul>                    
                    </li>
                    <li><a href="soporte.php">Soporte</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="fundacion.php">Socialmente Responsable</a></li>
                </ul>                  
            </nav>
        </div>
    </header>
    <div class="hero"><!-- Seccion hero -->
        <div class="hero-img">
            <picture>
                <source media="(max-width:620px)" srcset="img/banner-small-inicio1.jpg">
                <img src="img/banner-inicio1.jpg" alt="" loading="lazy">    
            </picture>            
        </div>
        <div class="hero-img">
            <picture>
                <source media="(max-width:620px)" srcset="img/banner-small-inicio2.jpg">
                <img src="img/banner-inicio2.jpg" alt="" loading="lazy">    
            </picture>    
        </div>
        <div class="hero-img">
            <picture>
                <source media="(max-width:620px)" srcset="img/banner-small-inicio3.jpg">
                <img src="img/banner-inicio3.jpg" alt="" loading="lazy">    
            </picture>
        </div>
        <div class="hero-overlay">
            <div class="contenedor-botones-hero">
                <button class="btn-carrousel-hero" id="btn-anterior-hero">&lt;</button>
                <button class="btn-carrousel-hero" id="btn-siguiente-hero">&gt;</button>
            </div>
            <div class="contenedor hero-contenedor">                
                <div class="hero-datos">
                    <p class="telefono">Cotiza tu servicio llamando al <span class="numero-telefono">595 9548478</span></p>
                    
                </div>
                <div class="hero-texto-inicio">
                    <p class="titulo">Internet al alcance de todos</p>
                    <h1 class="subtitulo">Internet Ilimitado</h1>
                    <a class="btn btn-100" href="landing/landescuento.php">Contáctanos</a>
                </div>
            </div>
        </div>

    </div><!-- Acabo seccion hero -->
    <section class="seccion bg-blanco"><!-- Sección Paquetes -->
        <div class="contenedor">
            <div class="contenedor-paquetes">
                <h2 class="titulo">Planes para cada necesidad</h2>
                <h3 class="subtitulo">Optimizamos nuestro servicio para que tengas la mejor calidad en red</h3>
                <div class="paquetes">
                    <div class="contenedor-paquete">
                        <div class="paquete"><!-- Paquete Basico -->
                            <div class="cintillo bg-paquete1">
                                <div class="nombre-paquete">
                                    <p>Plan Basic</p>
                                </div>
                                <div class="numero-paquete">
                                    <p>5 Mb</p>
                                </div>
                            </div>
                            <div class="contenido-paquete">
                                <div class="txt-dispositivos">
                                    <p>Recomendado de:</p>
                                    <p>3-4 dispositivos</p>
                                    <div class="iconos-paquete">
                                        <i class="fas fa-mobile-alt"></i>
                                        <i class="fas fa-laptop"></i>
                                    </div>
                                </div>
                                <p class="descripcion-paquete">Plan utilizado principalmente para uso escolar y navegación en redes sociales con la mejor calidad en red.</p>
                                <p class="precio-paquete">$300</p>
                                <a class="btn" href="https://wa.me/525576565334?text=Me%20interesa%20saber%20más%20sobre%20el%20Plan%20Basic" target="blank">Contáctanos</a>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor-paquete">
                        <div class="paquete"><!-- Paquete Medium -->
                            <div class="cintillo bg-paquete2">
                                <div class="nombre-paquete">
                                    <p>Plan Medium</p>
                                </div>
                                <div class="numero-paquete">
                                    <p>7 Mb</p>
                                </div>
                            </div>
                            <div class="contenido-paquete">
                                <div class="txt-dispositivos">
                                    <p>Recomendado de:</p>
                                    <p>5-7 dispositivos</p>
                                    <div class="iconos-paquete">
                                        <i class="fas fa-mobile-alt"></i>
                                        <i class="fas fa-laptop"></i>
                                        <i class="fas fa-desktop"></i>
                                    </div>
                                </div>
                                <p class="descripcion-paquete">Plan para realizar Home Office, entretenimiento y actividades escolares de nivel media superior y superior.</p>
                                <p class="precio-paquete">$500</p>
                                <a class="btn" href="https://wa.me/525576565334?text=Me%20interesa%20saber%20más%20sobre%20el%20Plan%20Medium" target="blank">Contáctanos</a>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor-paquete">
                        <div class="paquete"><!-- Paquete Premium -->
                            <div class="cintillo bg-paquete3">
                                <div class="nombre-paquete">
                                    <p>Plan Premium</p>
                                </div>
                                <div class="numero-paquete">
                                    <p>10 Mb</p>
                                </div>
                            </div>
                            <div class="contenido-paquete">
                                <div class="txt-dispositivos">
                                    <p>Recomendado de:</p>
                                    <p>8-10 dispositivos</p>
                                    <div class="iconos-paquete">
                                        <i class="fas fa-mobile-alt"></i>
                                        <i class="fas fa-laptop"></i>
                                        <i class="fas fa-desktop"></i>
                                        <i class="fas fa-tv"></i>
                                    </div>
                                </div>
                                <p class="descripcion-paquete">Plan para PyMEs y mundo gamer, donde podrán navegar con la mejor conexión sin ninguna interrupción de red.</p>
                                <p class="precio-paquete">$800</p>
                                <a class="btn" href="https://wa.me/525576565334?text=Me%20interesa%20saber%20más%20sobre%20el%20Plan%20Premium" target="blank">Contáctanos</a>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor-paquete">
                        <div class="paquete"><!-- Paquete Personalizado -->
                            <div class="cintillo bg-paquete4">
                                <div class="nombre-paquete">
                                    <p>Plan a tu medida</p>
                                </div>
                                <div class="numero-paquete">
                                    <p>Desde $300</p>
                                </div>
                            </div>
                            <div class="contenido-paquete">
                                <div class="txt-dispositivos">
                                    <p>Recomendado de:</p>
                                    <p>+ 10 dispositivos</p>
                                    <div class="iconos-paquete">
                                        <i class="fas fa-mobile-alt"></i>
                                        <i class="fas fa-laptop"></i>
                                        <i class="fas fa-desktop"></i>
                                        <i class="fas fa-tv"></i>
                                    </div>
                                </div>
                                <p class="descripcion-paquete">Plan destinado para la necesidad que requieras y donde podrás adquirir tu servicio de internet.</p>
                                <p class="precio-paquete">Desde $300</p>
                                <a class="btn" href="https://wa.me/525576565334?text=Me%20interesa%20saber%20más%20sobre%20el%20Plan%20a%20tu%20Medida" target="blank">Contáctanos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="seccion bg-azul"><!-- Seccion Beneficios -->
        <div class="contenedor">
            <div class="contenedor-beneficios">
                <div class="beneficios-texto txt-blanco">
                    <h2>Beneficios de nuestros servicios</h2>
                    <p>Brindamos atención a nuestros clientes de forma personalizada, rápida y efectiva. Al ser una empresa local nos permite brindarles la mejor atención.</p>
                    <p>Somos claros y precisos en los detalles de nuestros planes, sin añadir costos ocultos o cargos innecesarios, con el objetivo de que tengas la mejor experiencia.</p>
                    <p>Asesoramos de forma empática y humana para que obtengan el plan adecuado, considerando tu uso particular de internet.</p>
                </div>
                <div class="beneficios-imagen">
                    <img src="img/inet2.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="seccion bg-blanco"><!-- Seccion Resultados Inet -->
        <div class="contenedor">
            <div class="contenedor-resultados txt-negro">
                <h2 class="titulo">Buscamos siempre mejorar</h2>
                <h3 class="subtitulo">Resultados de nuestros servicios</h3>
                <div class="contenedor-resultados-texto">
                    <div class="resultados-numero-texto">
                        <p class="numero">21</p>
                        <p class="texto">Localidades donde brindamos servicio</p>
                    </div>
                    <div class="resultados-numero-texto">
                        <p class="numero">+ 1,500</p>
                        <p class="texto">Clientes satisfechos con Inet</p>
                    </div>
                    <div class="resultados-numero-texto">
                        <p class="numero">9</p>
                        <p class="texto">Años de experiencia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="w-app">
        <a href="https://wa.me/525576565334" target="blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
    <footer class="seccion bg-grisOscuro"><!-- Seccion Resultados Inet -->
        <div class="contenedor">
            <div class="contenedor-footer txt-blanco">
                <div class="footer-enlaces">
                    <a href="planes.php">Planes</a>
                    <a href="productosyservicios.php">Productos y Servicios</a>
                    <a href="soporte.php">Soporte</a>
                    <a href="nosotros.php">Nosotros</a>
                    <a href="contacto.php">Contacto</a>
                    <a href="fundacion.php">Socialmente Responsable</a>
                </div>
                <div class="footer-copy">
                   <p><span>&#169 </span>2021 Inet</p>
                </div>
                <div class="footer-contacto">
                    <div>
                        <i class="fas fa-phone"></i><span class="telefono">595 9548478</span>
                    </div>
                    <div>
                        <i class="fas fa-envelope"></i><span class="correo">contacto@inetmexico.mx</span>
                    </div>
                    <div>
                        <i class="fas fa-map-marker-alt"></i><span class="direccion">Plaza Inet: Calle Emiliano Zapata 202, San Pedro, Texcoco, Estado de México</span>
                    </div>
                    <div class="redes-sociales">
                        <a href="https://facebook.com/inetmexico/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    </div>
                    
                    <div class="footer-maps">
                        <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1880.4103613888817!2d-98.8861291503298!3d19.506347434355597!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x357bd5930e2f3380!2sPlaza%20Inet!5e0!3m2!1ses-419!2smx!4v1621524938827!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="js/menu.js"></script>
    <script src="js/carrouselinicio.js"></script>
</body>

</html>