// JavaScript Document

$(document).ready(function() {
	
$(window).load(function(){
	$('.circle').each(function(index, element) {
        $('.circle').eq(index).attr("num",index);
    });
	$('.circle').click(function(){
		selectNode($(this).attr("num"));
	});
	selectNode(0);
	
   var owl = $("#owl");
 
  owl.owlCarousel({
	  navigation : false, 
	  pagination:true,
      items : 5, //10 items above 1000px browser width
      itemsDesktop : [1000,4], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,4], // betweem 900px and 601px
      itemsTablet: [700,3], //2 items between 600 and 0
      itemsMobile : [500,2] // itemsMobile disabled - inherit from itemsTablet option
  });
});
	
});

function selectNode(index){
		$('.circle').removeClass('active');
		$('.circle').eq(index).addClass('active');
		$('.box').hide();
		$('.box').eq(index).fadeIn('fast');
}