<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="admin.css">
	<meta http-equiv="Content-type" content="text/html">
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

   
	<img src="mohe.png" alt="">
	
	<ul>
	<a href="javascript:openVentana();"><span class="icon-user">Registrarse</span></a>
	</ul>

    <ul>
	<a href=""><span class="icon-search"></span>
    <input type="text" name="" value=""></a>
    </ul> 

 



</head>

<body> 

<div class="container">
	<div class="ventana">
		
		<div class="form">
			<div class="cerrar"><a href="javascript:closeVentana();">Cerrar X</a></div>
			<h2>Registrarse</h2>
			<form>
			 <table>
				<tr>
				 <td>Usuario:</td>
				 <td><input type="text" placeholder="&#128273;usuario" name="usuario"></td>
				</tr>

				<tr>
				<td>Contraseña:</td>
				<td><input type="password" placeholder="&#128273;password" name="password"></td>
				</tr>
               
                <tr>
				<td></td>
				<td><input type="submit" placeholder="ingresar"></td>
				</tr>



			</table>
		</form>
	</div>	
</div>
</div>


	<header>

		<div id="menu">
			
		<ul class="nav">
		<li><a href="inicio.php"><span class="">Inicio</span></a></li>
		<li><a href="index.php"><span class=""></span>Categorías</a>
		<ul class="sub-nav">
			<li><a href=""><span class=""></span>Marcas</a></li>
			<ul class="sub-sub-nav">
			   <li><a href=""><span class=""></span>Ford</a>
			   <li><a href=""><span class=""></span>Peugeot</a>
			   <li><a href=""><span class=""></span>Mercedes Benz</a>
			   <li><a href=""><span class=""></span>Fiat</a>
 			   <li><a href=""><span class=""></span>Hyundai</a>
 			   <li><a href=""><span class=""></span>Renault</a>
 			   <li><a href=""><span class=""></span>Citroen</a>
 			   <li><a href=""><span class=""></span>Volskwagen</a>
			   </ul>
			   </li>

			<li><a href=""><span class=""></span>Tipos</a></li>
			<ul class="sub-sub-nav">
 			<li><a href=""><span class=""></span>Puerta delantera</a>
 			<li><a href=""><span class=""></span>Puerta trasera</a>
 			<li><a href=""><span class=""></span>Tapa de baúl</a>
 			<li><a href=""><span class=""></span>Paragolpe trasero</a>
 			<li><a href=""><span class=""></span>Paragolpe delantero</a>
 			<li><a href=""><span class=""></span>Guardabarro delantero</a>
 			<li><a href=""><span class=""></span>Guardabarro trasero</a>
 		      </ul>
			</li>
		</ul>
	</li>
		<li><a href=""><span class="icon-coin-dollar"></span>Formas de pago</a></li>

		<li><a href=""><span class=""></span>Contacto</a></li>
		</ul>
        <ul class="nav">
		<li><a href="cerrar.php"><span class=""></span>Cerrar sesion</a></li>
		</ul>

  <ul class="nav">
      <li><a href="carritodecompras.php"><span class="icon-cart">Carrito</span></a></li>
      
</ul>


	</header>
     <ul>
</div>


<section class="banner">
	<div class="banner-content">
	<h1 class="titulo1">Tienda online</h1>
	<h4 class="titulo3">Piezas</h4>
	<h4 class="titulo4">Autopartes</h4>
	</div>
</section>

 <section class="sesion">

 	<h2>Ultimas compras</h2>
 	<table width="90%">
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