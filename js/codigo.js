$(document).ready(inicio)
function inicio(){
	//cuando se ejecute el boton botoncompra ejecutare la funcion anade
	$(".botoncompra").click(anade)
}
function anade(){
	$("#carrito").load("php/poncarrito.php?p="+$(this).val()); //load es un metodo de ajxa que carga un archivo
}