<?php 
session_start();
unset($_SESSION['Usuario']);
header("Location:inicio.php");

 ?>