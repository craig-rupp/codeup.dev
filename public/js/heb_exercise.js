'use strict';

// console.log('heb question');
// var cameronCost = 180;
// var ryanCost = 250;
// var georgeCost = 320;

// var discountCostRequirement = 200;
// var discount = 0.35;

// var cameronCostWithDiscount;
// if (cameronCost > discountCostRequirement) {
//     cameronCostWithDiscount = cameronCost - (cameronCost * discount);
// } else {
//     cameronCostWithDiscount = cameronCost;
// }
// console.log('Cameron: ' + cameronCost + ', ' + cameronCostWithDiscount);

// var ryanCostWithDiscount;
// if (ryanCost > discountCostRequirement) {
//     ryanCostWithDiscount = ryanCost - (ryanCost * discount);
// } else {
//     ryanCostWithDiscount = ryanCost;
// }
// console.log('Ryan: ' + ryanCost + ', ' + ryanCostWithDiscount);

// var georgeCostWithDiscount;
// if (georgeCost > discountCostRequirement) {
//     georgeCostWithDiscount = georgeCost - (georgeCost * discount);
// } else {
//     georgeCostWithDiscount = georgeCost;
// }
// console.log('Ryan: ' + georgeCost + ', ' + georgeCostWithDiscount);

var customerCost = 0;
var individualCustomer = [];
var discountCostRequirement = 200;
var discount = 0.65;
var moreProducts;
var costOfProduct;
var shortOfDiscount;

do {  
var customer = {
	name: null,
	products: []
}

customer.name = prompt('What is your name?');
individualCustomer.push(customer);

function productPricesEntered (){
	costOfProduct = prompt('What was the cost of your item?');
	customer.products.push(Number(costOfProduct));
	
} 
do {
	productPricesEntered();
	moreProducts = confirm('Would you like to add any other items?');
} while (moreProducts == true);

function confirmDiscount (){
	var totalCost = 0;
	customer.products.forEach(function (element) {
		totalCost = totalCost + element;
	});
	if (totalCost > discountCostRequirement){
		totalCost = totalCost * discount;
		alert(customer.name + ', your total price to pay is ' +  totalCost + '. Congrats on the discount!');	
	} else {
		alert(customer.name + ', your total price to pay is ' + totalCost + '. Sorry brah.');
	}
};

confirmDiscount();
var moreCustomers = confirm('Is there another customer?')
} while (moreCustomers)





