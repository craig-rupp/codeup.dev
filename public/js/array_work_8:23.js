//Reverse an array of numbers without using a premade reverse function. For example, given the array [1,2,3,4,5] return [5,4,3,2,1]
//Capitalize the first letter of every word in a sentence. For example, given the sentence "please excuse my dear aunt sally" 
//retunre "Please Excuse My Dear Aunt Sally"

//Number 2

		function capitalizeFirstWord(string){
			var stringArray = string.split(', ');
			stringArray.forEach(function(element,index,arr){
				var letter = element.substring(0,1);
				element = element.replace(letter, '');
				arr[index] = letter.toUpperCase() + element;
			});
			var capitalString = arr.join(' ');
			return capitalString;
		}
		console.log(capitalString);



		var string = "please capitalize this for me craig!"


//$number = [1,2,3,4];
// $inverse = [];
// foreach($numbers as $number){
// 	array_unshift($inverse, $number);
// }
// print_r($inverse);


// $numbers = [1,2,3,5,6,7,8,9];
// function findMissingNumber($numbers){
	
// }

// function findMissingNumber($numbers) {
//     $i = 1;
//     while ($i < 10) {
//         foreach ($numbers as $number) {
//             if ($i != $number) {
//                 return $number - 1;
//             }
//             $i++;
//         }
//     }
// }

