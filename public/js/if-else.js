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

var requiredForDiscount = 200;
var discount = .35;

var cameronCostWithDiscount;
if (cameronPaid > requiredForDiscount) {
	cameronCostWithDiscount = cameronPaid - (cameronPaid * discount);
} else {
	cameronCostWithDiscount = cameronPaid;
}
console.log('Cameron: '+ cameronPaid + ', ' + cameronCostWithDiscount);

var ryanCostWithDiscount;
if (ryanPaid > requiredForDiscount){
	ryanCostWithDiscount = ryanPaid - (ryanPaid * discount);
}	else {
	ryanCostWithDiscount = ryanPaid;
}
console.log('Ryan: ' + ryanPaid + ', ' + ryanCostWithDiscount);

var georgeCostWithDiscount;
if (georgePaid > requiredForDiscount) {
	georgeCostWithDiscount = georgePaid - (georgePaid * discount);
}	else {
	georgeCostWithDiscount = georgePaid;
}
console.log('George: ' + georgePaid + ', ' + georgeCostWithDiscount);



var flipACoin = Math.floor(Math.random() * 2)

console.log((flipACoin) ? "Buy A Car" : 'Buy A House');
