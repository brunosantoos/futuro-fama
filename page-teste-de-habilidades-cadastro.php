<?php get_header(); ?>
<?php while ( have_posts() ) : the_post();  
$urli = get_template_directory_uri();
$url = get_site_url();
?>
<?php include"includes/facebook.php"; ?>
<div class="body cadastro-quiz" url="<?php echo $url; ?>" urli="<?php echo $urli; ?>">
    <!--BODY-->
    <div class="container relative">

        <div class="cabecalho">
            <div class="row">
                <div class="col-md-12 relative text-center title">
                    <h1 class="page-title">Teste de Habilidades</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-5 relative">
                <div class="text-left">
                    Vamos lá?
                    <div class="space"></div>
                    <div class="space"></div>
                    <div class="text-left">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/teste_de_habilidade.png" class="responsive">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 relative">
                <div class="box">
                    <div class="loader"><i class="fa fa-spinner fa-spin"></i></div>
                    <div class="row">
                        <form id="form" name="form" action="<?php echo get_template_directory_uri(); ?>/php/add.php">
                            <div class="col-md-2 text-right"></div>
                            <div class="col-md-10">
                                <div class="wellcome">
                                    Bem-vindo !
                                    <div class="line"></div>
                                </div>
                                <div class="login">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/btn-facebook.png" class="fadehover hover responsive" id="facebook_login" onClick="getStatus();">
                                    <div class="space"></div>
                                    <div class="line"></div>
                                </div>
                                <div class="space"></div>
                                <div class="space"></div>
                            </div>
                            <div class="col-md-3 text-right">
                                Nome
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="field required" id="nome" name="nome" value="" label="Nome">
                            </div>
                            <div class="col-md-3 text-right">
                                Email
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="field required" id="email" name="email" value="" label="E-mail">
                            </div>
                            <div class="col-md-3 text-right">
                                Telefone
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="field required" name="telefone" value="" label="Telefone" onkeyup="mascara( this, mtel );" maxlength="15">
                            </div>
                            <div class="col-md-3 col-sm-4 text-right">
                                Terminou o Ensino Médio?
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <input type="radio" class="field required" name="ensino" id="ensino01" value="sim"  /><label for="ensino01">Sim</label>
                                <input type="radio" class="field required" name="ensino" id="ensino02" value="nao" /><label for="ensino02">Não</label>
                                <select name="ano" class="field required" id="ano" label="Ano">
                                    <option value="0" selected>Ano</option>
                                    <option>Antes de 2010</option>
                                    <?php for($i = 2010; $i < 2017; $i++){ ?>
                                    <option><?php echo $i; ?></option>
                                    <?php } ?>
                                    <option>Após 2016</option>
                                </select>
                            </div>
                            <input type="hidden" id="facebook" name="facebook" value="">
                        </form>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/btn-prosseguir.png" class="fadehover hover responsive btn-prosseguir" onClick="SubmitCadastro();">
                </div>
            </div>
        </div>
        <div class="space"></div>
        <div class="row">
            <div class="col-md-12 credits">
                * Este é um questionário que busca orientá-lo na escolha da sua futura profissão. Quanto mais sincero você for em suas respostas maior a probabilidade de um direcionamento correto para a profissão que mais atende às suas características pessoais. Este teste não é validado científicamente. 
                <br><br>
                Criado e revisado pela Professora Titular da Faculdade Fama Eliangela Silva.
            </div>
        </div>
    </div>
    <!--BODY-->
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
