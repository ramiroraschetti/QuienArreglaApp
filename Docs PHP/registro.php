<?php 
include ('functions.php');
$nombreCompleto=$_GET['nombreCompleto'];
$mail=$_GET['mail'];
$contrasena=$_GET['contrasena'];


ejecutarSQLCommand("INSERT INTO  `usuarios` (id_usuario, nombreCompleto, mail, contrasena)
VALUES ( NULL,
'$nombreCompleto' ,
'$mail' ,
'$contrasena')

 ON DUPLICATE KEY UPDATE `nombreCompleto`= '$nombreCompleto',
`mail`='$mail';");

 ?>