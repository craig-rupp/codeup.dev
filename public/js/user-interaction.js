"use strict";

// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.

do {
	var response = prompt('What is your name');
} while (response == '' || response == null);

// TODO: Show an alert message that welcomes the user based on their input.
alert('Welcome to the Thunder Dome ' + response + '!');



// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.


var confirmed = confirm(response + ', do you like pizza?');
	if (confirmed){
		alert('Lets' + ' go get some!');
	} else {
		alert('Are you from this planet ' + response + 
		'?');
	}
