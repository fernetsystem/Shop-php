<?php include "php/cab.inc"; ?>
<form action="php/insertCli.php" method="POST" class="formClientReg">
	<section class="columna1">
		<p>Usuario</p>
		<input type="text" name="usua" placeholder="Cree un nombre de usuario" >
		<p>Password</p>
		<input type="password" name="pass" placeholder="Ingrese nuevo password" >
		<p>Nombre</p>
		<input type="text" name="nomb" placeholder="Ingrese sus nombres" />
		<p>Apellido Paterno</p>
		<input type="text" name="pate" placeholder="Ingrese su Apellido Paterno" />
		<p>Apellido Materno</p>
		<input type="text" name="mate" placeholder="Ingrese su Apellido Materno" />
		<p>Telefono</p>
		<input type="tel" name="tele" placeholder="Ejemplo:58-74-99-55" />
		<p>Celular</p>
		<input type="tel" name="celu" placeholder="Ejemplo:55-58-96-90-39" />
		<p>Correo electronico</p>
		<input type="text" name="corr" placeholder="Ingrese su Correo electronico" />
		<br/><br/>
	</section>
	<section class="columna2">
		<p>Pais</p>
		<input type="text" name="pais" placeholder="Ingrese su pais" />
		<p>Estado</p>
		<input type="text" name="esta" placeholder="Estado" />
		<p>Ciudad</p>
		<input type="text" name="ciud" placeholder="Ciudad" />
		<p>Colonia</p>
		<input type="text" name="colo" placeholder="Colonia" />
		<p>Calle</p>
		<input type="text" name="call" placeholder="Calle" />
		<p>Manzana</p>
		<input type="text" name="mz" placeholder="Manzana" />
		<p>Lote</p>
		<input type="text" name="lt" placeholder="Lote"  />
		<p>No.</p>
		<input type="text" name="no" placeholder="No." />
		<p>Codigo Postal</p>
		<input type="text" name="cp" placeholder="CP" />
	</section>
	<br/><br/>
	<input type="submit" value="Registrar" class="botonRegistrar" />
</form>
<?php include "php/pie.inc"; ?>