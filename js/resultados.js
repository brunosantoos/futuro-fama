// JavaScript Document

$(document).ready(function() {
	$('.lupa').click(function(){
		if($('#s').val().length > 3){
			$('#form').submit();
		}else{
			jQuery.msg({ content: "Dados insuficientes para busca!", timeOut : 3000 });
		}
	});
	
	$('#jSelect').change(function() {
		var i = $(this).val();
		var item = 't' + i;
		
		for(x = 1; x <= 26; x++){
			if(x != i){
				if($('#t' + x).is( ":visible" )){
					$('#t' + x).fadeOut( "slow" );
				}
			}
		}
		
		$('#' + item).find('table').addClass('table-striped').removeClass('table-hover');
		$('#' + item).show(2000);
	});
	
});