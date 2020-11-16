<?php 
session_start();

if(!isset($_GET['id']) OR !is_numeric($_GET['id']));
header('Location:carritodecompras.php');



if(isset($_SESSION['proyecto tienda online'])){
	unset($_SESSION['proyecto tienda online']);
	header('Location:carritodecompras.php');

}else{
	header('Location:carritodecompras.php');
}


 ?>

