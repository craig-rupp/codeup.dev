'use strict';

alert("Udemy Linking External JS");

// $('#circle').click(function(){
// 	$(".square").fadeOut();
// });
// $('.square').click(function(){
// 	alert($('.square').css("width"));
// })
// $("div").click(function(){
// 	//$(this).hide();
// 	//$(this).css("display", "none");
// 	$(this).fadeOut();
// })
// $('.square').hover(function(){
// 	alert("You've hovered over a square");
// })
// $('.square').click(function(){
// 	$("iframe").attr("src", "http://www.arsenal.com");
// });

// $('#fadder').click(function(){
// 	$('p').fadeOut(1500, function(){
// 		alert("FadeOut Complete");
// 	});
// });
// $('#fadeIn').click(function(){
// 	$('p').fadeIn(1500);
// })

$('#circle').click(function(){
	$(this).animate({
		width:"300px",
		height:"300px",
		borderRadius:"150px",
		marginLeft:"100px",
		marginTop:"100px"
		}, 800);
})