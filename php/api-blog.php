<?php 
$path = "../../../..";
define('WP_USE_THEMES', false);
require($path .'/wp-load.php');
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function custom_excerpt_length( $length ) {
	return 20;
}

$paged = @$_POST['pg'];
$postperpage = @$_POST['total'];
$cat = @$_GET['cat'];


if(!empty($cat)):
$query_args = array( 'posts_per_page' => $postperpage,'post_type' => 'post', 'paged' => $paged, 'category_name' => $cat);
else:
$query_args = array( 'posts_per_page' => $postperpage,'post_type' => 'post', 'paged' => $paged);
endif;
$query = new WP_Query($query_args);
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
                        <span><?php echo $TERM->name; ?></span>
						<?php endif; ?>
						<?php the_title(); ?></div>
                		<div class="text"><?php the_excerpt(); ?></div>
                	</div>
                </div>
            </a>
<?php endwhile; 
	wp_reset_postdata();
?>