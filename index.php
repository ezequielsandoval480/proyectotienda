<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prueba</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="modal.css">
	<link rel="stylesheet" href="fuente.css">
	<meta http-equiv="Content-type" content="text/html">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	 <script type="text/javascript">
	 	function openVentana(){
$(".ventana").slideDown("slow");
}

 	function closeVentana(){
$(".ventana").slideUp("fast");
}


	 </script>




<section class="sesion" >
<?php 
include ("conexion.php");
$re= $cn->query("select  * from comprass") or die ("error");
	    while ($f=$re->fetch_array())
			{ 		
 ?>
     <div class="producto">
	<center>
		<img src="./productos/<?php echo $f['imagen'];?>"><br>
		<span><h3><?php echo $f['Nombre'];?></h3></span><br>
		<h3><a href="./categorias.php?id=<?php echo $f['id'];?>">ver</a></h3>
	</center>
	</div>
	
	<?php 
	 }
    

   ?>
	</section>


</body>
</html>