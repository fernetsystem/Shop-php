<?php include "php/cab.inc" ?>
<?php $conexion = mysql_connect('127.0.0.1','root','w9w9dorotea');
	  mysql_select_db("tienda_online",$conexion);
	  $query = "select * from prendas";
	  $resultado = mysql_query($query,$conexion);
	  while($fila = mysql_fetch_array($resultado)){
	  	echo "<article>";
	  	echo "<h3>".$fila['nombre']."</h3>";
	  	echo "<p>".$fila['descripcion']."</p>";
	  	echo "<p> Precio: ".$fila['precio']." $</p>";
	  	$query2 = "select * from img where idprenda=".$fila['id']." limit 1";
	  	$resultado2 = mysql_query($query2,$conexion);
	  	while($fila2 = mysql_fetch_array($resultado2)){
	  		echo "<img src='photo/".$fila2['imagen']."' width=100px>";
	  	}
	  	echo "</article>";
	  }
	  mysql_close($conexion);
 ?>
<?php include "php/pie.inc" ?>
		