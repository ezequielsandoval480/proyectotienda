<?php 
session_start();
include "conexion.php";
$re=$cn->query("select * from usuarios where Usuario='".$_POST['Usuario']."'
	Password='".$_POST['Password']."'")or die ();
while ($f=$re->fetch_array()) {
	$arreglo[]= array('Nombre'=>$f['Nombre'],
       'Apellido'=>$f['Apellido'], 'Imagen'=>$f['Imagen']);
}
if(isset($arreglo)){
	$_SESSION['Usuario']=$arreglo;
	header("Location:../admin.php");
}else{
	header("Location:../index.php?error= datos no validos");

}


 ?>