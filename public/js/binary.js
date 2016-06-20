use strict;

function convertToDecimal(binary){
	var decimal = 0;

	binary = binary.split('').reverse();
	for (var i = 0; i < binary.length; i++){
		decimal += binary[i] * Math.pow(2,i)
	}
}