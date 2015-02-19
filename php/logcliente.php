<?php 
	include "cab.inc";
	$contador = 0;
	$conexion = mysql_connect("127.0.0.1","root","w9w9dorotea");
	mysql_select_db("tienda_online");
	$query = "select * from clientes where usuario='".$_POST['usuario']."' and contrasena = '".$_POST['password']."'";
	$resultado = mysql_query($conexion,$query);
	while($fila=mysql_fetch_array($resultado)){
		$contador++;
		$_SESSION['usuario'] = $fila['id'];
	}
	if($contador > 0){
		$query = "insert into pedidos values (NULL,".$_SESSION['usuario'].",'".date('U')."','0')";
		$resultado = mysql_query($conexion,$query);
		$query = "select * from pedidos where idcliente='".$_SESSION['usuario']."' order by fecha desc limit 1";
		$resultado = mysql_query($conexion,$query);
		while ($fila=mysql_fetch_array($resultado)) {
			$_SESSION['idpedido'] = $fila['id'];
		}
		echo $_SESSION['idpedido'];
		for ($i=0; $i < $_SESSION['contador'] ; $i++) { 
			#$query = "insert into ventas values(null,'"$_SESSION['idpedido']."','".$_SESSION['producto'][$i]."','1')";
			$query = "insert into ventas values(null,"$_SESSION['idpedido'].",".$_SESSION['idproducto'][$i].",1)";
			$resultado = mysql_query($conexion,$query);
		}
		include "pie.inc";
		echo "<p> Tu pedido se ha realiazado exitozamente</p>";
		echo "<meta http-equiv='refresh' content=*5; url=../index.php >";
	}else{
		echo "El usuario no existe";
	}
	mysql_close($conexion);
	#ALTER TABLE clientes MODIFY id int auto_increment
 ?>