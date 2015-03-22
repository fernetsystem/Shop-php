<?php 
	session_start(); //abrir secion
	if(!isset($_SESSION['contador'])){ //si la variable de secion no existe el contador vale cero
		$_SESSION['contador'] = 0;
	}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>ELA</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/hoja.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/codigo.js"></script>
	</head>

	<body>
		<header>
			<a href="index1_1.php"><h1>Tienda online</h1></a>
			<h2>Subtitulo de la tienda</h2>
		</header>
			<div id="carrito">
				Carrito
			</div><br/>
			<a href="php/destruir.php"><button>Vaciar carrito</button></a>
			<a href="confirmar.php"><button>Confirmar compra</button></a>