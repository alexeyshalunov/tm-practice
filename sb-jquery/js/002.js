/**
 Определение функции $(html):

*/
function appendTo() {
	var my_div = $("<div><p>Ba-bah!!!</p></div>");
	my_div.appendTo("#id_element");
	// or:
	//$("<div><p>Ба-бах!</p></div>").appendTo("#body");
}