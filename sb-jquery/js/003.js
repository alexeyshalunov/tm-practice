/**
 * 
 * 
	Определение функции $(elems):

	Позволяет «прицепить» всю функциональность jQuery к уже существующим элементам страницы 
	(а именно, к элементам из объектной модели документа, из DOM). 
	Примеры:
	
 */
function changeCSS() {
	
	$(document.body).css( "background-color", "black" );
		
}
function hideElements() {
	
	$( "#myForm .elements" ).hide("slow");
	
}