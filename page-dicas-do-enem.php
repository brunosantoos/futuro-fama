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
        <div class="relative text-center title-dicas">
            <img src="<?php echo get_template_directory_uri(); ?>/img/title-dicas.png" class="responsive">
        </div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="box">
        	<?php the_field("dicas_01"); ?>
        </div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="dicas">
        <?php 
			$class = "dica-esq";
			$i = 1;
			while ( have_rows('dicas') ) : the_row(); 
		
			if($class == "dica-esq"){
				$class = "";
			}else{
				$class = "dica-esq";
			}
		?>
            <div class="dica <?php echo $class; ?>">
            	<img src="<?php the_sub_field("imagem"); ?>">
                <span><?php echo $i; ?>. <?php the_sub_field("titulo"); ?></span>
                <?php the_sub_field("texto"); ?>
            </div>
            <div class="space"></div>
         <?php $i++; endwhile; ?>
        </div>
        <div class="space"></div>
        <div class="space"></div>
    </div>
<!--BODY-->
</div>
<?php endwhile; ?>
<?php get_footer(); ?>