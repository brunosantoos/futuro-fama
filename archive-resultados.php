<?php get_header(); 
function __search_by_title_only( $search, &$wp_query )
{
    global $wpdb;
    if(empty($search)) {
        return $search; // skip processing - no search term in query
    }
    $q = $wp_query->query_vars;
    $n = !empty($q['exact']) ? '' : '%';
    $search =
    $searchand = '';
    foreach ((array)$q['search_terms'] as $term) {
        $term = esc_sql($wpdb->esc_like($term));
        $search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
        $searchand = ' AND ';
    }
    if (!empty($search)) {
        $search = " AND ({$search}) ";
        if (!is_user_logged_in())
            $search .= " AND ($wpdb->posts.post_password = '') ";
    }
    return $search;
}
add_filter('posts_search', '__search_by_title_only', 500, 2);
$s = @$_GET['s'];
?>
<!-- Modal HTML -->
<?php $query_args = array('page_id' =>48);
$query = new WP_Query($query_args);
while ( $query->have_posts() ) : $query->the_post();
?>
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
				<h4 class="modal-title">Como Calcular sua nota.</h4>
                <div class="space"></div>
			</div>
			<div class="modal-body">
				<img src="<?php the_field("modal"); ?>" class="responsive">
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>
<?php endwhile;
wp_reset_postdata();
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
                <a href="<?php echo get_page_link(48); ?>" class="fadehover">Provão Enem</a>
                <a href="<?php echo get_page_link(57); ?>" class="fadehover">A importância do Enem</a>
                <a href="<?php echo get_page_link(59); ?>" class="fadehover">Dicas Enem</a>
                <a href="<?php echo get_page_link(61); ?>" class="fadehover">Provas Anteriores</a>
            </div>
        </div>
       <div class="space"></div>
        <div class="relative text-center">
			<img src="<?php echo get_template_directory_uri(); ?>/img/fm-wb-banner-ranking-alunospremiados.gif">
            <img src="<?php echo get_template_directory_uri(); ?>/img/fm-wb-banner-ranking-top5.gif">
            <img src="<?php echo get_template_directory_uri(); ?>/img/fm-wb-banner-ranking-escolastop10.gif">
            <img src="<?php echo get_template_directory_uri(); ?>/img/fm-wb-banner-ranking-escolaspremiadas.gif">
            
            
            
            
            
        </div>
    </div>
<!--BODY-->
</div>
<?php get_footer(); ?>