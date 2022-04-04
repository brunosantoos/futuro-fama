<?php get_header(); ?>
<?php 
$query_args = array('page_id' => 48);
$query = new WP_Query($query_args);
while ( $query->have_posts() ) : $query->the_post(); 
?>
<div class="body enem">
<!--BODY-->
	<div class="container">
        <div class="cabecalho">
            <div class="row">
                <div class="col-md-12 relative text-center title">
                    <h1 class="page-title">Enem</h1>
                </div>
            </div>
            <div class="links">
                <a href="<?php echo get_page_link(57); ?>" class="fadehover">A importância do Enem</a>
                <a href="<?php echo get_page_link(59); ?>" class="fadehover">Dicas Enem</a>
                <a href="<?php echo get_page_link(61); ?>" class="fadehover">Provas Anteriores</a>
            </div>
        </div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="relative text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/title-importancia.png" class="responsive">
        </div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="box">
        	<?php the_field("importancia_01"); ?>
        </div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="timeline">
        	<?php while ( have_rows('topicos') ) : the_row(); ?>
            <div class="event">
            	<div class="col-md-4 col-sm-4 relative text-center">
                	<img src="<?php the_sub_field("imagem"); ?>" class="responsive">
                    <div class="mark"></div>
                </div>
            	<div class="col-md-8 col-sm-8">
                <span><?php the_sub_field("nome"); ?></span>
                <?php the_sub_field("texto"); ?>
				</div>
            </div>
			<?php endwhile; ?>
        </div>
        <div class="space"></div>
        <div class="space"></div>
    </div>
<!--BODY-->
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
