<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prueba</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="contacto.css">
	<link rel="stylesheet" href="menu.css">
	<link rel="stylesheet" href="menu.js">
	<link rel="stylesheet" href="style.css">
	<meta http-equiv="Content-type" content="text/html">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
				 <td>Nombre:</td>
				 <td><input type="text" placeholder="&#128273;usuario" name="usuario"></td>
				</tr>

	

				<tr>
				<td>Contraseña:</td>
				<td><input type="password" placeholder="&#128273;ingresa tu contraseña" name="contraseña"></td>
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
			
			<div class="button-menu">
			<a href="#" class="bt-menu"><span class="icon-menu"></span></a>
			
		</div>

			
		<ul class="nav">
		<li><a href="inicio.php"><span class="icon-home">Inicio</span></a></li>
		<li><a href=""><span class="icon-indent-increase"></span>Categorías</a>
		<ul class="sub-nav">
			<li><a href=""><span class=""></span>Marcas</a>
 		<ul class="sub-sub-nav">
 			<li><a href="marcapeugeot.php"><span class=""></span>Peugeot</a>
 			<li><a href="marcambenz.php"><span class=""></span>Mercedes Benz</a>
 			<li><a href=""><span class=""></span>Toyota</a>
 			<li><a href=""><span class=""></span>Fiat</a>
 			<li><a href=""><span class=""></span>Hyundai</a>
 			<li><a href=""><span class=""></span>Renault</a>
 			<li><a href=""><span class=""></span>Citroen</a>
 			<li><a href=""><span class=""></span>Volskwagen</a>
 		    </ul>

			</li>

		</ul>
	</li>
		<li><a href="formapago.php"><span class="icon-coin-dollar"></span>Formas de pago</a></li>

		<li><a href="contacto.php"><span class="icon-mobile"></span>Contacto</a></li>
		
    <li><a href="cerrar.php"><span class=""></span>Cerrar sesion</a></li>

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

 

<section class="formulario1">

    <div class="formulario2">
    	<center>
    
    <h3>Telefono:+549297-4608262</h3>

    <h3>E-mail:moheservices@gmail.com</h3>

    <a href="https://api.whatsapp.com/send?phone=+5492974608262&text=Hola!&nbsp;Quería&nbsp;consultarte&nbsp;por&nbsp;el&nbsp;producto&nbsp;solicitado">
 Enviar a whatsapp
   </a> 
      </center>


	</div>
	</section>
<center><h1>Califica el servicio</h1></center>
<?php 
include"estrella.php";

 ?>



<section class="redes">
	<center>
	<li>
	<a href=""><span class="icon-facebook2"></span></a>
	<a href=""><span class="icon-instagram"></span></a>
	<a href=""><span class="icon-whatsapp"></span></a>
</li>
	</center>
</section>


</body>
</html>