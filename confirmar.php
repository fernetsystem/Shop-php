<?php include "php/cab.inc"; ?>
<p>Ya eres usuario?</p>
<form action="php/logcliente.php" method="POST">
<input type="text" name="usuario" placeholder="Ingresa tu usuario"/>
<input type="password" name="password" placeholder="Ingresa tu contraseña"/>
<input type="submit" />
</form>
<p>Eres nuevo usuario?</p>
<?php include "php/pie.inc"; ?>