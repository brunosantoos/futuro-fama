<?php get_header();?>
<?php while ( have_posts() ) : the_post();  
$ID = get_the_ID();
$terms = wp_get_post_categories($ID);
if(count($terms) > 0){
$TERM = get_category($terms[0]);
}
setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
date_default_timezone_set('America/Sao_Paulo');
$pfx_date = get_the_date( "d F, Y", $ID );
$image = get_field('imagem');
?>
<div class="body blog">
<!--BODY-->
	<div class="container">
    	<div class="cabecalho">
    		<div class="row">
				<div class="col-md-12 relative text-center title">
                    <h1 class="page-title">Blog</h1>
            	</div>
        	</div>
            <div class="links">
            <?php
			$categories = get_categories( array(
   			 'orderby' => 'name',
    		 'parent'  => 0,
			 'exclude' => array(1)
			) );
			
			if($categories):
			foreach ( $categories as $category ) {
			?>
            	<a href="<?php echo get_category_link( $category->term_id ); ?>" class="fadehover"><?php echo $category->name; ?></a>
            <?php
			}
			endif; 
			
			?>
            </div>
        </div>
        <div class="row">
         	<div class="col-md-8 col-lg-9">
            	<div class="content-post">
                    <?php if(!empty($TERM)): ?>
                    <div class="category"><?php echo $TERM->name; ?></div>
					<?php endif; ?>
                    <img class="force-responsive" src="<?php imgCrop($image, 800,300,1); ?>">
                    <div class="content">
                    	<div class="title"><?php the_title(); ?></div>
                        <div class="space"></div>
                        <div class="data">postado em <?php echo $pfx_date; ?></div>
                        <div class="space"></div>
                        <?php the_content(); ?>
                    </div>
                    <div class="coment">
                    	<div class="fb-comments" data-href="<?php the_permalink(); ?>"  data-numposts="5" data-width="100%"></div>
                    
                    </div>
                </div>
                <div class="space"></div>
                <div class="newsletter">
                	<div class="row">
                    	<div class="col-md-5">
                        	<div class="space"></div>
                        	Assine nossa news com seu email
                            <div class="padding"></div>
                        </div>
                        <div class="col-md-7">
                        <?php es_subbox( $namefield = "NO", $desc = "", $group = "" ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 text-center">
            	<a href="http://www.futurofama.com.br/enem/"><img class="responsive" src="<?php the_field("banner_enem","options"); ?>"></a>
                <div class="space"></div>
                <div class="space"></div>
                <div class="lateral">
                	<div class="title">Últimas</div>
                	<div class="space"></div>
                    <?php
					$query_args = array( 'posts_per_page' => 10,'post_type' => 'post', 'post__not_in' => array($ID));
					$query = new WP_Query($query_args);
					while ( $query->have_posts() ) : $query->the_post();
					?>
            		<a href="<?php the_permalink(); ?>" class="post-link fadehover">
                      <?php the_title(); ?>
            		</a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <div class="space"></div>
        <div class="space"></div>
    </div>
<!--BODY-->
</div>
<?php endwhile; ?>
<?php get_footer(); ?>