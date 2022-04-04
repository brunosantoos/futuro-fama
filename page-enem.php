<?php get_header(); ?>
<?php while ( have_posts() ) : the_post();  
$layout = get_field("layout");
$participe = get_field("participe");
?>
<div class="modal fade calendario-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <img src="<?php echo get_template_directory_uri(); ?>/img/title-calendario.png" class="responsive">
     </div>
     <div class="modal-body">
         <?php while ( have_rows('calendario') ) : the_row(); 
         $date = DateTime::createFromFormat('Ymd', get_sub_field('data'));
         ?>
         <div class="calendario"><span style="background-color:<?php the_sub_field("cor"); ?>;"><?php echo $date->format('d/m'); ?></span><?php the_sub_field("escola"); ?></div>
     <?php endwhile; ?>
 </div>
</div>
</div>
</div>
<div class="modal fade gabarito-modal" tabindex="-1" role="dialog" id="gabarito">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <div class="title">RESULTADOS</div>
     </div>
     <div class="modal-body">
         <?php while ( have_rows('gabaritos') ) : the_row(); ?>
         <div class="gabarito"><?php the_sub_field("nome"); ?><a href="<?php the_sub_field("arquivo"); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/pdf.png">Fazer Download</a></div>
     <?php endwhile; ?>

 </div>
</div>
</div>
</div>
<div class="body enem">
    <!--BODY-->
    <div class="container">
    	<div class="cabecalho">
    		<div class="row">
                <div class="col-md-12 relative text-center title">
                    <h1 class="page-title">Enem</h1>
                </div>
            </div>
            <div class="links">
                <a href="<?php echo get_page_link(57); ?>" class="fadehover">A importância do Enem</a>
                <a href="<?php echo get_page_link(59); ?>" class="fadehover">Dicas Enem</a>
                <a href="<?php echo get_page_link(61); ?>" class="fadehover">Provas Anteriores</a>
            </div>
        </div>
        <div class="space"></div>
        <div class="text-center">
           <p class="text-center abas">
            <a href="<?php echo get_permalink( get_page_by_path( 'provao' ) ) ?>" class="active"><img src="<?php the_field("banner_provao"); ?>" class="responsive"></a>
            <img src="<?php the_field("banner_resultados"); ?>" class="responsive hover fadehover" data-toggle="modal" data-target="#gabarito">
        </p>
    </div>
    <div class="space"></div>
    <div class="space"></div>




    <div class="row">

      <div class="box">
       <?php the_field("provao_01"); ?>
   </div>


</div>






<div class="space"></div>
<div class="space"></div>
</div>
<!--BODY-->
</div>
<?php endwhile; ?>
<?php get_footer(); ?>