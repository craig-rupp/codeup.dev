'use strict';

alert("Udemy Linking External JS");

$('#circle').click(function(){
	alert($("p").html("New text"));
});
// $('.square').click(function(){
// 	alert("Square clicked");
// })
// $("div").click(function(){
// 	alert("You have clicked a div");
// })
// $('.square').hover(function(){
// 	alert("You've hovered over a square");
// })
$('.square').click(function(){
	$("iframe").attr("src", "http://www.arsenal.com");
});