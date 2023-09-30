<?php
    $destinatario = 'cyairh24@gmail.com';
    //Donde se enviara el correo del mensaje
    $nombre = $_POST['Nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $comentario = $_POST['mensaje'];

    $header = "Enviado desde la pagina de MINA.com";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('correo  enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='Contacto.html'\",1000)</script>";

?>