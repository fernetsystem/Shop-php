<?php 
	include "cab.inc";
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
		#dar de alta nuevo pedido
		$q = "insert into pedidos values(NULL,".$_SESSION['usuario'].",'".date('U')."','0')";
		$resultado = mysql_query($q,$conexion);
		#del cliente logeado ver el ultimo pedido echo recientemente	
		$q = "select * from pedidos where idcliente = '".$_SESSION['usuario']."' order by fecha desc limit 1";
		$resultado = mysql_query($q,$conexion);
		#obtener el id del pedido
		while ($fila = mysql_fetch_array($resultado)) {
			$_SESSION['idpedido'] = $fila['id'];
		}
		#echo $_SESSION['idpedido']."<br/>";
		for ($i=0; $i < $_SESSION['contador'] ; $i++) {
			#insertar en ventas gracias al idpedido obtenido y reutilizar el id producto del carrito de compras 
			$q="insert into ventas values(NULL,".$_SESSION['idpedido'].",".$_SESSION['producto'][$i].",1)";
			$resultado =  mysql_query($q,$conexion);
		}
		echo "<br/>Tú compra se ha realizado exitosamente <br/> Redireccionando en 5 segundos... ";
		session_destroy();# Vaciar el carrito
		echo '<meta http-equiv="refresh" content="5; url=../index.php"';
	}else{
		echo "El usuario NO existe volviendo a la pagina en 5 segundos...";
		echo '<meta http-equiv="refresh" content="5; url=../confirmar.php"';
	}
	mysql_close($conexion);
	include "pie.inc";
?>