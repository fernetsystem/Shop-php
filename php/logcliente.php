<?php 
	#include "cab.in
	$contador = 0;
	$conexion = mysql_connect("localhost","root","w9w9dorotea");
	mysql_select_db("tienda_online",$conexion);
	$q = "select * from clientes where usuario='".$_POST['usuario']."' and password = '".$_POST['password']."'";
	$resultado = mysql_query($q,$conexion);
	while ($fila = mysql_fetch_array($resultado)) {
		$contador++;
		$_SESSION['usuario'] = $fila['id'];
	}
	if($contador > 0){
		$q = "insert into pedidos values(NULL,".$_SESSION['usuario'].",'".date('U')."','0')";
		$resultado = mysql_query($q,$conexion);
	
		echo "El usuario existe";
	}else{
		echo "El usuario NO existe";
	}
	mysql_close($conexion);
?>