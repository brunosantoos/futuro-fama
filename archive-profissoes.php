<?php get_header(); ?>
<div class="body guia-das-profissoes">
    <!--BODY-->
    <div class="container">
        <div class="cabecalho">
            <div class="row">
                <div class="col-md-12 relative text-center title">
                    <h1 class="page-title">Guia de Profissões</h1>
                </div>
            </div>
        </div>
        <div class="row">
         <div class="col-md-4 relative">
             <div class="menus">
               <?php
               $i = 0;
               $query_args = array( 'posts_per_page' => -1,'post_type' => 'profissoes');
               $query = new WP_Query($query_args);
               while ( $query->have_posts() ) : $query->the_post();
               ?>
               <a href="<?php the_permalink(); ?>" class="<?php if($i == 0){ echo "active"; }?>"><?php the_title(); ?></a><br>
               <?php $i++; endwhile; ?>
               <?php wp_reset_postdata(); ?>
           </div>
       </div>
       <?php
       $query_args = array( 'posts_per_page' => 1,'post_type' => 'profissoes');
       $query = new WP_Query($query_args);
       while ( $query->have_posts() ) : $query->the_post();
       $image = get_field('imagem');
       ?>
       <div class="col-md-8 relative">
         <div class="box">
             <h1><?php the_title(); ?></h1>
             <div class="space"></div>
             <div class="big">
                 <?php the_field("destaque"); ?>
             </div>
             <div class="space"></div>               
             <?php the_field("Texto"); ?><br><br>
             <b>Duração: <?php the_field("duração"); ?></b><br>
             <b>Salário: <?php the_field("salario"); ?></b>
             <div class="space"></div> 
             <?php the_field("fonte"); ?>     
             
         </div>
         <div class="space"></div>
         <div class="space"></div>
         <div class="space"></div>
         <div class="box relative">
             <div class="img">
                 <img src="<?php imgCrop($image, 400,400,1); ?>">
             </div>
             <h2>Perfil</h2>
             <div class="space"></div>
             <div class="profile">
                <img src="<?php echo get_template_directory_uri(); ?>/img/profile.png">
                <b>NOME:</b> <?php the_field("nome"); ?><br>
                <b>FORMAÇÃO:</b> <?php the_field("formação"); ?><br>
                <b>CARGO ATUAL / EMPRESA:</b> <?php the_field("cargo"); ?>
            </div>
            <div class="space"></div>
            <div class="big">Quais as principais atividades de um profissional formado em sua área?</div>
            <?php the_field("quest_01"); ?>
            <br><br>
            <div class="big">Quais os maiores desafios para os profissionais dessa área?</div>
            <?php the_field("quest_02"); ?>
            <br><br>
            <div class="big">Quais as oportunidades de mercado que esta área oferece?</div>
            <?php the_field("quest_03"); ?>
            <br><br>
            <div class="big">Quais as principais características (perfil) dos profissionais da área?</div>
            <?php the_field("quest_04"); ?>
            <br><br>
            <div class="big">O que você diria para aqueles que tem interesse em ingressar na área?</div>
            <?php the_field("quest_05"); ?>
        </div>
    </div>
<?php endwhile; ?>

</div>
</div>
<div class="space"></div>
<div class="space"></div>
<!--BODY-->
</div>
<?php get_footer(); ?>