'use strict';

alert("Udemy Linking External JS");

$('h1').click(function(){
			$(this).css('background-color', 'green');
		});
		$('p').dblclick(function(){
			$('p').css('font-size', '18px');
		});
		$('li').hover(function(){
					$(this).css('color', 'red');
				},
				function(){
					$(this).css('color', 'black');
				}
			);