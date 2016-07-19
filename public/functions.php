<?php
function inputHas($key){
	
	if(isset($_REQUEST[$key])) {
		return true;
	} else {
		return false;
	} //or bool?
	//return true of false whether key is available
}
function inputGet($key){
	if(inputHas($key)){
		return $_REQUEST[$key];
	} else {
		return null;
	}
	//return value determined by the key
}
function escape($input){
	return htmlspecialchars(strip_tags($input));
	//return the input?
}


?>