"use strict";

(function(){
	function sayHello(name){
		console.log('Hello from ' + name);
		sayHello(myNameIs);
	}




// TODO: Call the function 'isOdd' passing the variable 'random' as a parameter.



	var random = Math.floor((Math.random()*100)+1);
	function isOdd(number){
		random % 2 ==0 ? console.log(number + ' Your number was even ') :
		console.log(number + 'Your number was odd ');
	}
	isOdd(random);		
})();