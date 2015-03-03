/**
 Нам необходимо раскрасить таблицу в таком стиле: http://www.rsdn.ru/article/inet/jQuery.xml
 Предполагается, что у нас есть CSS-файл, в котором определен класс «odd». 
 Все, что нам нужно сделать, – это наделить нечетные строки в таблице эти классом. 
 Для начала – решение на чистом Javascript:
*/
function colorTableRows() {

	var tables = document.getElementsByTagName("table");
	for ( var t = 0; t < tables.length; t++ ) {
	  var rows = tables[t].getElementsByTagName("tr");
	  for ( var i = 1; i < rows.length; i += 2 )
		if ( !/(^|s) odd(s|$)/.test( rows[i].className ) )
		  rows[i].className += " odd";
	}
	
}
/**
 * Ну а теперь – jQuery:
 * Как видно из этого примера, библиотека jQuery позволяет находить простые и изящные решения для, 
 * казалось бы, сложных задач.
 */
function colorTableRowsJQuery() {
	$("tr:nth-child(odd)").addClass("odd");
}