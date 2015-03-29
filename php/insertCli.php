<?php 
	
	echo '<link rel="stylesheet" type="text/css" href="../css/hoja.css">';
	$conexion = mysql_connect('127.0.0.1','root','w9w9dorotea');
	mysql_select_db("tienda_online",$conexion);
	$q = "insert into clientes values (NULL,'".$_POST['usua']."','".$_POST['pass']."','".$_POST['nomb']."','".$_POST['pate']."','".$_POST['mate']."','".$_POST['tele']."','".$_POST['celu']."','".$_POST['corr']."')";
	mysql_query($q,$conexion) or die("Fallo la operacion");
	echo "Operacion exitosa";
	mysql_close($conexion);

 ?>