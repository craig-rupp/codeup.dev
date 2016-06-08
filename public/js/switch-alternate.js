'use strict';

var discountArray = [0, .15, .25, .35, .5, 1];
// discountArray.forEach(function(element,index){
//     console.table('The discount at ' + index + ' is ' + element);
// });

var i;
var discountValue;
var cost = 60;
// var luckyNumber = Math.floor(Math.random()*6);
function discountAmount(retailPrice){
    var discount = discountArray[Math.floor(Math.random()*discountArray.length)]
    //console.log(discount);
    return retailPrice - (discount * retailPrice);

    // for (i - cost; i <= discountArray.length; i++){

    // }
}
console.log(discountAmount(100));
// console.log(discountValue);



// var discountAmount;
// var cost = 60;
// var luckyNumber;
// function discountNumber () {
//     luckyNumber = Math.floor(Math.random()* 6);
//     discountAmount = cost - (luckyNumber * [i]);
// }
// discountNumber();
// console.log(luckyNumber);