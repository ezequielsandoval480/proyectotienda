<?php 
include("estructura/cabecera.php");
//se establece la cabecera del menu principal 
 ?>
 <title>Categorias</title>

<section class="redes" align="right">

	<li>
	<a href=""><span class="icon-facebook2"></span></a>
	<a href=""><span class="icon-instagram"></span></a>
	<a href=""><span class="icon-whatsapp"></span></a>
</li>
	
</section>

 <section class="sesion">
<?php 
//se realiza la conexión con el localhost
include"conexion.php";
$re=$cn->query("select * from comprass where id=".$_GET['id']) or die ("error");
 while ($f=$re->fetch_array())
 {
 ?>

    <div class="producto">
	<center>
		<img src="./productos/<?php echo $f ['imagen'];?>"><br>	
		<span><h3><?php  echo $f['Nombre'];?></h3></span><br>
		<span><h3>Precio:<?php  echo $f['precio'];?></h3></span><br>
		<a href="" class="agregarProducto" data-id="<?php echo $f['id'];?>">Añadir al carrito de compra</a>
	</center>	
	</div>
	</section>
    <?php
// agregarProducto: la clase es de  javascript y se encuentra ubicado en scripts.js
  }
    
   ?>

</section>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="scripts.js"></script>
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