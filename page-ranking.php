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
        <div class="relative text-center">
         
            <div class="space"></div>
            <div class="space"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/btn_rank.png" class="responsive">
            <div class="space"></div>
            <div class="space"></div>
            <div class="search">
                <form id="form" name="form" method="get" action="<?php echo get_site_url(); ?>">
                   <input value="" name="s" id="s" placeholder="digite o nome do seu colégio">
                   <div class="lupa fadehover"></div>
               </form>
           </div>
           
           <div class="space"></div>
           <div class="space"></div>
           
           <p class="text-center abas">
            <a href="<?php echo get_page_link(48); ?>" class="active"><img src="<?php echo get_template_directory_uri(); ?>/img/fm-wb-banner-enem-provao-2016.gif"></a>
            <a href="<?php echo get_post_type_archive_link("resultados"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/fm-wb-banner-enem-provao-2015.gif"></a>
        </p>
    </div>
    <?php
    if(!empty($s)):
      $query_args = array( 'posts_per_page' => -1,'post_type' => 'resultados');
  $query = new WP_Query($query_args);
  while ( $query->have_posts() ) : $query->the_post();
  ?>
  <div class="result">
   <div class="row">
      <div class="col-md-3 col-sm-3">
         Alunos
     </div>
     <div class="col-md-9 col-sm-9 relative">
      <?php the_title(); ?>
  </div>
</div>
</div>
<?php if( have_rows('alunos') ): ?> 
    <div class="box-result">
       <table>
          <tr>
           <td></td>
           <td>Posição</td>
           <td>Nome</td>
           <td>Pontos</td>
       </tr>
       <?php $i = 1; while ( have_rows('alunos') ) : the_row(); ?>
       <tr class="aluno">
           <td class="pos"><?php echo $i; ?>º</td>
           <td><?php the_sub_field("nome"); ?></td>
           <td><?php the_sub_field("nome"); ?></td>
           <td><?php the_sub_field("nome"); ?></td>
       </tr>
       <?php $i++; endwhile; ?>
   </table>
   <div class="padding"></div>
</div>
<?php endif; ?>
<div class="space"></div>
<div class="space"></div>
<?php endwhile; ?>
<?php endif; ?>
</div>
<!--BODY-->
</div>
<?php get_footer(); ?>