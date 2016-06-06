(function(){
	"use strict";

	// TODO: Create an array of 4 people's names using literal array notation, in a variable called 'names'.

	var names = [ 'Ernesto', 'TJ', 'Alan', 'Robert'];

	for (var i = 0; i < names.length; i++) {
		console.log('The name at index '+ i + ' is: ' + names[i]);
	}

	names.forEach(function(element, index, array){
		console.table('The name at index ' + index + ' is: ' + element);
	});

})();
