<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="menu.css">
	<link rel="stylesheet" href="menu.js">
	<link rel="stylesheet" href="style.css">
	<meta http-equiv="Content-type" content="text/html">
	<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
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
		<section id="menu">

		<div class="button-menu">
			<a href="#" class="bt-menu"><span class="icon-menu"></span>Menu</a>
			
		</div>

	
		<ul class="nav">
		<li><a href="#Section1"><span class="icon-home"></span>Inicio</a></li>
		<li><a href="#Section2"><span class="icon-indent-increase"></span>Categorías</a>
		<ul class="sub-nav">
			<li><a href=""><span class=""></span>Marcas</a>
			<ul class="sub-sub-nav">
 			<li><a href="marcapeugeot.php"><span class=""></span>Peugeot</a>
 			<li><a href="marcambenz.php"><span class=""></span>M.Benz</a>
 			<li><a href="marcatoyota.php"><span class=""></span>Toyota</a>
 			<li><a href="marcafiat.php"><span class=""></span>Fiat</a>
 			<li><a href="marcahyundai.php"><span class=""></span>Hyundai</a>
 			<li><a href="marcarenault.php"><span class=""></span>Renault</a>
 			<li><a href="marcacitroen.php"><span class=""></span>Citroen</a>
 			<li><a href="marcavolkswagen.php"><span class=""></span>Volskwagen</a>
 		    </ul>
		</ul>
	</li>
		<li><a href="#Section3" ><span class="icon-coin-dollar"></span>Formas de pago</a></li>

		<li><a href="#Section4"><span class="icon-mobile"></span>Contacto</a></li>

		<li><a href="cerrar.php"><span class=""></span>Cerrar sesión</a></li>
	
      <li><a href="carritodecompras.php"><span class="icon-cart">Carrito</span></a></li>
</ul>


	</header>
     <ul>
</section>


<section class="banner" >
	<div class="banner-content">
	<h4 class="titulo1">Tienda online</h4>
	<h3 class="titulo3">Piezas</h3>
	<h4 class="titulo4">Autopartes</h4>
	</div>
</section>


<section class="intro1" id="Section1"><center><span class="icon-home"></span></center>Bienvenidos 
	
<section class="intro2">
	Ofrecemos  una variedad piezas de chapa y pintura de diferentes marcas dentro de la tienda online de Mohe services s.r.l.
</section>
</section> 

<section class="intro3" id="Section2"><center><span class="icon-indent-increase"></span></center>Categorías

	
<section class="intro4">En esta opción se seleccionan los modelos de autos y las distintas piezas que se ofrecen  	
</section> 	
</section>
  


<section class="intro1" id="Section3"><center><span class="icon-coin-dollar"></span></center>Forma de Pago
 
<section class="intro2">Se elige el tipo de pago que se quiere realizar	
</section>
</section>

  

<section class="intro3" id="Section4"><center><span class="icon-mobile2"></span></center>Contacto

    	<center>
    
    <section class="intro5">Telefono:+549297-4608262-

    E-mail:moheservices@gmail.com-

    <a href="https://api.whatsapp.com/send?phone=+5492974608262&text=Hola!&nbsp;Quería&nbsp;consultarte&nbsp;por&nbsp;el&nbsp;producto&nbsp;solicitado">
 Enviar a whatsapp
   </a> 
   </section>
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

<script src="jquery-3.5.1.min.js"></script>
<script src="menu.js"></script>




</body>
</html>