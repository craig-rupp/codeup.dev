'use strict';

var operatorBox = document.getElementById("center-output");
var thirdBox = document.getElementById("right-output");
var firstBox = document.getElementById("left-output");
var equalButton = document.getElementById("equal_button");
var clearButton = document.getElementById("clear_button");
var deleteButton = document.getElementById("back_button");
var squareRootButton = document.getElementById("square_root")
var raiseToButton = document.getElementById("power_raised");

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
		firstBox.value = (parseFloat(firstBox.value)) + (parseFloat(thirdBox.value));
		operatorBox.value = ''
		thirdBox.value = ''
	} else if (operatorBox.value == "-") {
		firstBox.value = (parseFloat(firstBox.value)) - (parseFloat(thirdBox.value));
		operatorBox.value = ''
		thirdBox.value = ''
	} else if (operatorBox.value == '*'){
		firstBox.value = (parseFloat(firstBox.value)) * (parseFloat(thirdBox.value));
		operatorBox.value = ''
		thirdBox.value = ''
	} else if (operatorBox.value == '/'){
		firstBox.value = (parseFloat(firstBox.value)) / (parseFloat(thirdBox.value));
		operatorBox.value = ''
		thirdBox.value = ''
	}
	else if (operatorBox.value == '^'){
		firstBox.value = Math.pow((parseFloat(firstBox.value)), (parseFloat(thirdBox.value)));
		operatorBox.value = ''
		thirdBox.value = ''
	}
}
function remove(){
	if(operatorBox.value == ''){
		firstBox.value = firstBox.value.substring(0, firstBox.value.length - 1);
	}
	else if(operatorBox.value !== ''){
		thirdBox.value = thirdBox.value.substring(0, thirdBox.value.length - 1);
	}
}
function sqRoot(){
	if(operatorBox.value == '')
	firstBox.value = Math.sqrt(firstBox.value);
}	
// function raisedTo(){
// 	if(operatorBox.value == '^')
// 	firstBox.value = Math.pow(firstBox.value, firstBox.value);
// }
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
deleteButton.addEventListener('click', remove);
squareRootButton.addEventListener('click', sqRoot);
// raiseToButton.addEventListener('click', raisedTo);





