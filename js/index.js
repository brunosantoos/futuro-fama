// JavaScript Document

$(document).ready(function() {
	
$(window).load(function(){
	var slider = new attekitaJSSlider({nodes:'.slider a',useNavigation:true, usePagination: true, useDots: true, prevButton: '.slider .arrow-back', nextButton: '.slider .arrow-go', nodesPerPage: 1, auto:true});  
	slider.init();
});


	
});