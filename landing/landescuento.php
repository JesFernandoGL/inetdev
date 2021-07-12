<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../img/logo_inet.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/landing.css">
    <title>Cotiza tu nuevo servicio de Inet</title>
</head>
<body>
    <?php
        $erroresCampos= [];
        $mensajesExito= [];
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
                        
        require '../phpmailer/Exception.php';
        require '../phpmailer/PHPMailer.php';
        require '../phpmailer/SMTP.php';
        
        
        //Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        $nombre = '';
        $apellido = '';
        $email = '';
        $telefono = '';


        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $email = $_POST["email"];
            $telefono = $_POST["telefono"];
            
            $body = "Nombre: " . $nombre. "<br>" . "Apellido: " . $apellido . "<br>" . "Correo: " . $email . "<br>" . "Teléfono: " . $telefono;

            //Sanitizar

            $nombreSan = filter_var($nombre, FILTER_SANITIZE_STRING);
            $apellidoSan = filter_var($apellido, FILTER_SANITIZE_STRING);
            $emailSan = filter_var($email, FILTER_SANITIZE_EMAIL);
            $telefonoSan = filter_var($telefono, FILTER_SANITIZE_NUMBER_INT);
        
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
                $mail->setFrom($email, $nombre);
                $mail->addAddress('contacto@inetmexico.mx');                    //Add a recipient
            
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
            } catch (Exception $e) {
                $erroresCampos[] = 'Ocurrio un error inténtelo más tarde';
            }
        }
        }        
    ?>
    <div class="bg-principal">
        <div class="overlay">
            <div class="oferta-bg">
                    <div class="oferta-txt">
                        <p class="txt-oferta-big">$100 de bonificación</p>
                        <p class="txt-oferta-min">durante los primeros dos meses</p>
                    </div>
                </div>
                <div class="contenedor">
                
                    <div class="pos-relative">
                    
                        <div class="txt-landing">
                            <h1 class="titulo">Mejora tu servicio de Internet <span>hoy mismo</span></h1>
                            <p>Cotiza tu servicio de internet y haz válida nuestra oferta de julio, nos comunicaremos contigo por correo electrónico</p>
                        

                    <div class="form">
                        <form method="POST">
                            <fieldset>
                                <legend>Nos contactaremos contigo en menos de 24 horas</legend>

                                <div class="label-input">
                                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $nombre ?>">
                                </div>
                                <div class="label-input">
                                    <input type="text" id="apellido" name="apellido" placeholder="Apellido" value="<?php echo $apellido ?>">
                                </div>
                                <div class="label-input">
                                    <input type="email" name="email" placeholder="Correo" value="<?php echo $email ?>">
                                </div>
                                <div class="label-input">
                                    <input type="tel" name="telefono" placeholder="Teléfono" value="<?php echo $telefono ?>">
                                </div>
                                <button id="btn-form" class="btn" type="submit">Solicitar Cotización</button>
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
                </div>
            </div>
        </div>
    </div>

</body>
</html>