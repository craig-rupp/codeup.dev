'use strict';

var discountArray = [0, .15, .25, .35, .5, 1];
discountArray.forEach(function(element,index){
    console.table('The discount at ' + index + ' is ' + element);
});

var discountValue;
var cost = 60;
var luckyNumber = Math.floor(Math.random()*6);
function discountAmount(){
discountValue = cost - (discountArray[1] * cost);
}
discountAmount();
console.log(discountValue);



// var discountAmount;
// var cost = 60;
// var luckyNumber;
// function discountNumber () {
//     luckyNumber = Math.floor(Math.random()* 6);
//     discountAmount = cost - (luckyNumber * [i]);
// }
// discountNumber();
// console.log(luckyNumber);