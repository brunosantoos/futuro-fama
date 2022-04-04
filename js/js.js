// JavaScript Document
	var allContent;

$(document).ready(function() {

	allContent = $('#wrapper');
	allContent.css({opacity: 0});
	
	$(window).load(function(){
		$('.preloader').hide();
		TweenLite.to(allContent, 1, {opacity: 1, ease:'Power0.easeOut'});

		$('.menu-hide').click(function(){
			if($('header .menu-mobile').hasClass('menu-open')){
				$('header .menu-mobile').removeClass('menu-open');
			}else{
				$('header .menu-mobile').addClass('menu-open');	
			}
		});
		$('.popup .close').click(function(){
			$('.popup').fadeOut();
		});
		
setTimeout(function () {
	$('.popup').fadeOut();
}, 10000);
		
  	jQuery(".imagem").fancybox({
		'overlayShow'	: true,
		'padding' : 20,
		'transitionIn'	: 'elastic',
		'transitionOut'	: 'fade',
		'titlePosition' 	: 'over'
	});	
	
 	$('.request').click(function(){
		requestAPI($(this));
	});
			
	});
});

function requestAPI(element){
	var url = element.attr('url');
	var $pg = Number(element.attr('pg'));
	var $total =  Number(element.attr('total'));
	var $max =  Number(element.attr('max'));
	var $target =  element.attr('target');
	$('.loader').fadeIn('fast');
	element.hide();
	if($total >= $pg){
	$.post(url,{pg:$pg,total:$max},function(data){
	if(data){
		$('#' + $target).append(data);
		TweenLite.to('.node-request', 1, {opacity: 1, ease:'Power0.easeOut'});
	}
	$pg++;
	if($total >= $pg){
		element.attr('pg',$pg);
		element.fadeIn('fast');
	}
	$('.loader').hide();
	});
	}
	
}