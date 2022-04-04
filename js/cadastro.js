// JavaScript Document
$(document).ready(function() {
	
$(window).load(function(){
	$('.loader').hide();
	$('#ano').ddlist({
        selectionIndex: 0,
        onSelected: function (index, value, text) {
        }
     });
});
	
});
function SubmitCadastro() {
	var id = "#form";
	var $verify = verificaContatoForm(id);
	if($('input[name=ensino]:checked', '#form').val() != undefined){
	if($verify == false){
	$verify = verificaEmailContatoForm(id);
	if($verify == true){
	jQuery(id + ' .button').hide();
	jQuery(id + ' .loader').fadeIn('fast');
	var dataArray = jQuery(id).serializeArray();
	console.log(dataArray);
	jQuery.post(jQuery(id).attr('action'),dataArray,function(data){
	if(data == "sucess"){
		Cookies.set('email', $('#email').val());
		window.open($('.body').attr('url') + "/quiz",'_self');
	}else{
		jQuery.msg({ content: data, timeOut : 3000 });	
	}
	jQuery(id + ' .button').fadeIn('fast');
	jQuery(id + ' .loader').hide();
	});
	}else{
	jQuery.msg({ content: 'E-mail inválido!', timeOut : 3000 });
	}
	}else{
	jQuery.msg({ content: 'Preencha o campo ' + $verify + '!', timeOut : 3000 });
	}
	}else{
	jQuery.msg({ content: 'Você precisa responder se terminou o ensino médio!', timeOut : 3000 });	
	}
}