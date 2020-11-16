<?php 
session_start();
include("conexion.php");

	//Chequeo si existen productos en mi session agregados


// if (isset($_SESSION['proyecto tienda online'])){
// 	$sesion = true;
// } else {
// 	$sesion = false;
// }

// Lo de arriba se puede poner asi
$sesion = (isset($_SESSION['proyecto tienda online'])) ? true : false;

if($sesion){
	$productoscart = $_SESSION['proyecto tienda online'];
}


	// $arreglo = $_SESSION ['proyecto tienda online'];
	// $encontro=false;
	// $numero=0;

	// 	for ($i=0;$i<count($arreglo);$i++){
	// 		if($arreglo[$i]['Id']==$_GET['id']){
	// 			$encontro=true;
	// 		    $numero=$i;
	// 		}
	// 	}

	//  	if($encontro==true){
	// 	    $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
	// 	    $_SESSION ['proyecto tienda online']=$arreglo;

	//  	} else{
 //            $nombre="";
	// 	    $precio=0;
	// 	    $imagen="";
 //            $re=$cn->query("select * from comprass where id=" .$_GET ['id']);
	// 	     while ($f=$re->fetch_array()) {
	// 	    	$nombre=$f['Nombre'];
	// 	    	$precio=$f['precio'];
	// 	    	$imagen=$f['imagen'];
	// 	     }
	// 	    $datosNuevos=array('Id'=>$_GET['id'],
	// 	                'Nombre'=>$nombre,
	// 	                'precio'=>$precio,
	// 	                'imagen'=>$imagen,
	// 	                'Cantidad'=>1);
		    
	// 	    array_push($arreglo,$datosNuevos);
	// 	    $_SESSION['proyecto tienda online']=$arreglo;

	//  	}

	// } else{
	// 		if(isset($_GET['id'])){
	// 	    $nombre="";
	// 	    $precio=0;
	// 	    $imagen="";
 //            $re=$cn->query("select * from comprass where id=" .$_GET ['id']);
	// 	     while ($f=$re->fetch_array()) {
	// 	    	$nombre=$f['Nombre'];
	// 	    	$precio=$f['precio'];
	// 	    	$imagen=$f['imagen'];
	// 	    	    }
	// 	    $arreglo[]=array('Id'=>$_GET['id'],
	// 	                'Nombre'=>$nombre,
	// 	                'precio'=>$precio,
	// 	                'imagen'=>$imagen,
	// 	                'Cantidad'=>1);
 //            $_SESSION['proyecto tienda online']=$arreglo;

	// 	}
	// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Carrito de compras</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="modal.css">
	<link rel="stylesheet" href="venta.css">
	<link rel="stylesheet" href="menu.css">
	<link rel="stylesheet" href="style.css">
	<meta http-equiv="Content-type" content="text/html">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
   
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
			<form id="formulario" method="post" action="verificar.php">
				<?php 
  				if(isset($_GET['error'])){
  					echo '<center>Datos no validos</center>';
  				}


				 ?>
			 <table>
				<tr>
				 <td>Nombre:</td>
				 <td><input type="text" placeholder="&#128273;usuario" name="Usuario"></td>
				</tr>

				<tr>
				<td>Contraseña:</td>
				<td><input type="password" placeholder="&#128273;password" name="Password"></td>
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
			<div class="button-menu">
			<a href="#" class="bt-menu"><span class="icon-menu"></span></a>
			
		</div>
		<li><a href="inicio.php"><span class="icon-home">Inicio</span></a></li>
		<li><a href=""><span class="icon-indent-increase"></span>Categorías</a>
		<ul class="sub-nav">
			<li><a href=""><span class=""></span>Marcas</a>
	    <ul class="sub-sub-nav">
			 <li><a href="marcaford.php"><span class=""></span>Ford</a>
			 <li><a href="marcapeugeot.php"><span class=""></span>Peugeot</a>
			 <li><a href="marcambenz.php"><span class=""></span>Mercedes Benz</a>
			 <li><a href="marcatoyota.php"><span class=""></span>Toyota</a>
			 <li><a href="marcafiat.php"><span class=""></span>Fiat</a>
 			 <li><a href="marcahyundai.php"><span class=""></span>Hyundai</a>
 			 <li><a href="marcarenault.php"><span class=""></span>Renault</a>
 			 <li><a href="marcacitroen.php"><span class=""></span>Citroen</a>
 			 <li><a href="marcavolkswagen.php"><span class=""></span>Volskwagen</a>
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

<section class="redes" align="right">
	<span class="icon-facebook2"></span>
	<span class="icon-instagram"></span>
	<span class="icon-whatsapp"></span>
</section>

 <section class="sesion">
 <div class="carrito">

   <h3> Precio total $ <span class='precioTotal'>0</span></h3>

    </div>
<?php

//Itero sobre los productos guardados si existen en mi sesion

if($sesion && count($productos) > 0){
	print_r('Hay productos guardados');
}

//   $total=0; 
//     if(isset($_SESSION['proyecto tienda online'])){
// 	$datos=$_SESSION ['proyecto tienda online'];
// 	$total=0;

// 	print_r($datos);
// 	for($i=0;$i<count($datos);$i++){
// ?>
    


// 	<ul class="product">
		
// 		<br><img src="./productos/<?php echo $datos[$i]['imagen'];?>"><br><br>
		
// 		<span><h3><?php echo $datos[$i]['Nombre'];?></h3></span><br>

// 		<span></span>
 		
//        <span class="price"><h3>Precio $:<?php echo $datos[$i]['precio'];?></h3></span>
		
// 		<input data-price="<?php echo $datos[$i]['precio'];?>" class="qty" type="number" value="0">

// 		<h3>Subtotal:</h3>
		
// 		<h3><span class="subtotal"><?php echo $datos[$i]['precio']*$datos[$i]['Cantidad']?></span></h3>


		
// 		<a href="" class="eliminar" data-id="<?php echo $datos[$i]['Id']?>">
// 			Eliminar
// 		</a>
		  
//       </ul>


// 	 </script>



// <?php

// $total=($datos[$i]['Cantidad']*$datos[$i]['precio'])+$total; 

// }
// 	} else{
// 	echo '<center><h2>El carrito de compra está vacío</h2><center>';
// 	}
// 	echo '<center><h2></h2></center>';
//    if($total!=0){
//    echo '<center><button><a href="compras.php" class="btn btn-primary btn sm" >Enviar</button></a></center>';
// }



?>
</section>
<center><a href="./index.php">Ver catálogo</a></center>
<center><a href="cerrar_session.php">Cerrar sesion</a></center>



	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="menu.js"></script>
	<script type="text/javascript" src="scripts.js"></script>

	 <script type="text/javascript">
	 	function openVentana(){
$(".ventana").slideDown("slow");
}

 	function closeVentana(){
$(".ventana").slideUp("fast");
}


	 </script>


</body>
</html>