<?php 
session_start();
include"conexion.php";
$arreglo=$_SESSION['productoscart'];
$numeroventa=0;
$re=$cn->query("select * from  productos  order by numeroventa DESC limit 1") or die();
while ($f=$re->fetch_array()){
	$numeroventa=$f['numeroventa'];
}
if($numeroventa==0){
	$numeroventa=1;

}else{
	$numeroventa=$numeroventa+1;
}

for($i=0; $i<count($arreglo);$i++){
	$cn->query ("insert into productos (numeroventa,imagen,Nombre,precio,Cantidad,subtotal) VALUES(
  ".$numeroventa.",
   '".$arreglo[$i]['imagen']."',
   '".$arreglo[$i]['Nombre']."',
   '".$arreglo[$i]['precio']."',
   '".$arreglo[$i]['Cantidad']."',
   '".($arreglo[$i]['precio']*$arreglo[$i]['Cantidad'])."'
)")or die();
}
unset($_SESSION['productoscart']);
header('location:admin.php');
 ?>