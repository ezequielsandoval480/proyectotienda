<?php 
session_start();
if(isset($_POST['usuario']) & isset($_POST ['contraseña'])){
include_once('index.php');
$conexion= conectar();
$u=$_POST['usuario'];
$c=$_POST['contraseña'];
$consulta=" SELECT * from clientes where usuario='$u' and contraseña='$c'";
$re=mysql_query($conexion, $consulta);
if($re and(mysqli_num_row($re)>0)){
	$f=mysql_fetch_array($re);
	$_SESSION['usuario']=$u;
    $_SESSION['foto']=$f['foto'];
    include_once('index.php');
 }
 else{
 	echo "<script>alert('Usuario o clave Incorrecto')</script>'";
 	header ("Refresh:0; url=../proyecto tienda online/index.php", true);
 }
}
?>
