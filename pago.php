<?php 
session_start();
include "conexion.php";
$re=$cn->query("INSERT INTO forma de pago (Efectivo, Tarjeta de crédito, Tarjeta de débito) VALUES('Efectivo, Tarjeta de crédito, Tarjeta de débito')") or die ();
	    while ($f=$re->fetch_array()){ 	
	$arreglo[]=array('Efectivo'=>$f['Efectivo'],
                        'tarjeta de crédito'=>$f['tarjeta de crédito'],
                          'tarjeta de debito'=>$f['tarjeta de debito']);       
}
   if(isset($arreglo)){
   	$_SESSION['Efectivo']=$arreglo;
   	header("location:admin.php");
   }
   else{
   header("location:index.php?error datos no válidos");
   }
 ?>
 


