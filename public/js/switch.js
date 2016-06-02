'use strict';

var luckyNumber = Math.floor(Math.random()* 6)
var cost = 60;
var discount;

switch (luckyNumber) {
	case 0:
		discount = 0;
		break;
	case 1:
		discount = .15;
		break;
	case 2:
		discount = .25;
		break;
	case 3:
		discount = .35;
		break;
	case 4:
		discount = .5;
		break;
	case 5:
		discount = 1;
		break;
}

var discountCost = cost - (cost * discount);
console.log('You received a ' + luckyNumber + ' and now have to pay ' + discountCost);


var numberOfMonth = Math.floor(Math.random()* 12) + 1

var month;

switch (numberOfMonth) {
	case 1:
		month = 'January';
		break;
	case 2:
		month = 'February';
        break;
    case 3:
    	month = 'March';
        break;
    case 4:
    	month = 'April';
        break; 
    case 5:
    	month = 'May';
        break;
    case 6:
    	month = 'June';
        break;
    case 7:
    	month = 'July';
        break;
    case 8:
    	month = 'August';
        break;
    case 9:
    	month = 'September';
        break;
    case 10:
    	month = 'October';
        break;
    case 11:
    	month = 'November';
        break;
    case 12:
    	month = 'December';
        break;
}	
console.log(month);