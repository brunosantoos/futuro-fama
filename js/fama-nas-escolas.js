// JavaScript Document

$(document).ready(function() {
	
$(window).load(function(){
	var slider = new attekitaJSSlider({nodes:'.slider .col-md-6',useNavigation:true, prevButton: '.slider .arrow-back', nextButton: '.slider .arrow-go', nodesPerPage: 2});  
	slider.init();
});
	
});