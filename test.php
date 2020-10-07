<?php 

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);

$option1='Me agrada mucho';
$option2='Me agrada poco';
$option3='No me agrada';
/*
if (!$conexion) {
	header('Location: single.php');
	echo "error";
}*/
/*echo $_POST['nombre'].'-'.$_POST['correo'].'-'.$_POST['telefono'].'-'.$_POST['distrito'].'-'.$_POST['genero'];*/
require 'views/test.view.php';
?>
