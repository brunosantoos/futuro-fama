// JavaScript Document

$(document).ready(function() {
	
$(window).load(function(){
	var slider01 = new attekitaJSSlider({nodes:'.slider-first img', nodesPerPage: 1, auto:true});  
	slider01.init();
	
	var slider02 = new attekitaJSSlider({nodes:'.slider-second img', nodesPerPage: 1, auto:true,time: 8000});  
	slider02.init();
});


	
});