
<?php 
include "estructura/cabecera.php";

 ?>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	 <script type="text/javascript">
	 	function openVentana(){
$(".ventana").slideDown("slow");
}

 	function closeVentana(){
$(".ventana").slideUp("fast");
}

	 </script>


</head>

<body> 


 <section class="sesion">

 	<h2>Ultimas compras</h2>
 	<table width="90%" border="1px">
 		<tr>
 			<td>Imagen</td>
 			<td>Nombre</td>
 			<td>precio</td>
 			<td>Cantidad</td>
 			<td>Subtotal</td>
 			<td>Suma Total</td>
 		</tr>
 		
 

<?php 
session_start();
include"conexion.php";
$re=$cn->query("select  * from productos");
$numeroventa=0;
$total=0;

while($f=$re->fetch_array()){
 $total = $total +$f['subtotal'];

	  
   if($numeroventa !=$f['numeroventa']){
    echo '<tr><td>Compra Número: '.$f['numeroventa'].'</td></tr>';
   }


   $numeroventa=$f['numeroventa'];
   echo '<tr>
   <td><img src="./productos/'.$f['imagen'].'"width="100px" height="100px"/></td>
   <td>'.$f['Nombre'].'</td>
   <td>$'.$f['precio'].'</td>
   <td>'.$f['Cantidad'].'</td>
   <td>$'.$f['subtotal'].'</td>
   <td> $'.$total.'</td>
    
   </tr>';

 
 }

   
 ?>
</table>

</section>
</body>
</html>