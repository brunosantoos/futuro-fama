<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, maximum-scale=1, user-scalable=no">
    <?php wp_head();  ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php
    $url = get_site_url();
    $query_args = array('page_id' => 4);
    $query = new WP_Query($query_args);
    while ( $query->have_posts() ) : $query->the_post();
    $descricao = get_field('descricao');
    $keywords = get_field('keywords');
    $author = get_field('author'); 
    $title = get_bloginfo('name');
    $favicon = get_field('favicon'); 
    $facebook = get_field('facebook'); 
    $instagram = get_field('instagram'); 
    $imagem = get_field('imagem');
    endwhile;
    wp_reset_postdata();
    ?>
    <title> <?php echo $title; ?></title>
    <meta name='description' content="<?php echo $descricao; ?>" />
    <meta lang="pt" name="description" content="<?php echo $descricao; ?>"/>
    <meta lang="pt-br" name="<?php echo $descricao; ?>"/>
    <meta name="keywords" content="<?php echo $keywords; ?>" />
    <meta property="og:title" content="<?php echo $title; ?>"/>
    <meta property="og:url" content="<?php echo $url; ?>"/>
    <meta property="og:description" content="<?php echo $descricao; ?>"/>
    <meta property="og:image" content="<?php echo $imagem; ?>"/>
    <meta name='revisit-after' content='3days'/>
    <meta name='robots' content='index, follow'/>
    <meta name="LANGUAGE" content="Portuguese"/>
    <meta name="audience" content="all"/>
    <meta name="AUTHOR" content="<?php echo $author; ?>"/>
    <meta name="audience" content="all"/>
    <link rel="canonical" href="<?php echo get_site_url(); ?>" />
    <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
</head>

<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4&appId=1429177110740284";
      fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <div class="preloader"><i class="fa fa-spinner fa-spin"></i></div>
  <div id="allContent">
    <!--ALL CONTENT-->

    <header>
        <!--HEADER-->
        <div class="container relative">
           <a href="<?php echo get_site_url(); ?>"><img src="<?php the_field("marca","options"); ?>"></a>
           <div class="redes">
               <a href="<?php echo get_page_link(14); ?>">Fale conosco</a>
               <!-- <a class="social_icon" href="<?php echo $instagram; ?>" target="_blank"><i class="fa fa-fw fa-instagram"></i></a> -->
               <a class="social_icon" href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-fw fa-facebook"></i></span></a>
               <a class="social_icon" href="http://www.faculdadefama.edu.br/" target="_blank"><i class="fa fa-fw fa-star"></i></a>
           </div>
           <div class="menu">
            <ul class="clearfix">
                <li><a href="<?php echo get_page_link(2649); ?>" class="<?php if(is_page('o-programa')){ echo "active"; } ?>">Blog</a></li>
                <li><a href="<?php echo get_page_link(57); ?>" class="<?php if(is_page('enem') || is_page('dicas-do-enem') || is_page('provas-anteriores') || is_page('a-importancia-do-enem')){ echo "active"; } ?>">Enem</a></li>
                <li><a href="<?php echo get_page_link(84); ?>" class="<?php if(is_page('teste-de-habilidades-cadastro') || is_page('teste-de-habilidades') || is_page('resultado') || is_page('quiz')){ echo "active"; } ?>">Teste</a></li>
                <li><a href="<?php echo get_post_type_archive_link('profissoes'); ?>" class="<?php if(is_archive('profissoes') || is_singular('profissoes')){ echo "active"; } ?>">Seu Guia</a></li>
                <li><a href="<?php echo get_permalink( get_page_by_path( 'provao' ) ) ?>" class="<?php if(is_page('provao')){ echo "active"; } ?>">Provão</a></li>
                <li><a href="<?php echo get_page_link(37); ?>" class="<?php if(is_page('feira-das-profissoes')){ echo "active"; } ?>">Feira</a></li>
                <li><a href="<?php echo get_page_link(77); ?>" class="<?php if(is_page('estude-na-fama')){ echo "active"; } ?>">Estude na Fama</a></li>
            </ul>
        </div>
        <div class="menu-mobile">
        	<div class="menu-hide"><i class="fa fa-bars"></i></div>
            <a href="<?php echo get_page_link(2649); ?>" class="fadehover">Blog</a>
            <a href="<?php echo get_page_link(48); ?>" class="fadehover">Enem</a>
            <a href="<?php echo get_page_link(84); ?>" class="fadehover">Teste</a>
            <a href="<?php echo get_post_type_archive_link('profissoes'); ?>" class="fadehover">Guia das Profissões</a>
            <a href="<?php echo get_page_link(48); ?>" class="fadehover">Provão do Enem</a>
            <a href="<?php echo get_page_link(37); ?>" class="fadehover">Feira das Profissões</a>
            <a href="<?php echo get_page_link(77); ?>" class="fadehover">Estude na Fama</a>
        </div>

    </div>
    <!--HEADER-->
</header>

<?php
$id = get_the_ID();
if(is_home()){
    $id = 1301;	
}
$query_args = array( 'posts_per_page' => 1,'post_type' => 'popup', 'meta_key'=> 'pagina','meta_value'=> $id);
$query = new WP_Query($query_args);
while ( $query->have_posts() ) : $query->the_post(); ?>
<div class="popup">
	<div class="content">
       <div class="banner" href="<?php the_field("link"); ?>">
          <div class="close"></div>
          <a href="<?php the_field("link"); ?>"><img src="<?php the_field("imagem"); ?>"></a>
      </div>
  </div>
</div>
<?php
endwhile;
wp_reset_postdata();
?>