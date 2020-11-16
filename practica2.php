<?php 
include"conexion.php";
$re=$cn->query("SELECT SUM(subtotal) as TotalPrecios, *  FROM comprass WHERE GROUP BY (*)");
while($f=$re->fetch_array()){
if($TotalPrecios !=$f['TotalPrecios']){
    echo '<tr><td>Total: ';
   }

$TotalPrecios=$f['TotalPrecios']; 

}

 ?>
