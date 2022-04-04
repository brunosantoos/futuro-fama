<?
$path = "../../../..";
define('WP_USE_THEMES', false);
require($path .'/wp-load.php');

$nome = @$_POST['nome'];
$email = @$_POST['email'];
$telefone = @$_POST['telefone'];
$ensinomedio = @$_POST['ensino'];
$ano = @$_POST['ano'];
$facebook = @$_POST['facebook'];
$today_date = new DateTime("now");
$today = date_format($today_date, 'Y-m-d H:i:s');

$query_args = array( 'posts_per_page' => 1,'post_type' => 'testedehabilidades','meta_query' => array(
		array(
		'key' => 'facebook', 
		'value' => $facebook, 
		'compare' => '='
		)
));
$query = new WP_Query($query_args);
if($query->found_posts == 0):	
		$post = array(
  		'post_title'     => $nome,
  		'post_status'    => 'publish',
  		'post_type'      => 'testedehabilidades',
  		'post_date'      => $today,
  		'post_date_gmt'  => $today,
		);
		$ID = wp_insert_post($post);
		add_post_meta($ID, 'email', $email, true);
		add_post_meta($ID, 'telefone', $telefone, true);
		if(!empty($facebook)){
		add_post_meta($ID, 'facebook', $facebook, true);
		}
		add_post_meta($ID, 'ano', $ano, true);
		add_post_meta($ID, 'terminou_o_ensino_medio', $ensinomedio, true);
endif;
echo "sucess";

 ?>