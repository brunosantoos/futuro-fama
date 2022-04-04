<?php get_header(); ?>
<?php while ( have_posts() ) : the_post();  
?>
<div class="body provao">
    <!--BODY-->
    <div class="container">
        <div class="cabecalho">
            <div class="row">
                <div class="col-md-12 relative text-center">
                    <!-- <img src="<?php the_field("cabecalho"); ?>" class="responsive"> -->
                    <h1 class="page-title">Provão 2016</h1>
                </div>

            </div>
            <div class="space"></div>
        </div>
        <div class="space"></div>
        <div class="text-center">
            <p class="text-center abas">
                <a href="<?php echo get_permalink( get_page_by_path( 'provao' ) ) ?>" class="active"><img src="<?php the_field("banner_provao"); ?>" class="responsive"></a>
                <a href="<?php echo get_post_type_archive_link("resultados"); ?>"><img src="<?php the_field("banner_resultados"); ?>" class="responsive"></a>
            </p>
        </div>
        <div class="space"></div>

        <div class="row">
            <div class="col-lg-16">
                <img src="<?php the_field("resultados_top5"); ?>" class="responsive">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <img src="<?php the_field("resultados"); ?>" class="responsive">
                <table cellspacing="10" cellpadding="10">

                    <?php
                    while ( have_rows('resultados_arquivos') ) : the_row(); 
                    ?>
                    <tr>
                        <td class="text-left" style="padding-left:20px;"><?php the_sub_field("nome");?></td>
                        <td width="300"><a class="btn-download" href="<?php the_sub_field("arquivo");?>" target="_blank">BAIXAR ARQUIVO</a></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>


    <div class="space"></div>
    <div class="space"></div>
</div>
<!--BODY-->
</div>
<?php endwhile; ?>
<?php get_footer(); ?>