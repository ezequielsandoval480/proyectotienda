<?php 

$host = "localhost";
$usuario = "root";
$clave = "root";
$db = "local";
$cn= new mysqli($host, $usuario, $clave, $db) or die ("no se puede establecer la conexion");
$sdb=mysqli_select_db($cn,$db) or die("la base de datos no existe");

 ?>