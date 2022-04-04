<?php get_header(); ?>
<?php while ( have_posts() ) : the_post();  ?>
    <div class="modal fade inscricao-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    INSCREVA-SE
                </div>
                <div class="modal-body">
                    <div class="result text-center relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/inscricao-sucess.png" class="responsive">
                    </div>
                    <div class="form relative">
                        <form id="form" name="form" action="<?php echo get_template_directory_uri(); ?>/php/add-inscricao.php">
                            <div class="loader">
                                <i class="fa fa-spinner fa-spin"></i>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 text-right">
                                    Nome Completo
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
                                <div class="col-md-6 col-sm-5 text-right">
                                    Data de Nascimento
                                </div>
                                <div class="col-md-6 col-sm-7">
                                    <input class="field required" type="text" onkeypress="MascaraNascimento(this);" maxlength="10" name="nascimento" placeholder="dd/mm/aa" value="" label="Data de Nascimento">
                                </div>
                                <div class="col-md-4 col-sm-4 text-right">
                                    Telefone fixo
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <input class="field required" onkeypress="MascaraTelefone(this);" type="text" name="telefone" value="" label="Telefone Fixo">
                                </div>
                                <div class="col-md-4 col-sm-4 text-right">
                                    Telefone Celular
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <input class="field required" type="text" onkeypress="MascaraTelefone(this);" name="celular" value="" label="Telefone Celular">
                                </div>
                                <div class="col-md-6 col-sm-5 text-right">
                                    Quando vai concluir <br>o Ensino Médio?
                                </div>
                                <div class="col-md-6 col-sm-7">
                                    <select name="ano" class="field required" id="ano" label="Ano">
                                        <option value="0" selected>Ano</option>
                                        <option>Antes de 2010</option>
                                        <?php for($i = 2010; $i < 2017; $i++){ ?>
                                        <option><?php echo $i; ?></option>
                                        <?php } ?>
                                        <option>Após 2016</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-4 text-right">
                                    Colégio
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <select name="colegio" class="field" id="colegio" label="Colegio">
                                        <option value="0" selected>Selecione</option>
                                        <?php
                                        $query_args = array('page_id' => 29);
                                        $query = new WP_Query($query_args);
                                        while ( $query->have_posts() ) : $query->the_post();
                                        while ( have_rows('datas') ) : the_row(); 
                                        ?>
                                        <option><?php the_sub_field('escola'); ?></option>
                                        <?php
                                        endwhile;
                                        endwhile;
                                        wp_reset_postdata();
                                        ?>				<option>Outros</option>
                                    </select>
                                    <input class="field" type="text" placeholder="Informe o nome do colégio" name="outros" id="outros" value="" label="Colegio">
                                </div>
                                <div class="col-md-4 col-sm-4 text-right">
                                    Cidade
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <select class="field required" type="text" id="cidade" name="cidade" value="" label="Cidade">
                                        <option value="0" selected>Selecione</option>
                                        <option>Abadia de Goiás</option>
                                        <option>Abadiânia</option>
                                        <option>Acreúna</option>
                                        <option>Adelândia</option>
                                        <option>Água Fria de Goiás</option>
                                        <option>Água Limpa</option>
                                        <option>Águas Lindas de Goiás</option>
                                        <option>Alexânia</option>
                                        <option>Aloândia</option>
                                        <option>Alto Horizonte</option>
                                        <option>Alto Paraíso de Goiás</option>
                                        <option>Alvorada do Norte</option>
                                        <option>Amaralina</option>
                                        <option>Americano do Brasil</option>
                                        <option>Amorinópolis</option>
                                        <option>Anápolis</option>
                                        <option>Anhanguera</option>
                                        <option>Anicuns</option>
                                        <option>Aparecida de Goiânia</option>
                                        <option>Aparecida do Rio Doce</option>
                                        <option>Aporé</option>
                                        <option>Araçu</option>
                                        <option>Aragarças</option>
                                        <option>Aragoiânia</option>
                                        <option>Araguapaz</option>
                                        <option>Arenópolis</option>
                                        <option>Aruanã</option>
                                        <option>Aurilândia</option>
                                        <option>Avelinópolis</option>
                                        <option>Baliza</option>
                                        <option>Barro Alto</option>
                                        <option>Bela Vista de Goiás</option>
                                        <option>Bom Jardim de Goiás</option>
                                        <option>Bom Jesus de Goiás</option>
                                        <option>Bonfinópolis</option>
                                        <option>Bonópolis</option>
                                        <option>Brazabrantes</option>
                                        <option>Britânia</option>
                                        <option>Buriti Alegre</option>
                                        <option>Buriti de Goiás</option>
                                        <option>Buritinópolis</option>
                                        <option>Cabeceiras</option>
                                        <option>Cachoeira Alta</option>
                                        <option>Cachoeira de Goiás</option>
                                        <option>Cachoeira Dourada</option>
                                        <option>Caçu</option>
                                        <option>Caiapônia</option>
                                        <option>Caldas Novas</option>
                                        <option>Caldazinha</option>
                                        <option>Campestre de Goiás</option>
                                        <option>Campinaçu</option>
                                        <option>Campinorte</option>
                                        <option>Campo Alegre de Goiás</option>
                                        <option>Campo Limpo de Goiás</option>
                                        <option>Campos Belos</option>
                                        <option>Campos Verdes</option>
                                        <option>Carmo do Rio Verde</option>
                                        <option>Castelândia</option>
                                        <option>Catalão</option>
                                        <option>Caturaí</option>
                                        <option>Cavalcante</option>
                                        <option>Ceres</option>
                                        <option>Cezarina</option>
                                        <option>Chapadão do Céu</option>
                                        <option>Cidade Ocidental</option>
                                        <option>Cocalzinho de Goiás</option>
                                        <option>Colinas do Sul</option>
                                        <option>Córrego do Ouro</option>
                                        <option>Corumbá de Goiás</option>
                                        <option>Corumbaíba</option>
                                        <option>Cristalina</option>
                                        <option>Cristianópolis</option>
                                        <option>Crixás</option>
                                        <option>Cromínia</option>
                                        <option>Cumari</option>
                                        <option>Damianópolis</option>
                                        <option>Damolândia</option>
                                        <option>Davinópolis</option>
                                        <option>Diorama</option>
                                        <option>Divinópolis de Goiás</option>
                                        <option>Doverlândia</option>
                                        <option>Edealina</option>
                                        <option>Edéia</option>
                                        <option>Estrela do Norte</option>
                                        <option>Faina</option>
                                        <option>Fazenda Nova</option>
                                        <option>Firminópolis</option>
                                        <option>Flores de Goiás</option>
                                        <option>Formosa</option>
                                        <option>Formoso</option>
                                        <option>Gameleira de Goiás</option>
                                        <option>Goianápolis</option>
                                        <option>Goiandira</option>
                                        <option>Goianésia</option>
                                        <option>Goianira</option>
                                        <option>Goiás</option>
                                        <option>Goiatuba</option>
                                        <option>Gouvelândia</option>
                                        <option>Guapó</option>
                                        <option>Guaraíta</option>
                                        <option>Guarani de Goiás</option>
                                        <option>Guarinos</option>
                                        <option>Heitoraí</option>
                                        <option>Hidrolândia</option>
                                        <option>Hidrolina</option>
                                        <option>Iaciara</option>
                                        <option>Inaciolândia</option>
                                        <option>Indiara</option>
                                        <option>Inhumas
                                        </option>
                                        <option>Ipameri
                                        </option>
                                        <option>Ipiranga de Goiás
                                        </option>
                                        <option>Iporá</option>
                                        <option>Israelândia</option>
                                        <option>Itaberaí</option>
                                        <option>Itaguari</option>
                                        <option>Itaguaru</option>
                                        <option>Itajá</option>
                                        <option>Itapaci</option>
                                        <option>Itapirapuã</option>
                                        <option>Itapuranga</option>
                                        <option>Itarumã</option>
                                        <option>Itauçu</option>
                                        <option>Itumbiara</option>
                                        <option>Ivolândia</option>
                                        <option>Jandaia</option>
                                        <option>Jaraguá</option>
                                        <option>Jataí</option>
                                        <option>Jaupaci</option>
                                        <option>Jesúpolis</option>
                                        <option>Joviânia</option>
                                        <option>Jussara</option>
                                        <option>Lagoa Santa</option>
                                        <option>Leopoldo de Bulhões</option>
                                        <option>Luziânia</option>
                                        <option>Mairipotaba</option>
                                        <option>Mambaí</option>
                                        <option>Mara Rosa</option>
                                        <option>Marzagão</option>
                                        <option>Matrinchã</option>
                                        <option>Maurilândia</option>
                                        <option>Mimoso de Goiás</option>
                                        <option>Minaçu</option>
                                        <option>Mineiros</option>
                                        <option>Moiporá</option>
                                        <option>Monte Alegre de Goiás</option>
                                        <option>Montes Claros de Goiás</option>
                                        <option>Montividiu</option>
                                        <option>Montividiu do Norte</option>
                                        <option>Morrinhos</option>
                                        <option>Morro Agudo de Goiás</option>
                                        <option>Mossâmedes</option>
                                        <option>Mozarlândia</option>
                                        <option>Mundo Novo</option>
                                        <option>Mutunópolis</option>
                                        <option>Nazário</option>
                                        <option>Nerópolis</option>
                                        <option>Niquelândia</option>
                                        <option>Nova América</option>
                                        <option>Nova Aurora</option>
                                        <option>Nova Crixás</option>
                                        <option>Nova Glória</option>
                                        <option>Nova Iguaçu de Goiás</option>
                                        <option>Nova Roma</option>
                                        <option>Nova Veneza</option>
                                        <option>Novo Brasil</option>
                                        <option>Novo Gama</option>
                                        <option>Novo Planalto</option>
                                        <option>Orizona</option>
                                        <option>Ouro Verde de Goiás</option>
                                        <option>Ouvidor</option>
                                        <option>Padre Bernardo</option>
                                        <option>Palestina de Goiás</option>
                                        <option>Palmeiras de Goiás</option>
                                        <option>Palmelo</option>
                                        <option>Palminópolis</option>
                                        <option>Panamá</option>
                                        <option>Paranaiguara</option>
                                        <option>Paraúna</option>
                                        <option>Perolândia</option>
                                        <option>Petrolina de Goiás</option>
                                        <option>Pilar de Goiás</option>
                                        <option>Piracanjuba</option>
                                        <option>Piranhas</option>
                                        <option>Pirenópolis</option>
                                        <option>Pires do Rio</option>
                                        <option>Planaltina</option>
                                        <option>Pontalina</option>
                                        <option>Porangatu</option>
                                        <option>Porteirão</option>
                                        <option>Portelândia</option>
                                        <option>Posse</option>
                                        <option>Professor Jamil</option>
                                        <option>Quirinópolis</option>
                                        <option>Rialma</option>
                                        <option>Rianápolis</option>
                                        <option>Rio Quente</option>
                                        <option>Rio Verde</option>
                                        <option>Rubiataba</option>
                                        <option>Sanclerlândia</option>
                                        <option>Santa Bárbara de Goiás</option>
                                        <option>Santa Cruz de Goiás</option>
                                        <option>Santa Fé de Goiás</option>
                                        <option>Santa Helena de Goiás</option>
                                        <option>Santa Isabel</option>
                                        <option>Santa Rita do Araguaia</option>
                                        <option>Santa Rita do Novo Destino</option>
                                        <option>Santa Rosa de Goiás</option>
                                        <option>Santa Tereza de Goiás</option>
                                        <option>Santa Terezinha de Goiás</option>
                                        <option>Santo Antônio da Barra</option>
                                        <option>Santo Antônio de Goiás</option>
                                        <option>Santo Antônio do Descoberto</option>
                                        <option>São Domingos</option>
                                        <option>São Francisco de Goiás</option>
                                        <option>São João d`Aliança</option>
                                        <option>São João da Paraúna</option>
                                        <option>São Luís de Montes Belos</option>
                                        <option>São Luíz do Norte</option>
                                        <option>São Miguel do Araguaia</option>
                                        <option>São Miguel do Passa Quatro</option>
                                        <option>São Patrício</option>
                                        <option>São Simão</option>
                                        <option>Senador Canedo</option>
                                        <option>Serranópolis</option>
                                        <option>Silvânia</option>
                                        <option>Simolândia</option>
                                        <option>Sítio d`Abadia</option>
                                        <option>Taquaral de Goiás</option>
                                        <option>Teresina de Goiás</option>
                                        <option>Terezópolis de Goiás</option>
                                        <option>Três Ranchos</option>
                                        <option>Trindade</option>
                                        <option>Trombas</option>
                                        <option>Turvânia</option>
                                        <option>Turvelândia</option>
                                        <option>Uirapuru</option>
                                        <option>Uruaçu</option>
                                        <option>Uruana</option>
                                        <option>Urutaí</option>
                                        <option>Valparaíso de Goiás</option>
                                        <option>Varjão</option>
                                        <option>Vianópolis</option>
                                        <option>Vicentinópolis</option>
                                        <option>Vila Boa</option>
                                        <option>Vila Propício</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/btn-finalizar.png" class="hover fadehover btn-inscrever" onClick="SubmitInscricao();"> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body feira-das-profissoes">
        <!--BODY-->
        <div class="container">
            <div class="cabecalho">
                <div class="row">
                    <div class="col-md-12 relative text-center title">
                        <h1 class="page-title">Feira de Profissões</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="text">
            <div class="row">
                <div class="col-md-4">
                    <?php the_field("texto"); ?>
