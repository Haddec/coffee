<?php

$union = mysqli_connect("localhost","root","","yomary 2023   ");

$t= $_POST['Nombre'];
$u= $_POST['Apellido'];
$a= $_POST['Cédula'];
$i= $_POST['Correo Electronico'];
$s= $_POST['Contraseña'];

mysqli_query ($union,"INSERT INTO  values('',''$t,'$u','$a','$i','$s')");
echo("Envio con exito")





?>