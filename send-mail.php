<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require './vendor/phpmailer/phpmailer/src/Exception.php';
require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
require './vendor/phpmailer/phpmailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
    try {
      // Contenido del correo
      $asunto    = $_POST["nombre"];
      $contenido = $_POST["mensaje"];
    //   $para      = "nef.cob@gmail.com";
      $para      = "nef.cob@gmail.com";
     
      // Intancia de PHPMailer
      $mail = new PHPMailer();
   
      // Es necesario para poder usar un servidor SMTP como gmail
      $mail->isSMTP();
   
      // Si estamos en desarrollo podemos utilizar esta propiedad para ver mensajes de error
      //SMTP::DEBUG_OFF    = off (for production use) 0
      //SMTP::DEBUG_CLIENT = client messages 1 
      //SMTP::DEBUG_SERVER = client and server messages 2
      $mail->SMTPDebug     = 0;
   
      //Set the hostname of the mail server
      $mail->Host          = 'smtp.gmail.com';
      $mail->Port          = 465; // o 587
   
      // Propiedad para establecer la seguridad de encripción de la comunicación
      $mail->SMTPSecure    = PHPMailer::ENCRYPTION_SMTPS; // tls o ssl para gmail obligado
   
      // Para activar la autenticación smtp del servidor
      $mail->SMTPAuth      = true;
 
      // Credenciales de la cuenta
      $email              = 'gfranbm@gmail.com';
      $mail->Username     = $email;
      $mail->Password     = 'sdwl aqhc ifqi ilcp';
   
      // Quien envía este mensaje
      $mail->setFrom($email, $asunto);
 
      // Destinatario
      $mail->addAddress($para, 'Leo y Yas');
   
      // Asunto del correo
      $mail->Subject = $asunto;
 
      // Contenido
      $mail->IsHTML(true);
      $mail->CharSet = 'UTF-8';
      $css = '
            <style>
                /* Header */
                .header {
                    background-color: rgb(5, 65, 59);
                    color: rgb(195, 157, 70);
                    text-align: center;
                    padding: 10px;
                }

                /* Footer */
                .footer {
                    background-color: rgb(5, 65, 59);
                    color: rgb(195, 157, 70);
                    text-align: center;
                    padding: 10px;
                }
                .content{
                    padding: 10px;
                }
            </style>';
        $mail->Body    = sprintf("<!DOCTYPE html>
        <html>
        <head>
            <title>Felicitaciones por tu boda</title>
            $css
        </head>
        <body class='body'>
            <div class='content'>
                %s
            </div>
            <div class='footer'>
                <p>© 2023 BodaLeo&Yas</p>
            </div>
        </body>
        </html>
        ", $contenido);
   
      // Texto alternativo
      $mail->AltBody = '¡Felicitaciones!';
 
      // Enviar el correo
      $mail->send();

      $variable = 1; 
      $pagina = "/index.php"; // La página a la que deseas enviar la 
      $url = $pagina . "?message=" . urlencode($variable);

      header("location: " . $url);
      exit;
    }  catch (Exception $e) {
        $variable = 2; 
        $pagina = "/index.php"; // La página a la que deseas enviar la 
        $url = $pagina . "?message=" . urlencode($variable);
    }