<?php 
session_start();
include "../conexion.php";
$arreglo=$_SESSION['proyecto tienda online'];
$numeroventa=0;
$re=$cn->query("SELECT * from  compras orden by numeroventa DESC limit 1") or die();
while ($f=$re->fetch_array()){
	$numeroventa=$f['numeroventa'];

if($numeroventa==0){
	$numeroventa=1;
}else{
	$numeroventa=$numeroventa+1;
}
for($i=0; $i<count($arreglo);$i++){
	$cn->query("insert into compras(numeroventa,imagen,nombre,precio,cantidad,subtotal) values(
  '.$numeroventa.',
   '".$arreglo[$i]['imagen']."',
   '".$arreglo[$i]['Nombre']."',
   '".$arreglo[$i]['precio']."',
   '".$arreglo[$i]['Cantidad']."',
   '".($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])."'
)")or die();
}
unset($_SESSION['proyecto tienda online']);
header('location:../admin.php');
}

 ?>