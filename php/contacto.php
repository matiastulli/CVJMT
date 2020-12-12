<?php
 
if($_POST) {
    $NombreVisitante= "";
    $EmailVisitante = "";
    $TituloEmail = "";
    $Asunto = "";
    $MensajeVisitante = "";
     
    if(isset($_POST['NombreVisitante'])) {
      $NombreVisitante = filter_var($_POST['NombreVisitante'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['EmailVisitante'])) {
        $EmailVisitante = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['EmailVisitante']);
        $EmailVisitante = filter_var($EmailVisitante, FILTER_VALIDATE_EMAIL);
    }
     
    if(isset($_POST['TituloEmail'])) {
        $TituloEmail = filter_var($_POST['TituloEmail'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['MensajeVisitante'])) {
        $MensajeVisitante = htmlspecialchars($_POST['MensajeVisitante']);
    }
    
    if(strlen($TituloEmail) != 0) {
        $recipient = "jmatiastulli@gmail.com";
    }
     
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $EmailVisitante . "\r\n";
     
    if(mail($recipient, $TituloEmail, $MensajeVisitante, $headers)) {
        echo '<script>alert("Gracias por escribir. Te responderé en menos de 24 horas!."); window.location.href="/index.html"</script>';
    } else {
        echo '<script>alert("Lo sentimos, pero el correo electrónico no fue recibido.."); window.location.href="/contacto.html</script>';
    }
     
} else {
    echo '<script>alert("Algo anduvo mal"); window.location.href="/contacto.html</script>';
}
 
?>