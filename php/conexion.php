<!--
Crear un login y una página para registrar a un nuevo usuario con los siguientes datos:
usuario y contraseña.


(index.html) Login 	  -> Si el usuario existe 	 -> principal.html
(index.html) Login    -> Si el usuario no existe -> (index.html) Login
 registrar.html       -> Nuevo usuario           -> (index.html) Login

El login tendrá la opción para registrar.
Usar "estilos.css" en el ejercicio.

-->

<?php

$dbhost = "localhost";
$dbuser = "id15653775_matiastulli";
$dbpass = "Inalbis2020?";
$dbname = "id15653775_jmtingreso";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn)
{
	die("No hay conexion:" .mysqli_connect_error());
}
?>
