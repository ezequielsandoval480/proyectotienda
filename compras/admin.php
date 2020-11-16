<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="modal.css">
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
			
		<ul class="nav">
		<li><a href=""><span class=""></span>Categorías</a>
		<ul class="sub-nav">
			<li><a href=""><span class=""></span>Marcas</a></li>
			<li><a href=""><span class=""></span>Tipos</a></li>
		</ul>
	</li>
		<li><a href=""><span class="icon-coin-dollar"></span>Formas de pago</a></li>

		<li><a href=""><span class=""></span>Contacto</a></li>
		</ul>

  <ul class="carrito">
      <li><a href="carritodecompras.php"><span class="icon-cart">Carrito</span></a></li>
      
</ul>


	</header>
     <ul>
</div>


<section class="banner">
	<div class="banner-content">
	</div>
</section>

 <section class="sesion">




</section>
</body>
</html>