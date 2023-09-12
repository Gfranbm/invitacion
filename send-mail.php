<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinatario = "nef.cob@gmail.com";
    $asunto = $_POST["nombre"];

    $mensaje = $_POST["mensaje"];
    $mensaje = str_replace("\n.", "\n..", $mensaje);

    // Cabeceras del correo
    $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: gfranbm@gmail.com\r\n";
    $headers .= 'Reply-To: gfranbm@gmail.com' . "\r\n";
                'X-Mailer: PHP/' . phpversion();

    // Enviar el correo
    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        echo "El correo se ha enviado correctamente.";
    } else {
        echo "Hubo un problema al enviar el correo.";
    }
}

?>
