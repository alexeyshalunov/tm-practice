/**
 *
 * debug developer funcs
 *
 */

// show list all props of obj
function dump(obj) {
	var out = "";
	if(obj && typeof(obj) == "object"){
		for (var i in obj) {
			out += i + ": " + obj[i] + "\n";
		}
	} else {
		out = obj;
	}
	alert(out);
}
