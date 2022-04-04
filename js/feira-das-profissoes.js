// JavaScript Document
$(document).ready(function() {
	
$(window).load(function(){
	$('.loader').hide();
	$('#ano').ddlist({
        selectionIndex: 0,
        onSelected: function (index, value, text) {
        }
     });
	$('#outros').hide();
	$('#colegio').ddlist({
        selectionIndex: 0,
        onSelected: function (index, value, text) {
			if(value == "Outros"){
				$('#outros').fadeIn('fast');	
			}else{
				$('#outros').hide();
			}
        }
     });
	$('#cidade').ddlist({
        selectionIndex: 0,
        onSelected: function (index, value, text) {
        }
     });
	 
	var slider = new attekitaJSSlider({nodes:'.box-galeria .node',useNavigation:true, prevButton: '.box-galeria .back', nextButton: '.box-galeria .go', nodesPerPage: 5});  
	var slider2 = new attekitaJSSlider({nodes:'.box-galeria-destaque .node',useNavigation:true, prevButton: '.box-galeria-destaque .back', nextButton: '.box-galeria-destaque .go', nodesPerPage: 1});  
	slider.init();
	slider2.init();
});
	
});

function SubmitInscricao() {
	var id = "#form";
	var $verify = verificaContatoForm(id);
	if($verify == false){
	$verify = verificaEmailContatoForm(id);
	if($verify == true){
	$verify = verificaColegio();
	if($verify == true){
	jQuery(id + ' .button').hide();
	jQuery(id + ' .loader').fadeIn('fast');
	var dataArray = jQuery(id).serializeArray();
	dataArray.push({name: 'msg', value: generateMSG(id)});
	jQuery.post(jQuery(id).attr('action'),dataArray,function(data){
	if(data == "sucess"){
		jQuery(id + ' .field').val("");
		jQuery('.form').hide();
		jQuery('.result').fadeIn('fast');
	}else if(data == "has"){
		jQuery.msg({ content: "Você já esta inscrito!", timeOut : 3000 });
	}else{
		jQuery.msg({ content: data, timeOut : 3000 });	
	}
	jQuery(id + ' .button').fadeIn('fast');
	jQuery(id + ' .loader').hide();
	});
	}else{
	jQuery.msg({ content: 'Preencha o nome do colégio!', timeOut : 3000 });
	}
	}else{
	jQuery.msg({ content: 'E-mail inválido!', timeOut : 3000 });
	}
	}else{
	jQuery.msg({ content: 'Preencha o campo ' + $verify + '!', timeOut : 3000 });
	}
}

function verificaColegio(){
	var bool = false;
	if($('#colegio').val() != 0 && $('#colegio').val() != "Outros"){
		bool = true;	
	}else if($('#outros').val().length > 0){
		bool = true;
	}
	return bool;
}