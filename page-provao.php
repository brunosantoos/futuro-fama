<?php get_header(); ?>
<?php while ( have_posts() ) : the_post();  
?>
<div class="body provao">
    <!--BODY-->
    <div class="container">
    	<div class="cabecalho">
    		<div class="row">
                <div class="col-md-12 relative text-center">
                    <h1 class="page-title">Provão</h1>
                </div>
            </div>
            <div class="space"></div>
            
            <div class="row">

                <div class="box">
                    <?php the_field("texto_descricao"); ?>
                </div>
            </div>

            <div class="space"></div>

            <div class="row">
                <div class="col-md-12 relative text-center">
                    <img src="<?php the_field("cabecalho"); ?>" class="">
                </div>
            </div>

            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>
            <div class="space"></div>

            <div class="mais-resultados">
                <h4>Enquanto isso confira os resultados das edições anteriores...</h4>
            </div>

            <div class="space"></div>
            <div class="space"></div>

            <div class="row">
                <div class="col-md-6 text-right"><?php 
                $result_2015 = get_field("resultados_2015_pdf");
                $result_2016 = get_field("resultados_2016_pdf");
                ?>
                <a href="<?php echo get_permalink( get_page_by_path( 'provao-2016' ) ) ?>">
                    <img src="<?php the_field("banner_resultados_2016"); ?>" class="">
                </a>
            </div>
            <div class="col-md-6 text-left">
                <a href="<?php echo $result_2015['url']; ?>" target="_blank">
                    <img src="<?php the_field("banner_resultados_2015"); ?>" class="">
                </a>
            </div>

        </div>
    </div>

    <div class="space"></div>

</div>
<!--BODY-->
</div>
<?php endwhile; ?>
<?php get_footer(); ?>