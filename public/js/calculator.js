'use strict';

var operatorBox = document.getElementById("center-output");
var thirdBox = document.getElementById("right-output");
var firstBox = document.getElementById("left-output");
var equalButton = document.getElementById("equal_button");
var clearButton = document.getElementById("clear_button");

function storefirstItem(){
 if (operatorBox.value == '') {
	firstBox.value += this.innerHTML;
	// console.log(firstBox, this);
} else{
	thirdBox.value += this.innerHTML;
	}
}

function declareOperation(){
	operatorBox.value = this.innerHTML;
}

function clear(){
	firstBox.value = "";
	operatorBox.value = "";
	thirdBox.value = "";
}
function doMath(){
	if(operatorBox.value == "+"){
		firstBox.value = (parseInt(firstBox.value)) + (parseInt(thirdBox.value));
		operatorBox.value = ''
		thirdBox.value = ''
	} else if (operatorBox.value == "-") {
		firstBox.value = (parseInt(firstBox.value)) - (parseInt(thirdBox.value));
		operatorBox.value = ''
		thirdBox.value = ''
	} else if (operatorBox.value == '*'){
		firstBox.value = (parseInt(firstBox.value)) * (parseInt(thirdBox.value));
		operatorBox.value = ''
		thirdBox.value = ''
	} else if (operatorBox.value == '/'){
		firstBox.value = (parseInt(firstBox.value)) / (parseInt(thirdBox.value));
		operatorBox.value = ''
		thirdBox.value = ''
	}
}

var numbers = document.getElementsByClassName("number")
for(var i = 0; i < numbers.length; i++) {
	numbers[i].addEventListener('click', storefirstItem);
}

var operators = document.getElementsByClassName("operator")
console.log(operators);
for(var i = 0; i < operators.length; i++){
	operators[i].addEventListener('click', declareOperation);
}

clearButton.addEventListener('click', clear);
equalButton.addEventListener('click', doMath);



