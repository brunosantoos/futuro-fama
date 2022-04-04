    var allContent;
	var step = 0;
	var exatas = 0;
	var humanas = 0;
	var saude = 0;
	var result = "";
	var curso = "";
	var cursos = [];

$(document).ready(function() {
	
$(window).load(function(){
	clearAll();
	goToStep(step);
	
	$('.go').click(function(){
		if(result.length == 0){
		nextFirsSteps();
		}else{
		nextSteps();	
		}
	});
	
	$('.back').click(function(){
		backStep();
		
	});
});
	
});
function clearAll(){
	$('.step').hide();
}
function nextSteps(){
	var current = step + 1;
	var value = $('.' + result + ' input[name="' + result + '_step_' + current  + '"]:checked').val();
	if(value == undefined){
		alerta("Escolha uma resposta!");	
	}else{
		if(step < 15){
			step++;
			goToCursoStep(step);
		}else{
			processVotes();
		}
	}
}
function nextFirsSteps(){
	var current = step + 1;
	var value = $('input[name="step_' + current  + '"]:checked').val();
	if(value == undefined){
		alerta("Escolha uma resposta!");	
	}else{
		if(step < $('.first-steps .step').length - 1){
			step++;
			goToStep(step);
		}else{
			step++;
			processFirstVotes();
		}
	}
}
function backStep(){
		if(step > 0){
			step--;
			if(step < $('.first-steps .step').length && result.length > 0){
				result = "";
				curso = "";	
				cursos = [];
			}
			goToStep(step);
		}else{
			window.open($('.body').attr('url') + "/teste-de-habilidades-cadastro/",'_self');	
		}
}
function goToCursoStep(num){
		step = num;
		num = step - $('.first-steps .step').length;
		$('.step').hide();
		$('.' + result + ' .step').eq(num).fadeIn('slow');
		$('.buttons').fadeIn();
}
function goToStep(num){
		step = num;
		$('.step').hide();
		$('.step').eq(num).fadeIn('slow');
		$('.buttons').fadeIn();
}
function goProcess(){
	clearAll();
	$('.preloader').fadeIn('fast');
	$('#allContent').fadeOut('fast');
	window.setTimeout(function() {window.open($('.body').attr('url') + "/resultado-quiz?curso=" + curso + "&area=" + result,'_self');}, 2000);	
}
function processVotes(){
	cursos = [];
	$('.buttons').hide();
	$('.' + result +' .step').each(function(index, element) {
        voteCurso(index + $('.first-steps .step').length);
    });
	var arrNames = [];
	var arrValues = [];
	for (key in cursos) {
		arrNames.push(key);
		arrValues.push(cursos[key]);
	}
	var value = Math.max.apply(null,arrValues);
	var index = arrValues.indexOf(value);
	curso = arrNames[index];
	console.log(cursos);
	console.log(curso);
	goProcess();
}
function voteCurso(field){
	var current = field + 1;
	var name = result + '_step_' + current;
	var value = $('input[name="' + name  + '"]:checked').val();
	var arr = [];
	arr = value.split(',');
	if(arr.length > 0){
		for(var i = 0; i < arr.length; i++){
			if(arr[i].length > 0){
				var c = cursos[arr[i]];
				if(c != undefined){
					cursos[arr[i]] = c + 1;	
				}else{
					cursos[arr[i]] = 1;
				}
			}
		}
	}else{
		cursos.push(value);
	}
}
function processFirstVotes(){
	result = "";
	curso = "";	
	cursos = [];
	exatas = 0;
	humanas = 0;
	saude = 0;
	$('.buttons').hide();
	$('.first-steps .step').each(function(index, element) {
        vote(index);
    });
	getFirsResult();
}
function vote(field){
	var current = field + 1;
	var name = 'step_' + current;
	var value = $('input[name="' + name  + '"]:checked').val();
	var arr = [];
	arr = value.split(',');
	if(arr.length > 0){
		for(var i = 0; i < arr.length; i++){
			if(arr[i].length > 0){
				addvote(arr[i]);
			}
		}
	}else{
		addvote(value);
	}
}
function addvote(value){
	switch(value) {
		case "exatas":
        exatas++;
        break;
		case "humanas":
        humanas++;
        break;
		case "saude":
        saude++;
        break;
	}
}
function getFirsResult(){
	console.log("exatas " + exatas + " humanas " + humanas + " saude " + saude);
	var value = Math.max(exatas, humanas, saude);
	var r = getArrayResults(value);
	console.log(r);
	if(r.length > 1){
		$('.first-steps .step').each(function(index, element) {
			if($('.first-steps .step').eq(index).hasClass('primary')){
        		vote(index);
			}
    	});
		getFirsResultTie();
	}else{
		result = r[0];
		cursos = [];
		goToCursoStep(step);
	}
	
}
function getFirsResultTie(){
	console.log("exatas " + exatas + " humanas " + humanas + " saude " + saude);
	var value = Math.max(exatas, humanas, saude);
	var r = getArrayResults(value);
	result = r[0];
	console.log(result);
	cursos = [];
	goToCursoStep(step);
}
function getArrayResults(value){
	var r = [];
	if(exatas == value){
		r.push("exatas");
	}
	if(humanas == value){
		r.push("humanas");
	}
	if(saude == value){
		r.push("saude");
	}
	return r;
}
function shuffle(array) {
  var $max = array.length - 1;
  var $min = 0;
  var index = 0;
  
  if(array.length > 0){
	  index = getRandomInt($min, $max);
  }
  return array[index];
}
function getRandomInt($min, $max) {
    return Math.floor(Math.random() * ($max - $min + 1)) + $min;
}
function alerta(msg){
	$.msg({ content: msg, timeOut : 3000 });
}