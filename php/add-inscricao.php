<?
$path = "../../../..";
define('WP_USE_THEMES', false);
require($path .'/wp-load.php');

$nome = @$_POST['nome'];
$email = @$_POST['email'];
$telefone = @$_POST['telefone'];
$celular = @$_POST['celular'];
$colegio = @$_POST['colegio'];
$outros = @$_POST['outros'];
$cidade = @$_POST['cidade'];
$nascimento = @$_POST['nascimento'];
$ano = @$_POST['ano'];
$today_date = new DateTime("now");
$today = date_format($today_date, 'Y-m-d H:i:s');

$query_args = array( 'posts_per_page' => 1,'post_type' => 'inscricoes','meta_query' => array(
		array(
		'key' => 'email', 
		'value' => $email, 
		'compare' => '='
		)
));
$query = new WP_Query($query_args);
if($query->found_posts == 0):	
		$post = array(
  		'post_title'     => $nome,
  		'post_status'    => 'publish',
  		'post_type'      => 'inscricoes',
  		'post_date'      => $today,
  		'post_date_gmt'  => $today,
		);
		$ID = wp_insert_post($post);
		add_post_meta($ID, 'email', $email, true);
		add_post_meta($ID, 'telefone', $telefone, true);
		add_post_meta($ID, 'celular', $celular, true);
		if(!empty($colegio) && $colegio != "Outros"){
		add_post_meta($ID, 'colegio', $colegio, true);
		}else{
		add_post_meta($ID, 'colegio', $outros, true);	
		}
		add_post_meta($ID, 'ano', $ano, true);
		add_post_meta($ID, 'cidade', $cidade, true);
		add_post_meta($ID, 'nascimento', $nascimento, true);
		echo "sucess";
else:
echo "has";
endif;

 ?>