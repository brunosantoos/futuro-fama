<?php 
$query_args = array('page_id' => 4);
$query = new WP_Query($query_args);
while ( $query->have_posts() ) : $query->the_post();
$analytics = get_field('analytics');
endwhile;
wp_reset_postdata();
?>
<footer>
	<div class="container">
		<div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="row">
                    <div class="col-md-4">
                        <h3>Menu</h3>
                        <ul>
                            <li><a href="<?php echo get_page_link(2649); ?>" class="fadehover">Blog</a></li>
                            <li><a href="<?php echo get_page_link(48); ?>" class="fadehover">Enem</a></li>
                            <li><a href="<?php echo get_page_link(84); ?>" class="fadehover">Teste</a></li>
                            <li><a href="<?php echo get_post_type_archive_link('profissoes'); ?>" class="fadehover">Seu Guia</a></li>
                            <li><a href="<?php echo get_page_link(37); ?>" class="fadehover">Feira das Profissões</a></li>
                            <li><a href="<?php echo get_page_link(77); ?>" class="fadehover">Estude na Fama</a></li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <h3>Contatos</h3>
                        <ul>
                            <li class="icon icon-mail">futurofama@faculdadefama.edu.br</li>
                            <li class="icon icon-site"><a href="http://www.faculdadefama.edu.br" target="_blank">www.faculdadefama.edu.br</a></li>
                            <li class="icon icon-endereco">Av Fernando Costa, nº49, Vila Jaiara, Anápolis-GO</li>
                            <li class="icon icon-fone">Fone: (62) 3310-0000</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="box-logo">
                    <a href="http://www.faculdadefama.edu.br" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/fama_logo.png"  class="img-responsive"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--ALL CONTENT-->
</div>
<?php
echo $analytics;
wp_footer(); 
?>
</body>
</html>