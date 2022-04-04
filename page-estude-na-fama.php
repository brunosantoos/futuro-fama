<?php get_header(); ?>
<?php while ( have_posts() ) : the_post();  ?>
    <div class="body estude-na-fama">
        <!--BODY-->
        <div class="container">

            <div class="cabecalho">
                <div class="row">
                    <div class="col-md-12 relative text-center title">
                        <h1 class="page-title">Estude na Fama</h1>
                    </div>
                </div>
            </div>

            <div class="box box-fama">
                <div class="row">
                    <div class="col-md-8">
                        <?php the_field("cabeçalho"); ?>
                        <div class="space"></div>
                        <?php the_field("texto"); ?>
                        <div class="space"></div>
                    </div>
                    <div class="col-md-4 relative slider-first">
                        <?php $images = get_field('galeria'); 
                        if( $images ): foreach( $images as $image ):?>
                        <img src="<?php imgCrop($image['url'],400,250,1); ?>">
                    <?php endforeach; endif;?>
                </div>
            </div>
        </div>
        <div class="space"></div>
        <div class="text">
        	<div class="row">
        		<div class="col-md-5 relative slider-second">
                    <?php $images = get_field('galeria2'); 
                    if( $images ): foreach( $images as $image ):?>
                    <img src="<?php imgCrop($image['url'],400,250,1); ?>">
                <?php endforeach; endif;?>
            </div>
            <div class="col-md-7">
                <div class="space"></div>
                <?php the_field("texto02"); ?>
            </div>
        </div>
    </div>
    <div class="space"></div>
    <div class="space"></div>
    <div class="box box-inscreva">
       <div class="row">
           <div class="col-md-2">
           </div>
           <div class="col-md-10 relative">
            <a href="<?php the_field("link"); ?>" target="_blank" class="btn-inscreva">
               <?php the_field("inscreva-se"); ?>
           </a>
           <div class="space"></div>
           <?php the_field("incrições"); ?>
           <div class="space"></div>
       </div>
   </div>
</div>
</div>
<!--BODY-->
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
