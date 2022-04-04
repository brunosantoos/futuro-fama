<?php get_header(); ?>
<?php while ( have_posts() ) : the_post();  ?>
<?php 
	  $curso = $_GET['curso']; 
	  $area = $_GET['area']; 
?>
<?php include"includes/facebook.php"; ?>
<div class="body result">
<!--BODY-->
	<div class="container relative">
        <div class="box">
        	<div class="area">
            	<img src="<?php echo get_template_directory_uri(); ?>/img/title-middle.png" class="responsive">
                <div class="space"></div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/result.png"  class="responsive">
            	<div class="space"></div>
            	<div class="text-right">
            		<img src="<?php echo get_template_directory_uri(); ?>/img/title-<?php echo $area; ?>.png" class="responsive">
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
                	<img src="<?php echo get_template_directory_uri(); ?>/img/post.png" class="hover fadehover responsive"  onClick="checkStatus();">
                </div>
            </div>
        </div>
			<div class="ball">
            	<div class="content" style="background-image:url(<?php echo get_template_directory_uri(); ?>/results/<?php echo $curso; ?>.png);">
            		<div class="slider">
                    	<span label="agronomia" class="exatas">Agronomia</span>
                        <span label="anliseedesenvolvimentodesistemas" class="small exatas">Tec. em Análise<br>e Desenvolvimento de Sistemas</span>
                        <span label="engenhariaambiental" class="exatas">Engenharia Ambiental</span>
                        <span label="construcaodeedificios" class="middle exatas">Tec. em Construção de edifícios</span>
                        <span label="processosquimicos" class="middle exatas">Tec. em Processos Químicos</span>
                        <span label="arquiteturaeurbanismo" class="middle humanas">Arquitetura e Urbanismo</span>
                        <span label="administracao" class="humanas">Adminstração</span>
                        <span label="tecnologiaemgestaopublica" class="humanas middle">Tec. em Gestão Pública</span>
                        <span label="tecnologiaemrecursoshumanos" class="humanas middle">Tec. em Gestão de<br> Recursos Humanos</span>
                        <span label="tecnologiaemtransporteterrestre" class="middle humanas">Tec. em<br>Transporte Terrestre</span>
                        <span label="cienciascontabeis" class="humanas">Ciências Contábeis</span>
                    	<span label="esteticaecosmetica" class="middle saude">Tec. em Estética e Cosmética</span>
                        <span label="farmacia" class="saude">Farmácia</span>
                        <span label="enfermagem" class="saude">Enfermagem</span>
                        <span label="cienciasbiologicas" class="saude">Ciências Biológicas</span>
                        <span label="medicinaveterinaria" class="saude">Medicina Veterinária</span>
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
<script>
var curso = "<?php echo $curso; ?>";
var area= "<?php echo $area; ?>";
var nome;
wallPost.url = "<?php echo get_template_directory_uri()."/results/".$curso.".jpg"; ?>";
$(document).ready(function() {
	$('.slider span').each(function(index, element) {
        if($('.slider span').eq(index).attr('label') == curso){
			nome = $('.slider span').eq(index).html();
			$('.ball .name').html(nome);
			if(nome.length > 25){
				$('.ball .name').addClass('small');
			}else if(nome.length > 18){
				$('.ball .name').addClass('middle');
			}
			$('.slider span').eq(index).remove();	
		}
    });	
	$('.slider span').hide();
	var slider = new attekitaJSSlider({nodes:'.slider .' + area,useNavigation:true, prevButton: '.back', nextButton: '.go'});  
	slider.init();
	$(window).load(function(){
	var email = Cookies.get('email'); 
	var resultados = nome.replace("<br>", " ");
	jQuery.post("<?php echo  get_template_directory_uri(); ?>/php/update.php",{email: email, resultado: resultados},function(data){
		console.log(data);
	});
	});
	
});
</script>
<?php endwhile; ?>
<?php get_footer(); ?>
