<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo_inet.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Paquetes Inet Alto rendimiento para ti</title>
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
                    <li><a href="soporte.php" class="active">Soporte</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="fundacion.php">Socialmente Responsable</a></li>
                </ul>                  
            </nav>
        </div>
    </header>
<div class="bg-soporte"><!-- Seccion hero -->
    <div class="contenedor">
        <div class="contenedor-soporte-hero">
            <p class="titulo">¿Cuál es tu pregunta?</p>
            <input id="input-busqueda" class="input-hero" type="text" placeholder="Búsqueda por palabra">
        </div>
    </div>
</div><!-- Acabo seccion hero -->
<section class="seccion bg-blanco">
    <div class="contenedor contenedor-soporte">
        <p class="titulo">Preguntas Frecuentes</p>    
        <div class="contenido-soporte">
            <div class="soporte-preguntas">
                <div class="contenedor-pregunta">
                    <p class="pregunta">¿Cuál es el costo de instalación?</p>
                    <div class="respuesta">
                        <p >El costo total de instalación es de $1,299. (Precio sujeto a cambio)</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <p class="pregunta">¿Cómo se entrega el servicio?</p>
                    <div class="respuesta">
                        <p>Para brindar nuestro servicio de internet utilizamos tecnología inalámbrica soportada en fibra óptica. A través de los enlaces conocidos en las telecomunicaciones como “punto a multipunto” y “punto a punto”. El servicio que ofrece INET tiene la característica que es ilimitado (que los Mb que contrata no son consumibles) y que el servicio se conecta de manera inalámbrica (se instala una antena donde quedará el servicio y se enlazará a la torre más cercana de INET).</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <p class="pregunta">¿Cuáles son los horarios de atención?</p>
                    <div class="respuesta">
                        <p>En un horario de oficinas de Lunes a Viernes de 9:00 am a 6:00 pm y Sábado 9:00 am 2:00 pm, excepto días festivos.</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <p class="pregunta">¿Hay plazo de contratación?</p>
                    <div class="respuesta">
                        <p>Si. El plazo de contratación mínimo es de 18 meses consecutivos.</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <p class="pregunta">¿Dónde nos ubicamos?</p>
                    <div class="respuesta">
                        <p>Plaza Inet: Calle Emiliano Zapata 202 San Pedro, Texcoco Estado de México.</p>
                    </div>
                </div>
                <div class="contenedor-pregunta">
                    <p class="pregunta">¿Cuáles son las formas de pago?</p>
                    <div class="respuesta">
                        <p><span class="bold">Efectivo o con Tarjeta</span>: Directamente el área de cajas ubicada en nuestras oficinas.</p>
                        <p><span class="bold">Transferencia bancaria</span>: Para tu mayor comodidad y seguridad también contamos con esta forma de pago. Referencia para transferencia electrónica: 012180001061888932</p>
                     </div>
                </div>
                <div class="contenedor-pregunta">
                    <p class="pregunta">¿En cuántos días me instalan?</p>
                    <div class="respuesta">
                        <p>En el transcurso de 5 días hábiles. Y la posibilidad de ser antes de esos días ya establecidos.</p>
                     </div>
                </div>
                <div class="contenedor-pregunta">
                    <p class="pregunta">¿Qué otros trámites puedo hacer en oficinas de Plaza INET?</p>
                    <div class="respuesta">
                        <p>Cambio de plan</p>
                        <p>Reactivación</p>
                        <p>Cambio de Titular</p>
                        <p>Cambio de domicilio</p>
                     </div>
                </div>
                <div class="contenedor-pregunta">
                    <p class="pregunta">¿Dónde puedo reportar mi servicio?</p>
                    <div class="respuesta">
                        <p>Existen dos maneras para hacer un reporte de servicio. La primera es comunicarse al número telefónico 5959548478 con extensión 2 y 4. Y la segunda opción es mandar mensaje de WhatsApp al número 5576565334.</p>
                     </div>
                </div>
                <div class="contenedor-pregunta">
                    <p class="pregunta">¿Cuáles son los planes?</p>
                    <div class="respuesta">
                        <p>Ir a página de planes o llamar al número 595 9548478.</p>
                     </div>
                </div>
                <p id="resultado-busqueda"></p>
            </div>
            <div class="soporte-datos">
                <div class="contenedor-soporte-datos">
                    <div class="icono-texto">
                        <i class="fas fa-map-marker-alt"></i><span class="correo">Plaza Inet: Calle Emiliano Zapata 202, San Pedro, Texcoco, Estado de México</span>
                    </div>
                    <div class="icono-texto">
                        <i class="fas fa-envelope"></i><span class="correo">contacto@inetmexico.mx</span>
                    </div>
                    <div class="icono-texto">
                        <i class="fas fa-phone"></i><span class="telefono">595 9548478</span>
                    </div>
                    <div class="icono-texto">
                        <i class="fab fa-whatsapp"></i><a href="https://wa.me/525576565334" target="blank"><span class="telefono">Contactar por WhatsApp</span></a>
                    </div>
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
    <script src="js/preguntas.js"></script>
    <script src="js/busqueda.js"></script>
</body>
</html>