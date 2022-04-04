<!doctype html>
<html lang="pt">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>FUTURO FAMA</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/css.css">
<link rel="stylesheet" type="text/css" href="css/teste-de-habilidades.css">
<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/tweenmax/TweenMax.min.js"></script>
<script src="js/tweenmax/plugins/CSSPlugin.min.js"></script>
<script src="js/tweenmax/easing/EasePack.min.js"></script>
<script src="js/tweenmax/TweenLite.min.js"></script>
<script type="text/javascript" src="js/js.js"></script>
<script type="text/javascript" src="js/attekitaJSSlider.js"></script>
<script type="text/javascript" src="js/resultado.js"></script>
<script type="text/javascript" src="js/service.ddlist.jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/service.ddlist.jquery.css">
</head>

<body>
<?php $curso = $_GET['curso']; 
	  $area = $_GET['area']; 
?>
<?php include"includes/facebook.php"; ?>
<div class="preloader"><i class="fa fa-spinner fa-spin"></i></div>
<div id="allContent">
<!--ALL CONTENT-->

<header>
<!--HEADER-->
	<div class="container relative">
    	<a href="#" class="logo"></a>
        <div class="redes">
        	<a href="#">Fale conosco</a>
            <a href="#"><span><i class="fa fa-facebook"></i></span></a>
            <a href="#"><span><i class="fa fa-instagram"></i></span></a>
            <a href="#"><span><i class="fa fa-star"></i></span></a>
        </div>
        <div class="menu">
        	<a href="#" class="fadehover"><img src="img/btn01.png"></a>
            <a href="#" class="relative fadehover"><span class="hands"></span><img src="img/btn02.png"></a>
            <a href="#" class="fadehover"><img src="img/btn03.png"></a>
            <a href="#" class="fadehover"><img src="img/btn04.png"></a>
            <a href="#" class="fadehover"><img src="img/btn05.png"></a>
            <a href="#" class="fadehover"><img src="img/btn06.png"></a>
            <a href="#" class="fadehover"><img src="img/btn07.png"></a>
            <a href="#" class="fadehover"><img src="img/btn08.png"></a>
        </div>
        <div class="menu-mobile">
        	<div class="menu-hide">#</div>
        	<a href="#" class="fadehover">O Programa</a>
            <a href="#" class="fadehover">Teste de Habilidades</a>
            <a href="#" class="fadehover">Fama nas escolas</a>
            <a href="#" class="fadehover">Feira das Profissões</a>
            <a href="#" class="fadehover">Guia das Profissões</a>
            <a href="#" class="fadehover">Enem</a>
            <a href="#" class="fadehover">Bolsas e creditos</a>
            <a href="#" class="fadehover">Estude na fama</a>
        </div>
    
    </div>
<!--HEADER-->
</header>

