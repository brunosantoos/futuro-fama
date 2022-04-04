<?php get_header(); ?>
<div class="body home">
    <!--BODY-->

    <div class="container">
        <div class="slider">
            <!--SLIDER-->
            <?php
            $query_args = array( 'posts_per_page' => -1,'post_type' => 'banner');
            $query = new WP_Query($query_args);
            while ( $query->have_posts() ) : $query->the_post();
            $image = get_field('imagem');
            ?>
            <a href="<?php the_field('link'); ?>"><img src="<?php imgCrop($image, 1000,536,1); ?>"></a>
            <?php 
            endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <span class="arrow arrow-go fadehover hover"></span>
            <span class="arrow arrow-back flip fadehover hover"></span>
            <div id="contDot"></div>
            <!--SLIDER-->
        </div>
    </div>
    <section id="naofiquenaduvida">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/nfnd_titulo.png" class="img-responsive" />
                    <div class="texto">
                        <p>A Fama sabe que escolher uma profissão não é nada fácil. Por isso, elaborou vários conteúdos direcionados às profissões ideias do seu estilo e que mais combinam com você.</p>
                    </div>
                    <ul>
                        <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icone01.png"><br />Aulão Enem</a></li>
                        <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icone02.png"><br />Blog Future-se</a></li>
                        <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icone03.png"><br />Dicas p/ prova</a></li>
                        <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icone04.png"><br />Guia de profissões</a></li>
                        <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icone05.png"><br />Feira das profissões</a></li>
                        <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icone06.png"><br />Qual curso escolher?</a></li>
                    </ul>
                </div>
                <div class="col-md-4 imagem">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/casal.png" />
                </div>
            </div>
        </div>
    </section>
    <section id="seliganoenem">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="titulo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/slne_titulo.png" />
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="conteudo">
                        <div class="texto">
                            <p>O Enem é a principal forma de ingresso no ensino superior no Brasil e teve, só em 2016, mais de 8 milhões de alunos inscritos.</p>
                            <a href="">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--BODY-->
</div>
<?php get_footer(); ?>
