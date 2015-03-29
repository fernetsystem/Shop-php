<?php include "php/cab.inc"; ?>
<form action="php/logcliente.php" method="POST" class="formClientLogin">
<p>Usuario</p>
<input type="text" name="usuario" placeholder="Ingresa tu usuario"/>
<p>Password</p>
<input type="password" name="password" placeholder="Ingresa tu contraseña"/>
<br/><br/><br/>
<!--<input type="tel" name="t" placeholder="Telefono"/><br/>
<input type="number" min="10" max="100"/><br/>
<input type="range" step="10" min="1" max="100"/> <br/>
<input type="date" min="2012-02-02" max="2015-02-24"/><br/>
<input tyoe="time"/>-->
<input type="submit" value="Iniciar sesión" />
<br/>
<br/>
<p>No dispones de una cuenta de cliente ELITY? <a href="clientes_nuevo.php"> Registrate </a></p>
</form>
<br/>
<br/>
<br/>
<?php include "php/pie.inc"; ?>