<div class="body result">
<!--BODY-->
	<div class="container relative">
        <div class="box">
        	<div class="area">
            	<img src="img/title-middle.png" class="responsive">
                <div class="space"></div>
                <img src="img/result.png"  class="responsive">
            	<div class="space"></div>
            	<div class="text-right">
            		<img src="img/title-<?php echo $area; ?>.png" class="responsive">
            	</div>
            </div>
            <div class="txt">
            	<?php if($area == "exatas"){ ?>
            	Você é uma pessoa que aprecia a inovação, adora resolver problemas e vencer desafios. Gosta e tem facilidade pra solucionar problemas de maneira prática e criativa, e enxerga tudo pelo lado lógico. O raciocínio é o seu forte.
               	<?php }elseif($area == "humanas"){  ?>
                Você se interessa por história do mundo, artes e línguas. Gosta de se manter atualizado, se integrar às pessoas em sua volta, se comunicar e de expressar suas ideias. Possui facilidade em organizar e gerenciar pessoas e situações. Livros, música e cinema são hobbies pra você.
                <?php }else{  ?>
                Você é sensível, tem boa capacidade de convencimento, comunicação e no gerenciamento de conflitos. Possui pensamento organizado e é capaz de expor e reproduzir suas opiniões. Tem grande interesse pela vida e é acostumado a se preocupar com o bem estar do outro.
                <?php } ?>
                <div class="space"></div>
                <div class="social">
                	<div class="line"></div>
                	<div class="space"></div>
                	<span class="italic">
                		Gostou? Ajude mais amigos! Compartilhe.
                	</span>
                	<div class="space"></div>
                	<img src="img/post.png" class="hover fadehover responsive" onClick="checkStatus();">
                </div>
            </div>
        </div>
			<div class="ball">
            	<div class="content">
            		<div class="slider">
                    	<span label="agronomia" class="exatas">Agronomia</span>
                        <span label="anliseedesenvolvimentodesistemas" class="small exatas">Análise e Desenvolvimento de Sistemas</span>
                        <span label="engenhariaambiental" class="middle exatas">Engenharia Ambiental</span>
                        <span label="construcaodeedificios" class="middle exatas">Construção de edifícios</span>
                        <span label="processosquimicos" class="middle exatas">Processos Químicos</span>
                        <span label="arquiteturaeurbanismo" class="middle humanas">Arquitetura e Urbanismo</span>
                        <span label="administracao" class="humanas">Adminstração</span>
                        <span label="tecnologiaemgestaopublica" class="humanas middle">Tecnologia em Gestão Pública</span>
                        <span label="tecnologiaemgestaoderecursoshumanos" class="humanas">Tecnologia<br>em Recursos Humanos</span>
                        <span label="tecnologiaemtransporteterrestre" class="small humanas">Tecnologia em Transporte Terrestre</span>
                        <span label="cienciascontabeis" class="humanas">Ciências Contábeis</span>
                    	<span label="esteticaecosmetica" class="middle saude">Estética e Cosmética</span>
                        <span label="farmacia" class="saude">Farmácia</span>
                        <span label="enfermagem" class="saude">Enfermagem</span>
                        <span label="cienciasbiologicas" class="saude">Ciências Biológicas</span>
                        <span label="medicinaveterinaria" class="middle saude">Medicina Veterinária</span>
                    </div>
                    <div class="name">
                    	BIOLOGIA
                    </div>
                    <div class="go flip hover fadehover"></div>
                    <div class="back hover fadehover"></div>
            	</div>
            </div>
    </div>
    <div class="space"></div>
    <div class="space"></div>
<!--BODY-->
</div>
<div class="space"></div>
<div class="space"></div>
<footer>
	<div class="container">
		<div class="row">
        	<div class="col-md-6 col-sm-6">
            	<div class="row">
                	<div class="col-md-6">
            			<span>O Futuro FAMA</span>
                        <div class="space"></div>
                        <a href="#" class="link">O Programa</a>
                        <a href="#" class="link">Teste Vocacional</a>
                        <a href="#" class="link">FAMA nas Escolas</a>
                        <a href="#" class="link">Feira das Profissões</a>
                        <div class="space"></div>
            		</div>
                	<div class="col-md-6">
            			<span>Faculdade FAMA</span>
                        <div class="space"></div>
                        <a href="#" class="link">ENEM</a>
                        <a href="#" class="link">Guia das Profissões</a>
                        <a href="#" class="link">Bolsas e Créditos</a>
                        <a href="#" class="link">Estude na FAMA</a>
                        <a href="#" class="link">Contato</a>
                        <div class="space"></div>
            		</div>
            	</div>
            </div>
        	<div class="col-md-6 col-sm-6">
            	<div class="row">
                	<div class="col-md-8">
            			Avenida Fernando Costa, nº49, Vila Jaiara, Anápolis-GO.<br>
                        CEP: 75.064-780<br>
                        Fone: (62)3310-0000<br>
                        <div class="space"></div>
            		</div>
                    <div class="col-md-4 relative">
                    	<a href="#"><img src="img/footer-brand.jpg" class="responsive"></a>
                        <div class="space"></div>
                    </div>
            	</div>
            </div>
        </div>
        <div class="space"></div>
        <div class="text-center credits">
        	DESENVOLVIDO POR <a href="#"><img src="img/footer-credits.png"></a>
        </div>
	</div>
</footer>
<script>
var curso = "<?php echo $curso; ?>";
var area= "<?php echo $area; ?>";
wallPost.url = "<?php echo $urlunsecure."results/".$imagem.".jpg"; ?>";
$(document).ready(function() {
	$('.slider span').each(function(index, element) {
        if($('.slider span').eq(index).attr('label') == curso){
			var nome = $('.slider span').eq(index).html();
			$('.ball .name').html(nome);
			if(nome.length > 25){
				$('.ball .name').addClass('small');
			}else if(nome.length > 15){
				$('.ball .name').addClass('middle');
			}
			$('.slider span').eq(index).remove();	
		}
    });	
	$('.slider span').hide();
	var slider = new attekitaJSSlider({nodes:'.slider .' + area,useNavigation:true, prevButton: '.back', nextButton: '.go'});  
	slider.init();
	
});
</script>

<!--ALL CONTENT-->
</div>
</body>
</html>
