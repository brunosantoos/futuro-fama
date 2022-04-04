function mascaraInteiro(){        
if (event.keyCode < 48 || event.keyCode > 57){                
event.returnValue = false;                
return false;        }        
return true;}
function formataCampo(campo, Mascara, evento) { 
        var boleanoMascara; 
        
        var Digitato = evento.keyCode;
        exp = /\-|\.|\/|\(|\)| /g
        campoSoNumeros = campo.value.toString().replace( exp, "" ); 
   
        var posicaoCampo = 0;    
        var NovoValorCampo="";
        var TamanhoMascara = campoSoNumeros.length;; 
        
        if (Digitato != 8) { // backspace 
                for(i=0; i<= TamanhoMascara; i++) { 
                        boleanoMascara  = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".")
                                                                || (Mascara.charAt(i) == "/")) 
                        boleanoMascara  = boleanoMascara || ((Mascara.charAt(i) == "(") 
                                                                || (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " ")) 
                        if (boleanoMascara) { 
                                NovoValorCampo += Mascara.charAt(i); 
                                  TamanhoMascara++;
                        }else { 
                                NovoValorCampo += campoSoNumeros.charAt(posicaoCampo); 
                                posicaoCampo++; 
                          }              
                  }      
                campo.value = NovoValorCampo;
                  return true; 
        }else { 
                return true; 
        }
}

function MascaraNascimento(data){        
if(mascaraInteiro(data)==false){                
event.returnValue = false;        
}               
return formataCampo(data, '00/00/0000', event);
}

function MascaraCNPJ(cnpj){        
if(mascaraInteiro(cnpj)==false){                
event.returnValue = false;        
}               
return formataCampo(cnpj, '000.000.000-00', event);
}

function MascaraTelefone(data){        
if(mascaraInteiro(data)==false){                
event.returnValue = false;        
}
var valor = data.value;
var num = valor.split(")");
if(num[0] == "(11"){
data.maxLength = 14;
return formataCampo(data, '(00)00000-0000', event);
}else{
data.maxLength = 13;
return formataCampo(data, '(00)0000-0000', event);	
}
}

function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
};

function mascara(o,f){
        v_obj=o
        v_fun=f
        setTimeout("execmascara()",1)
    }
    function execmascara(){
        v_obj.value=v_fun(v_obj.value)
    }
    function mtel(v){
        v=v.replace(/\D/g,"");             //Remove tudo o que nÃƒÂ£o ÃƒÂ© dÃƒÂ­gito
        v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parÃƒÂªnteses em volta dos dois primeiros dÃƒÂ­gitos
        v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hÃƒÂ­fen entre o quarto e o quinto dÃƒÂ­gitos
        return v;
    }