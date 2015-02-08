$(document).ready(inicio)
function inicio(){
	//cuando se ejecute el boton botoncompra ejecutare la funcion anade
	$(".botoncompra").click(anade)
}
function anade(){
	//dentro del div carrito quiero apendicar un valir
	$("#carrito").append($(this).val());
}