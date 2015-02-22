<?php 
	#include "cab.in
	$contador = 0;
	#$usua=$_POST['usuario'];
	#$pass=$_POST['password'];
	$conexion = mysql_connect("localhost","root","w9w9dorotea");
	mysql_select_db("tienda_online",$conexion);
	$q = "select * from clientes where usuario='".$_POST['usuario']."' and password = '".$_POST['password']."'";
	$resultado = mysql_query($q,$conexion);
	while ($fila = mysql_fetch_array($resultado)) {
		$contador++;
	}
	if($contador > 0){
		echo "El usuario existe";
	}else{
		echo "El usuario NO existe";
	}
	mysql_close($conexion);
?>