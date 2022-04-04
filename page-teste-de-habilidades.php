<?php get_header(); ?>
<?php while ( have_posts() ) : the_post();  ?>
    <div class="body home-quiz">
        <!--BODY-->
        <div class="container">
            <div class="cabecalho">
                <div class="row">
                    <div class="col-md-12 relative text-center title">
                        <h1 class="page-title">Teste de Habilidades</h1>
                    </div>
                </div>
            </div>
            <div class="row">
             <div class="col-lg-4 col-md-5 relative">
                 <div class="txt">
                    <b>A Fama sabe que escolher uma profissão não é nada fácil.</b>
                    <div class="padding"></div>
                    Por isso, elaborou um teste rapidinho com perguntas sobre o seu estilo de vida, que direcionam para as profissões que mais combinam com você. 
                    <a href="<?php echo get_page_link(87); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/button.png" class="fadehover btn responsive"></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 relative">
             <img src="<?php echo get_template_directory_uri(); ?>/img/teste_de_habilidade.png" class="responsive draw">
         </div>
     </div>
     <div class="space"></div>
     * Este é um questionário que busca orientá-lo na escolha da sua futura profissão. Quanto mais sincero você for em suas respostas maior a probabilidade de um direcionamento correto para a profissão que mais atende às suas características pessoais. Este teste não é validado científicamente. 
     <br><br>
     Criado e revisado pela Professora Titular da Faculdade Fama Eliangela Silva.
 </div>
 <!--BODY-->
</div>
<?php endwhile; ?>
<?php get_footer(); ?>