<!--              <?php //if(get_field('habilitar') == true): ?>
    <img src="<?php the_field("botao"); ?>" class="responsive fadehover btn-clique" data-toggle="modal" data-target=".inscricao-modal"> -->
    <?php //endif; ?>

    <div class="space"></div>
    <div class="space"></div>
    <img src="<?php the_field("banner"); ?>" class="responsive">

    <div class="space"></div>
</div>
<div class="col-md-7 col-md-offset-1 relative">

    <div class="box-galeria-destaque relative">
        <div class="go fadehover"></div>
        <div class="back flip fadehover"></div>
        <div class="row">
            <div class="col-md-6 col-sm-7">
                <div class="space hidden-md hidden-lg hidden-sm"></div>
                <div class="space hidden-md hidden-lg hidden-sm"></div>
                <span>Veja o que aconteceu no ano passado...</span>
            </div>
        </div>
        <div class="nodes">
            <?php
            $query_args = array( 'posts_per_page' => -1,'post_type' => 'galeria_destaque');
            $query = new WP_Query($query_args);
            while ( $query->have_posts() ) : $query->the_post();
            $image = get_field('imagem');
            $tipo = get_field("tipo");
            ?>
            <a href="<?php if($tipo == "imagem"){ echo $image; }else{ the_field("video"); } ?>" <?php if($tipo == "video"){ ?> rel="wp-video-lightbox" <?php } ?> class="node <?php echo $tipo; ?>">
                <img src="<?php imgCrop($image, 400,250,1); ?>">
            </a>
        <?php endwhile; ?>
        <?PHP wp_reset_postdata(); ?>
    </div>
