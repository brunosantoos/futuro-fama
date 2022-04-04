// JavaScript Document
function SubmitForm(id) {
	var $verify = verificaContatoForm(id);
	if($verify == false){
	$verify = verificaEmailContatoForm(id);
	if($verify == true){
	jQuery(id + ' .button').hide();
	jQuery(id + ' .loader').fadeIn('fast');
	var dataArray = jQuery(id).serializeArray();
	dataArray.push({name: 'msg', value: generateMSG(id)});
	jQuery.post(jQuery(id).attr('action'),dataArray,function(data){
	if(data == "sucess"){
		jQuery.msg({ content: "Mensagem enviada com sucesso!", timeOut : 3000 });
		jQuery(id + ' .field').val("");
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
}
function generateMSG(id){
	var msg = "";
	jQuery(id + ' .field').each(function(index, element) {
        msg += "#content#<b>" + jQuery(id + ' .field').eq(index).attr('label') + "</b> : " + jQuery(id + ' .field').eq(index).val();
    });	
	return msg;
}
function verificaContatoForm(id){
	var bool = false;;
	jQuery(id + ' .required').each(function(index, element) {if(jQuery(id + ' .required').eq(index).val() == "" || jQuery(id + ' .required').eq(index).val() == "0"){bool = jQuery(id + ' .required').eq(index).attr('label'); return false; }});
	return bool;
}
function verificaEmailContatoForm(id){
	var bool = true;
	jQuery(id + ' .required').each(function(index, element) {
		if(jQuery(id + ' .required').eq(index).hasClass('fieldemail')){bool = validateEmail(jQuery(id + ' .required').eq(index).val()); }
	
	});
	return bool;	
}
function validateEmail(email)
{
	er = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2}/;
	if(er.exec(email))
		return true;
	else
		return false;
};