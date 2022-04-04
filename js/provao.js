// JavaScript Document

$(document).ready(function() {
	
$(window).load(function(){
	selectAba(0);
	$('.links span').each(function(index, element) {
        $(this).click(function(e) {
            selectAba(index);
        });
    });
});
	
});

function selectAba(num){
	$('.nodes .node').hide();
	$('.nodes .node').eq(num).fadeIn('fast');
	$('.links span').removeClass('active');
	$('.links span').eq(num).addClass('active');	
}