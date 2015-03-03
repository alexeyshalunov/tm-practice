/**
 *  Найдем все элементы p, находящиеся внутри всех элементов div на странице:
	Определение функции $(expr, context)
 *
 */
function jq_expr() {
	var findElems = $("div > p");
	alert( "findElems: " + findElems ); // [ object Object ]
	
	// call from: js/debug_tools.js
	//dump(findElems); // result: non works!
	
	// check how it`s work
	// ПЕРЕкрепляет найденные элементы к эл-ту с указанным айди
	findElems.appendTo("#id_element");
}

