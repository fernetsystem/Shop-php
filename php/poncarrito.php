<?php 
	session_start();
	if(isset($_GET['p'])){ //si existe la variable enviada
		$_SESSION['producto'][$_SESSION['contador']] = $_GET['p']; //variable de secion de segunda dimension = a el id de la prednda
		$_SESSION['contador']++; //aumenta de uno en uno el contador
	}
	$conexion = mysql_connect("127.0.0.1","root","w9w9dorotea");
	mysql_select_db("tienda_online",$conexion);
	for ($i=0; $i<$_SESSION['contador'] ; $i++) { 
		//echo "Producto: ".$_SESSION['producto'][$i]."<br/>"; 
		$query = "select * from prendas where id=".$_SESSION['producto'][$i];
		$resultado = mysql_query($query,$conexion);
		while ($fila=mysql_fetch_array($resultado)) {
			echo $fila['nombre']." - ".$fila['precio']." <br/>";
		}
	}		
	mysql_close($conexion);
 ?>