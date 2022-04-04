<?
$path = "../../../..";
define('WP_USE_THEMES', false);
require($path .'/wp-load.php');
$email = @$_POST['email'];
$resultados = @$_POST['resultado'];

$query_args = array( 'posts_per_page' => 1,'post_type' => 'testedehabilidades','meta_query' => array(
		array(
		'key' => 'email', 
		'value' => $email, 
		'compare' => '='
		)
));
$query = new WP_Query($query_args);
if($query->found_posts > 0):	
while ( $query->have_posts() ) : $query->the_post();
			$ID = get_the_ID();
			echo $resultados;
			$resultado = get_field("resultado");
			if(strlen($resultado) == 0){
				echo $ID;
				add_post_meta($ID, 'teste', $resultados, true);
			}
endwhile;
endif;
 ?>