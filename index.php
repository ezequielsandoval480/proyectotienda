<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="menu.css">
	<link rel="stylesheet" href="menu.js">
	<link rel="stylesheet" href="modal.css">
	<meta http-equiv="Content-type" content="text/html">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	 

<body> 

<section class="sesion">
 
<?php 
//se realiza la conexión con el localhost
include"conexion.php";
$re=$cn->query("select * from comprass") or die();
while ($f=$re->fetch_array())
{
 ?>
    <div class="producto">
	<center>
		<img src="./productos/<?php echo $f['imagen'];?>"><br>	
		<span><?php  echo $f['Nombre'];?></span><br>
		<a href="categorias.php?id=<?php echo $f['id'];?>">ver</a>
	  </center>
	</div>

    <?php

    //se direcciona a categorías.php (se ubica en las distintas marcas (mbenz,peugeot,etc))
  }
    
   ?>

</section>
</body>
</html>