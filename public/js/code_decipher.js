'use strict';

console.log("We in this Bitch");

var windowHeight = $(window).height();
var menuBarHeight = $("#titleBar").height();
var containerHeight = windowHeight - menuBarHeight;

$(".codeContainer").height(containerHeight + "px");

$(".toggle").click(function(){
	$(this).toggleClass("selected");
	var activeDiv = $(this).html();
	//alert(activeDiv);
	$("#" + activeDiv + "Container").toggle();

	var showingDivs = $(".codeContainer").filter(function(){
		return($(this).css("display") != "none"); //maybe discuss a bit tomorrow
	}).length;
	//alert(showingDivs);

	var width = 100/showingDivs;

	$(".codeContainer").width(width + "%");
});



console.log(windowHeight);
console.log(menuBarHeight);