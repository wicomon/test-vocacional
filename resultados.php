<?php 

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);

/*
if (!$conexion) {
	header('Location: single.php');
	echo "error";
}*/
/*
echo $_POST['p1_1']."<br>";
echo $_POST['p1_2']."<br>";
echo $_POST['p1_3']."<br>";
echo $_POST['p1_4']."<br>";
echo $_POST['p1_5']."<br>";
echo $_POST['p1_6']."<br>";
echo $_POST['p2_1']."<br>";
echo $_POST['p2_2']."<br>";
echo $_POST['p2_3']."<br>";
echo $_POST['p2_4']."<br>";
echo $_POST['p2_5']."<br>";
echo $_POST['p2_6']."<br>";*/

$n_realista="Tienes un interés por trabajar con objetos reales como herramientas máquinas, vehículos, equipos, y seres vivos (animales, peces, vegetales). ";
$n_investigacion="Tienes un interés por trabajar  investigando científicamente los fenómenos físicos, biológicos y/o culturales para comprenderlos.";
$n_artistico="Tienes un interés por trabajar con materiales físicos, verbales y/o humanos para crear productos armoniosos, atractivos y  artísticos.";
$n_social="Tienes un interés por trabajar con personas a las cuales puedas informar, educar, proteger, ayudar o  servir a tu prójimo.";
$n_emprendedor="Tienes un interés por trabajar con personas las cuales pueda organizar y posteriormente obtener un beneficio empresarial, económico u otras ganancias.";
$n_convencional="Tienes un interés por trabajar con datos escritos o numéricos de acuerdo a un orden  contable, jurídico, estadístico o cualquier otro.";

$realista= $_POST['p1_1'] + $_POST['p1_2'] + $_POST['p1_3']+$_POST['p1_4']+$_POST['p1_5']+$_POST['p1_6']+ $_POST['p1_7'] + $_POST['p1_8']
			+$_POST['p1_9']+$_POST['p1_10']+$_POST['p1_11']+$_POST['p1_12']+$_POST['p1_13']+$_POST['p1_14']+$_POST['p1_15'];

$investigador=$_POST['p2_1'] + $_POST['p2_2'] + $_POST['p2_3']+$_POST['p2_4']+$_POST['p2_5']+$_POST['p2_6']+ $_POST['p2_7'] + $_POST['p2_8']
			+$_POST['p2_9']+$_POST['p2_10']+$_POST['p2_11']+$_POST['p2_12']+$_POST['p2_13']+$_POST['p2_14']+$_POST['p2_15'];

$artistico=$_POST['p3_1'] + $_POST['p3_2'] + $_POST['p3_3']+$_POST['p3_4']+$_POST['p3_5']+$_POST['p3_6']+ $_POST['p3_7'] + $_POST['p3_8']
		+$_POST['p3_9']+$_POST['p3_10']+$_POST['p3_11']+$_POST['p3_12']+$_POST['p3_13']+$_POST['p3_14']+$_POST['p3_15'];

$social=$_POST['p4_1'] + $_POST['p4_2'] + $_POST['p4_3']+$_POST['p4_4']+$_POST['p4_5']+$_POST['p4_6']+ $_POST['p4_7'] + $_POST['p4_8']
		+$_POST['p4_9']+$_POST['p4_10']+$_POST['p4_11']+$_POST['p4_12']+$_POST['p4_13']+$_POST['p4_14']+$_POST['p4_15'];

$emrpendedor=$_POST['p5_1'] + $_POST['p5_2'] + $_POST['p5_3']+$_POST['p5_4']+$_POST['p5_5']+$_POST['p5_6']+ $_POST['p5_7'] + $_POST['p5_8']
		+$_POST['p5_9']+$_POST['p5_10']+$_POST['p5_11']+$_POST['p5_12']+$_POST['p5_13']+$_POST['p5_14']+$_POST['p5_15'];

$convencional=$_POST['p6_1'] + $_POST['p6_2'] + $_POST['p6_3']+$_POST['p6_4']+$_POST['p6_5']+$_POST['p6_6']+ $_POST['p6_7'] + $_POST['p6_8']
		+$_POST['p6_9']+$_POST['p6_10']+$_POST['p6_11']+$_POST['p6_12']+$_POST['p6_13']+$_POST['p6_14']+$_POST['p6_15'];


$result = max($realista,$investigador,$artistico,$social,$emrpendedor,$convencional);
if ($result==$realista) {
	$mostrar='1';
}elseif ($result==$investigador) {
	$mostrar='2';
}elseif ($result==$artistico) {
	$mostrar='3';
}elseif ($result==$social) {
	$mostrar='4';
}elseif ($result==$emrpendedor) {
	$mostrar='5';
}elseif ($result==$convencional) {
	$mostrar='6';
}

/*
echo 'Realista : '.$realista."<br>";
echo 'investigador : '.$investigador."<br>";
echo 'artistico : '.$artistico."<br>";
echo 'social : '.$social."<br>";
echo 'emrpendedor : '.$emrpendedor."<br>";
echo 'convencional : '.$convencional."<br>";*/

require 'views/resultados.view.php';
?>