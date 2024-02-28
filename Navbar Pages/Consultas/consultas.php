<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $dateReservation = $_POST["dateReservation"];
    $dayCount = $_POST["dayCount"];
    $peopleStaying = $_POST["peopleStaying"];
    $hearOfUs = $_POST["hearOfUs"];
    $message = $_POST["message"];
    $to = "info@losreyunos.net";
    $subject = "Solicitud del cliente";
    $headers = "From: $email";
    
    $mailBody = 
    "Nombre y Apellido: $name\n
    Teléfono: $phoneNumber\n
    E-mail: $email\n 
    Fecha aproximada de reserva: $dateReservation\n 
    Cantidad de días: $dayCount\n 
    Cantidad de personas: $peopleStaying\n 
    Nos conoció por: $hearOfUs\n 
    
    \n\nComentarios: $message";

        if (mail($to, $subject, $mailBody, $headers)) {
            echo "!E-mail ha sido enviado! Serás redirigido en 3 segundos.";
            echo "<script>setTimeout(function() { window.location.href = 'https://www.losreyunos.net'; }, 3000);</script>";
        } else {
            echo "Error sending email: " . error_get_last()['message'];
        }
    
}
?>

