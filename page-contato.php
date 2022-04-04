<?php get_header(); ?>
<div class="body contato">
<!--BODY-->
	<div class="container">
    	
        <div class="cabecalho text-center">
            <div class="row">
                <div class="col-md-12 relative text-center title">
                    <h1 class="page-title">Contato</h1>
                </div>
            </div>
            <p>Queremos fazer o Projeto Futuro Fama cada vez maior e melhor pra você. </p>
        </div>
        <div class="text-center text">
        	Tem alguma dúvida, sugestão ou consideração sobre o projeto e suas ações? Fale com a gente, dê sua opinião e faça a diferença!
        </div>
        <div class="form">
        	<form id="form" name="form" action="<?php echo get_template_directory_uri(); ?>/submit.php">
        	<div class="row">
        		<div class="col-md-4 col-sm-4 text-right">
                Nome
                </div>
                <div class="col-md-8 col-sm-8">
                <input class="field required" type="text" name="nome" value="" label="Nome">
                </div>
        		<div class="col-md-4 col-sm-4 text-right">
                Email
                </div>
                <div class="col-md-8 col-sm-8">
                <input class="field required fieldemail" type="text" name="email" value="" label="E-mail">
                </div>
        		<div class="col-md-4 col-sm-4 text-right">
                Telefone
                </div>
                <div class="col-md-8 col-sm-8">
                <input class="field required" type="text" onkeypress="MascaraTelefone(this);" name="telefone" value="" label="Telefone">
                </div>
        		<div class="col-md-4 col-sm-4 text-right">
                Mensagem
                </div>
                <div class="col-md-8 col-sm-8">
                <textarea class="field required" name="mensagem" label="Mensagem"></textarea>
                </div>
        	</div>
            <div class="text-right">
            	<button type="button" class="button" onClick="SubmitForm('#form')">Enviar</button>
            </div>
             <div class="loader text-right"><i class="fa fa-spinner fa-spin"></i></div>
            </form>

            
        </div>
    </div>
<!--BODY-->
</div>
<?php get_footer(); ?>
