// Нам необходимо раскрасить таблицу в таком стиле: http://www.rsdn.ru/article/inet/jQuery.xml
// Предполагается, что у нас есть CSS-файл, в котором определен класс «odd». 
// Все, что нам нужно сделать, – это наделить нечетные строки в таблице эти классом. 
// Для начала – решение на чистом Javascript:
function colorTableRows() {

	var tables = document.getElementsByTagName("table");
	for ( var t = 0; t < tables.length; t++ ) {
	  var rows = tables[t].getElementsByTagName("tr");
	  for ( var i = 1; i < rows.length; i += 2 )
		if ( !/(^|s) odd(s|$)/.test( rows[i].className ) )
		  rows[i].className += " odd";
	}
	
}
// Ну а теперь – jQuery:
// Как видно из этого примера, библиотека jQuery позволяет находить простые и изящные решения для, 
// казалось бы, сложных задач.
function colorTableRowsJQuery() {
	$("tr:nth-child(odd)").addClass("odd");
}

/**
Листинг 1. Определение функции $():
$(html)
$(elems)
$(fn)
$(expr, context)
*/
function appendTo() {
	var my_div = $("<div><p>Ba-bah!!!</p></div>");
	my_div.appendTo("#id_element");
	// or:
	//$("<div><p>Ба-бах!</p></div>").appendTo("#body");
}
/**
 * Найдем все элементы p, находящиеся внутри всех элементов div на странице:
 *
 */
function jq_expr() {
	var findAllParagraphsInAllDivisions = $("div > p");
	alert( "findAllParagraphsInAllDivisions: " + findAllParagraphsInAllDivisions ); // [ object Object ]
	// call from: js/debug_tools.js
	//dump(findAllParagraphsInAllDivisions); non works!
	
	// check how it`s work
	findAllParagraphsInAllDivisions.appendTo("#id_element");// перекрепляет найденные элементы к эл-ту с указанным айди
}

