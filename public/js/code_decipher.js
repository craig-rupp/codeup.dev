'use strict';

console.log("We in this Bitch");

var windowHeight = $(window).height();
var menuBarHeight = $("#titleBar").height();
var containerHeight = windowHeight - menuBarHeight;

$(".codeContainer").height(containerHeight + "px");





console.log(windowHeight);
console.log(menuBarHeight);