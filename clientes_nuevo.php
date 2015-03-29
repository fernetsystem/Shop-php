<?php include "php/cab.inc"; ?>
<form action="php/insertCli.php" method="POST" class="formClientLogin">
	<input type="text" name="usua" placeholder="Cree un NICK" /><br/>
	<input type="password" name="pass" placeholder="Ingrese nuevo password" /><br/>
	<input type="text" name="nomb" placeholder="Nombre" /><br/>
	<input type="text" name="pate" placeholder="Apellido Paterno" /><br/>
	<input type="text" name="mate" placeholder="Apellido Materno" /><br/>
	<input type="tel" name="tele" placeholder="Telefono" /><br/>
	<input type="tel" name="celu" placeholder="Celular" /><br/>
	<input type="text" name="corr" placeholder="Correo electronico" /><br/>
	<input type="text" name="pais" placeholder="Pais" /><br/>
	<input type="text" name="esta" placeholder="Estado" /><br/>
	<input type="text" name="ciud" placeholder="Ciudad" /><br/>
	<input type="text" name="colo" placeholder="Colonia" /><br/>
	<input type="text" name="call" placeholder="Calle" /><br/>
	<input type="text" name="mz" placeholder="Manzana" /><br/>
	<input type="text" name="lt" placeholder="Lote" /><br/>
	<input type="text" name="no" placeholder="No." /><br/>
	<input type="text" name="cp" placeholder="CP" /><br/>
	<input type="submit" value="Registrar"/>
</form>
<?php include "php/pie.inc"; ?>