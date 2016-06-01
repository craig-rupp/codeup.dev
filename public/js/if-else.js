'use strict';

var gradeA = 70;
var gradeB = 80;
var gradeC = 95;

var gradeAwesome = (gradeA + gradeB + gradeC) / 3;
	
	if (gradeAwesome < 80) {
		console.log("You need to practice more");
	} else {
		console.log("You're Awesome");
	}
var cameronPaid = 180;
var ryanPaid = 250;
var georgePaid = 320;

if (cameronPaid > 200) {
	console.log('The discount was reached' + 'he saved ' + cameronPaid * .35);
} else {
	 console.log("Cameron did not reach the discount, he spent" + cameronPaid + " he was 21 dollars short");
}

if (ryanPaid > 200) {
	console.log('The discount was reached for Ryan' + ' he saved ' + ryanPaid * .35);
}	else {
	 console.log("Ryan did not reach the discount, he spent" + ryanPaid + " he was 21 dollars short");
}

if (georgePaid > 200) {
	console.log('The discount was reached for George' + ' he saved ' + georgePaid * .35);
}	else {
	 console.log("Ryan did not reach the discount, he spent" + georgePaid + " he was 21 dollars short");
}


var flipACoin = Math.floor(Math.random() * 2)

if (flipACoin = 1) {
	console.log('Buy a house');
}	else {
	console.log('Buy a Car');
}

