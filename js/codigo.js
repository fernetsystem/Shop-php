$(document).ready(inicio)
function inicio(){
	//cuando se ejecute el boton botoncompra ejecutare la funcion anade
	$(".botoncompra").click(anade)
	$("#carrito").load("php/poncarrito.php"); //ejecutar cuando carge la pagina el carrito y sin parametros
}
function anade(){
	$("#carrito").load("php/poncarrito.php?p="+$(this).val()); //load es un metodo de ajxa que carga un archivo
}