</div>

</div>


<div class="col-md-12">
    <div class="box-galeria relative">
        <div class="go fadehover"></div>
        <div class="back flip fadehover"></div>
        <div class="row">
            <div class="col-md-6 col-sm-5">
                <div class="title"><?php the_field("titulo_galeria","options"); ?></div>
            </div>
            <div class="col-md-6 col-sm-7">
                <div class="space hidden-md hidden-lg hidden-sm"></div>
                <div class="space hidden-md hidden-lg hidden-sm"></div>
                <span><?php the_field("subtitulo_galeria","options"); ?></span>
            </div>
        </div>
        <div class="space"></div>
        <div class="nodes">
            <?php
            $query_args = array( 'posts_per_page' => -1,'post_type' => 'galeria');
            $query = new WP_Query($query_args);
            while ( $query->have_posts() ) : $query->the_post();
            $image = get_field('imagem');
            $tipo = get_field("tipo");
            ?>
            <a href="<?php if($tipo == "imagem"){ echo $image; }else{ the_field("video"); } ?>" <?php if($tipo == "video"){ ?> rel="wp-video-lightbox" <?php } ?> class="node <?php echo $tipo; ?>">
                <img src="<?php imgCrop($image, 400,250,1); ?>">
            </a>
        <?php endwhile; ?>
        <?PHP wp_reset_postdata(); ?>
    </div>
</div>
</div>
</div>
</div>
<div class="space"></div>
<div class="space"></div>
</div>
<!--BODY-->
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
