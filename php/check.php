<?
$path = "../../../..";
define('WP_USE_THEMES', false);
require($path .'/wp-load.php');
$facebook = @$_POST['facebook'];

$query_args = array( 'posts_per_page' => 1,'post_type' => 'testedehabilidades','meta_query' => array(
		array(
		'key' => 'facebook', 
		'value' => $facebook, 
		'compare' => '='
		)
));
$query = new WP_Query($query_args);
if($query->found_posts > 0):	
echo "has";
endif;
 ?>