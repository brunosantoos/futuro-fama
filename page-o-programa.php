<?php get_header(); ?>
<?php while ( have_posts() ) : the_post();  ?>
<div class="body oprograma">
<!--BODY-->
	<div class="container">
    	<div class="cabecalho">
    		<div class="row">
				<div class="col-md-7 relative text-right title">
            		<img src="<?php echo get_template_directory_uri(); ?>/img/fm-wb-topo-pagina-programa.gif" class="responsive">
            	</div>
				<div class="col-md-5 relative ">
            		<img src="<?php echo get_template_directory_uri(); ?>/img/draw-o-programa.png" class="responsive">
            	</div>
        	</div>
        </div>
        <div class="box">
            <div class="row">
            	<div class="col-md-6">
                	<div class="big">
                		<?php the_field("texto"); ?>
                	</div>
                    <div class="space"></div>
                    <span>Aqui, você encontra:</span>
                     <div class="space"></div>
                     <?php the_field("aqui_você_encontra"); ?>
                </div>
            	<div class="col-md-6 relative">
                	<img src="<?php echo get_template_directory_uri(); ?>/img/img-o-programa.png" class="responsive">
                    <div class="space"></div>
                    <div class="text-right">
                    	<img src="<?php echo get_template_directory_uri(); ?>/img/frase.png" class="responsive">
                    </div>
                </div>
            </div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/draw-o-programa-2.png" class="responsive draw">
            <span class="text-center">Inscreva-se, participe e interaja com nossos eventos. <br>
Você é muito bem-vindo aqui.
            	<div class="big">
            		<b><?php the_field("informações"); ?></b>
            	</div>
            </span>
        </div>
    </div>
    <div class="space"></div>
    <div class="space"></div>
<!--BODY-->
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
