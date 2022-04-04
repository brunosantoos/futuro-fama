<?php get_header(); ?>
<?php while ( have_posts() ) : the_post();  ?>
<div class="body fama-nas-escolas">
<!--BODY-->
	<?php if( have_rows('datas') ): ?>    
    <div class="container">
    	<div class="cabecalho">
    		<div class="row">
				<div class="col-md-7 relative text-right title">
            		<img src="<?php echo get_template_directory_uri(); ?>/img/title-fama-nas-escolas.png" class="responsive">
            	</div>
				<div class="col-md-5 relative ">
            		<img src="<?php echo get_template_directory_uri(); ?>/img/draw-fama-nas-escolas.png" class="responsive">
            	</div>
        	</div>
        	<div class="box">
            	<span><?php the_field("cabeçalho"); ?></span>
        	</div>
        </div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="text">
            <div class="row">
            	<div class="col-md-6">
                	<div class="space"></div>
                    <div class="inner-text">
                	<?php the_field("texto"); ?>
                	<div class="space"></div>
                    <div class="chart-fama">
                    	<?php the_field("frase"); ?>
                    </div>
                    </div>
                    <div class="space"></div>
                    <div class="space"></div>
                    <div class="space"></div>
                </div>
                <div class="col-md-6 relative">
                	<div class="box-datas">
                    	<div class="chart title">
                    	 <?php the_field("titulo"); ?>
                        </div>
                        <div class="slider relative">
                        	<span class="arrow arrow-go fadehover hover"></span>
           					<span class="arrow arrow-back flip fadehover hover"></span>
                        	<div class="row">
                            	<?php
								setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
								date_default_timezone_set('America/Sao_Paulo');
								while ( have_rows('datas') ) : the_row(); 
								$image = get_sub_field('imagem');
								$date = get_sub_field('data');
								$y = substr($date, 0, 4);
								$m = substr($date, 4, 2);
								$d = substr($date, 6, 2);
								?>
                            	<div class="col-md-6 col-sm-6">
                        			<div class="node">
                            			<img src="<?php imgCrop($image, 158,158,1); ?>">
                                        <span><?php echo strftime("%d", strtotime( $date )); ?>/<?php echo strftime("%m", strtotime( $date )); ?></span>
                                        <?php the_sub_field('escola'); ?>
                            		</div>
                            	</div>
                                <?php endwhile; ?>
                            	
                        	</div>
                            <div class="text-right">
                            	<div class="space"></div>
                                <div class="space"></div>
                            	<a href="<?php echo get_permalink( get_page_by_path( 'provao' ) ) ?>" class="fadehover"><img src="<?php echo get_template_directory_uri(); ?>/img/btn-plus-famanasescolas.jpg" alt=""></a>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-text">
        	<?php the_field("informações"); ?>
        </div>
        <div class="space"></div>
        <div class="space"></div>
    </div>
    <?php else: ?>
    	<div class="container">
    	<div class="cabecalho">
    		<div class="row">
				<div class="col-md-7 relative text-right title">
            		<img src="<?php echo get_template_directory_uri(); ?>/img/title-fama-nas-escolas.png" class="responsive">
            	</div>
				<div class="col-md-5 relative ">
            		<img src="<?php echo get_template_directory_uri(); ?>/img/draw-fama-nas-escolas.png" class="responsive">
            	</div>
        	</div>
        </div>
        <div class="boxs">
            <span>aguarde! Em breve, novidades sobre o fama nas escolas!</span>
        </div>
    </div>
    <?php endif; ?>
<!--BODY-->
</div>
<?php endwhile; ?>
<?php get_footer(); ?>