<? header('Content-Encoding: UTF-8'); 
header("Content-type: application/vnd.ms-excel; charset=UTF-8");   
header("Content-type: application/force-download");  
header("Content-Disposition: attachment; filename=lista.xls");
header("Pragma: no-cache");
$path = "../../../..";
define('WP_USE_THEMES', false);
require($path .'/wp-load.php');
global $wpdb;
		$query_args = array( 'posts_per_page' => 1,'post_type' => 'testedehabilidades');
		$query = new WP_Query($query_args);
		while ( $query->have_posts() ) : $query->the_post();
			$title = get_the_title();
		endwhile;
		wp_reset_postdata(); 
		
$html = "<table width='800' style='text-align:center;' bordercolor='#f0f0f0' border='1'>
   <tr>
      <th style='background-color:#999; color:#f0f0f0; text-align:center; font-size:30px;' height='40' colspan='7'>".utf8_decode ("TESTE DE HABILIDADES")."</th>
   </tr>
   <tr>
      <th style='background-color:#f0f0f0; color:#999; text-align:center;' height='30'>Nome</th>
	  <th style='background-color:#f0f0f0; color:#999; text-align:center;'>Data</th>
      <th style='background-color:#f0f0f0; color:#999; text-align:center;'>E-mail</th>
	  <th style='background-color:#f0f0f0; color:#999; text-align:center;'>Telefone</th>
	  <th style='background-color:#f0f0f0; color:#999; text-align:center;'>".utf8_decode ("Terminou o Ensino Médio?")."</th>
	  <th style='background-color:#f0f0f0; color:#999; text-align:center;'>Ano</th>
	  <th style='background-color:#f0f0f0; color:#999; text-align:center;'>Resultado</th>
   </tr>
";
$query_args = array( 'posts_per_page' => -1,'post_type' => 'testedehabilidades');
$query = new WP_Query($query_args);
while ( $query->have_posts() ) : $query->the_post();

$html .= "<tr><td style='color:#666; text-align:center;' >".get_the_date('d/m/Y H:i')."</td><td style='color:#666; text-align:center;' >".utf8_decode(get_the_title())."</td><td style='color:#666; text-align:center;' >".get_field("email")."</td><td style='color:#666; text-align:center;' >".get_field("telefone")."</td><td style='color:#666; text-align:center;' >".get_field("terminou_o_ensino_medio")."</td><td style='color:#666; text-align:center;' >".get_field("ano")."</td><td style='color:#666; text-align:center;' >".utf8_decode(get_field("teste"))."</td></tr>";
                              
endwhile;
$html .= "</table>";
wp_reset_postdata(); 
/*QUERY*/
?>
<?php
   echo $html;
?>

