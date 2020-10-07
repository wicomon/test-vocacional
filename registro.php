<?php 

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
/*
if (!$conexion) {
	header('Location: single.php');
	echo "error";
}
*/
/*$posts = obtener_post($blog_config['post_por_pagina'],$conexion);

if (!$posts) {
	header('Location: error.php');
	echo "error";
}*/


require 'views/registro.view.php';
?>