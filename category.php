<?php get_header();
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function custom_excerpt_length( $length ) {
	return 20;
} 
$cat =  get_category(get_queried_object()->cat_ID);
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
            	<a href="<?php echo get_category_link( $category->term_id ); ?>" class="fadehover <?php if($category->slug == $cat->slug){ echo "active"; } ?>"><?php echo $category->name; ?></a>
            <?php
			}
			endif; 
			
			?>
            </div>
        </div>
        <div class="posts" id="content">>
               <?php
			   	$next = 2;
				$max = 10;
				$query_args = array( 'posts_per_page' => $max,'post_type' => 'post', 'category_name' => $cat->slug);
				$query = new WP_Query($query_args);
				$totalpag = $query->max_num_pages;
				while ( $query->have_posts() ) : $query->the_post();
				$image = get_field('imagem');
					$ID = get_the_ID();
					$terms = wp_get_post_categories($ID);
					if(count($terms) > 0){
						$TERM = get_category($terms[0]);
					}
				?>
            <a href="<?php the_permalink(); ?>" class="post fadehover">
            	<div class="content">
            		<div class="img"><img src="<?php imgCrop($image, 500,400,1); ?>" alt=""></div>
                	<div class="box">
                		<div class="title">
                        <?php if(!empty($TERM)): ?>
                        <span><?php echo $cat->name; ?></span>
						<?php endif; ?>
						<?php the_title(); ?></div>
                		<div class="text"><?php the_excerpt(); ?></div>
                	</div>
                </div>
            </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
        </div>
        <div class="space"></div>
        <?php if($totalpag > 1 && $next <= $totalpag): ?>
        <div class="text-center">
        	<img class="fadehover responsive request" pg="<?php echo $next; ?>" target="content" max="<?php echo $max; ?>" total="<?php echo $totalpag; ?>" url="<?php echo get_template_directory_uri()."/php/api-blog.php?cat=".$cat->slug; ?>" src="<?php echo get_template_directory_uri(); ?>/img/blog-plus.jpg" alt="">
            <div class="loader"><i class="fa fa-spin fa-refresh"></i></div>
       </div>
       <?php endif; ?>
        <div class="space"></div>
        <div class="space"></div>
    </div>
<!--BODY-->
</div>
<?php get_footer(); ?>