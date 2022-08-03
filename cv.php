<!-- No funciono pero espero se entienda la idea-->

<?php

$nombre = $_POST['Nombre y Apellido']
$mail = $_POST['email'];
$adjunto = $_FILES['adjunto'];

$nombre .= "Nombre y Apellido"
$mail .= "email: " $mail " \r\n";
$mail .= "Enviado el " date('d/m/Y', time());
$adjunto .= "Archivo Adjunto";

$file_tmp_name = $_FILES['adjunto']['tmp_name'];
$file_name = $_FILES['adjunto']['name'];
$file_size = $_FILES['adjunto']['size'];
$file_type = $_FILES['adjunto']['type'];

$para = 'pablopirri.83@gmail.com';
$asunto = 'V.I. Arq - CV';

mail($para, $asunto, utf8_decode($mail),$adjunto, $header);

$header('Location:curriculum.html';)
?>