"use strict";

console.log('Hello');

console.log(10/3);

var myNameIs = 'Craig';

function sayHello(name){
	console.log("Hello " + name);
}
sayHello(myNameIs);
console.log(sayHello);


function sleepHours(hours){
	if(hours >= 8) {
		return "Getting plenty of sleep";
	} else{
		console.log("Get more sleep");
	}
}

sleepHours(7);

var x = myFunction(4, 3);        

function myFunction(a, b) {
    return a * b;               
}
console.log(x);

for (var counter = 1; counter < 11; counter++) {
	console.log(counter);
}

var names = [ 'Ernesto', 'TJ', 'Alan', 'Robert'];

	// for (var i = 0; i < names.length; i++) {
	// 	console.log('The name at index '+ i + ' is: ' + names[i]);
	// }

	names.forEach(function(element, index, array){
		console.table('The name at index ' + index + ' is: ' + element);
	});
 
for (var i = 10; i < 0; i--) {
	console.log(i);
}

for(var count = 10; i <=0; i--){
	console.log(count);
}



window.location('http://www.google.com');

 