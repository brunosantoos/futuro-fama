<?php get_header(); ?>
<?php while ( have_posts() ) : the_post();  ?>
<div class="body bolsas">
<!--BODY-->
	<div class="container">
    	<div class="cabecalho">
    		<div class="row">
				<div class="col-md-5 relative text-right title">
            		<img src="<?php echo get_template_directory_uri(); ?>/img/title-bolsas.png" class="responsive">
            	</div>
				<div class="col-md-7 relative ">
            		<img src="<?php echo get_template_directory_uri(); ?>/img/draw-bolsas.png" class="responsive">
            	</div>
        	</div>
            <div class="space"></div>
            <div class="text">
            	Quer ingressar em uma faculdade, mas a grana tá curta? Veja aqui os principais programas de bolsas e créditos que podem te ajudar a vencer essa etapa.
            </div>
            <div class="space"></div>
        </div>
        <div class="space"></div>
        <?php if( have_rows('bolsas') ): ?> 
        <div class="carousel-bolsas" id="owl">
        	<?php while ( have_rows('bolsas') ) : the_row(); ?>
        	<div class="bolsa relative">
            	<div class="fies circle" style="background-image:url(<? the_sub_field("icone"); ?>)"></div>
                <span></span>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <div class="space"></div>
         <?php if( have_rows('bolsas') ): ?> 
         <?php while ( have_rows('bolsas') ) : the_row(); ?>
        <div class="box">
		<?php the_sub_field("conteudo"); ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="space"></div>
    <div class="space"></div>
<!--BODY-->
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
