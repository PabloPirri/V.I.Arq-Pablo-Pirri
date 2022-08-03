<!-- No funciono pero espero se entienda la idea-->

<?php

$mail = $_POST ['email'];
$mensage="";

$mensage= "Suscriptor: " $mail " \r\n";
$mensage .= "Suscripto el " date('d/m/Y', time());

$para = 'pablopirri.83@gmail.com';
$asunto = 'V.I. Arq - Suscripcion';


mail($para, $asunto, utf8_decode($mensage), $header);

header('Location:suscripcion.html');
