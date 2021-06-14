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
<?php
        $erroresCampos= [];
        $mensajesExito= [];
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
                        
        require 'phpmailer/Exception.php';
        require 'phpmailer/PHPMailer.php';
        require 'phpmailer/SMTP.php';
        
        
        //Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        $nombre = '';
        $apellido = '';
        $email = '';
        $telefono = '';
        $mensaje = '';

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $email = $_POST["email"];
            $telefono = $_POST["telefono"];
            $mensaje = $_POST["mensaje"];
            
            $body = "Nombre: " . $nombre. "<br>" . "Apellido: " . $apellido . "<br>" . "Correo: " . $email . "<br>" . "Teléfono: " . $telefono . "<br>" . "Mensaje: " . $mensaje;

            //Sanitizar

            $nombreSan = filter_var($nombre, FILTER_SANITIZE_STRING);
            $apellidoSan = filter_var($apellido, FILTER_SANITIZE_STRING);
            $emailSan = filter_var($email, FILTER_SANITIZE_EMAIL);
            $telefonoSan = filter_var($telefono, FILTER_SANITIZE_NUMBER_INT);
            $mensajeSan = filter_var($mensaje, FILTER_SANITIZE_STRING);
        
        if(!$nombreSan){
            $erroresCampos[] = 'Falta nombre';
        }
        
        if(!$apellidoSan){
            $erroresCampos[] = 'Falta apellido';
        }
        
        if(!$emailSan){
            $erroresCampos[] = 'Falta email';
        }
        
        if(!$telefonoSan){
            $erroresCampos[] = 'Falta teléfono';
        }

        if(!$mensajeSan){
            $erroresCampos[] = 'Falta mensaje';
        }        
        
            if(empty($erroresCampos)){

    
            
            try {
                //Server settings
                $mail->SMTPDebug = 0;                                       //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'contacto@inetmexico.mx';                  //SMTP username
                $mail->Password   = 'C0n.347.';                            //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            
                //Recipients
                $mail->setFrom($email , $nombre);
                $mail->addAddress('contacto@inetmexico.mx');                 //Add a recipient
            
                //Content
                $mail->isHTML(true);                                         //Set email format to HTML
                $mail->Subject = 'Tienes un Nuevo Mensaje desde Web';
                $mail->Body    = $body;
                $mail->CharSet = 'UTF-8';
      
            
                $mail->send();
                $mensajesExito[] = 'El mensaje se envió correctamente';
                $nombre = '';
                $apellido = '';
                $email = '';
                $telefono = '';
                $mensaje = '';
            } catch (Exception $e) {
                $erroresCampos[] = 'Ocurrio un error inténtelo más tarde';
                /* echo "Error al enviar mensaje: {$mail->ErrorInfo}"; */
            }
        }
        }        
?>    
<?php $page = 'contacto' ?>
<?php include "includes/header.php" ?>
<div class="hero-paginas bg-contacto"><!-- Seccion hero -->
    <div class="hero-overlay">
        <div class="contenedor hero-contenedor">
            <div class="hero-texto">
                <p class="titulo">Inet está para ayudarte</p>
                <p class="descripcion">Contáctanos</p>
            </div>
        </div>
    </div>
</div><!-- Acabo seccion hero -->
<section class="seccion seccion-contacto"><!-- Seccion Principal -->
    <div class="contenedor">
        <div class="contenedor-datos-mapa bg-blanco">
            <div class="contenedores-datos-mapa datos-formulario">
                <h2 class="titulo">Contacto</h2>
                <div class="contacto-datos">
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
                <div class="contacto-formulario bg-azul">
                    <form method="POST">
                        <fieldset>
                            <legend>Formulario de Contacto</legend>
                            <div class="label-input">
                                <input type="text" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $nombre ?>">
                            </div>
                            <div class="label-input">
                                <input type="text" id="apellido" name="apellido" placeholder="Apellido" value="<?php echo $apellido ?>">
                            </div>
                            <div class="label-input">
                                <input type="email" id="email" name="email" placeholder="Correo" value="<?php echo $email ?>">
                            </div>
                            <div class="label-input">
                                <input type="tel" id="telefono" name="telefono" placeholder="Teléfono" value="<?php echo $telefono ?>">
                            </div>
                            
                            <div class="label-input">
                                <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Escríbenos tu mensaje" ><?php echo $mensaje ?></textarea>
                            </div>
                            
                            <button class="btn btn-100" type="submit">Enviar</button>
                        </fieldset>
                    </form>
                </div>
                <?php foreach($erroresCampos as $error): ?>
                    <p class="error-campo"><?php echo $error; ?></p>
                <?php endforeach; ?>
                <?php foreach($mensajesExito as $mensaje): ?>
                    <p class="exito"><?php echo $mensaje; ?></p>
                <?php endforeach; ?>
            </div>
            <div class="contacto-mapa contenedores-datos-mapa">
                <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1880.4103613888817!2d-98.8861291503298!3d19.506347434355597!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x357bd5930e2f3380!2sPlaza%20Inet!5e0!3m2!1ses-419!2smx!4v1621524938827!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>
<div class="w-app">
    <a href="https://wa.me/525576565334" target="blank">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>
<?php include "includes/footer.php" ?>
    <script src="js/menu.js"></script>
</body>
</html>