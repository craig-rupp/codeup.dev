use strict;
var uniqueInOrder=function(iterable){
  //your code here - remember iterable can be a string or an array
 var order = iterable.split('');
 var deleteThis = [];

order.forEach(function(letter,index,array){
   var againstNextLetter = array[index +1];
   if(letter == againstNextLetter){
     deleteThis.push(index);
//      order.splice(order.indexOf(letterToCheck),1)
   }
 });
deleteThis.forEach(function(e, i){
  order.splice(i, 1);
  console.log()
});
console.log(deleteThis);
return order;
}

if(Array.isArray(numberArray)){
	   iterable.forEach(function(number,index){
	    var nextNumber = array[index + 1];
	    if(number === nextNumber{
	    deleteThis.push(index);
	    }
	}
	elseif(!Array.isArray(order)){
		order.forEach(function(letter,index,array){
	   	var againstNextLetter = array[index +1];
	   	if(letter === againstNextLetter){
	     deleteThis.push(index);
	   	}
	}
}
if(Array.isArray(numberArray)){
 });

 });
deleteThis.forEach(function(e, i){
  order.splice(i, 1);
  console.log()
});
console.log(deleteThis);
return order;
}



function roundIt(n){
  var compare = String(n).split('.');
  if ( compare[0].length == compare[1].length )
     return Math.round(n);
  return compare[0].length > compare[1].length ?
         Math.floor(n) :
         Math.ceil(n);
}