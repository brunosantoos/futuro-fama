<?php get_header(); ?>
<?php while ( have_posts() ) : the_post();  
$url = get_site_url();
?>
<div class="body quiz" url="<?php echo $url; ?>">
<!--BODY-->
	<div class="container relative">
    	<div class="header">
             <img src="<?php echo get_template_directory_uri(); ?>/img/title-middle.png" class="titulo responsive">
             <img src="<?php echo get_template_directory_uri(); ?>/img/answer.png" class="answer responsive">
        </div>
        <div class="box">
        	<div class="row">
                <!--STEP-->
                <div class="first-steps">
                <div class="step primary">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>1</span> - Para mim, uma pessoa sente-se feliz profissionalmente quando:
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="step_1" id="step_1_0" value="exatas" /><label for="step_1_0">É reconhecida por algo que ela mesma desenvolveu.</label></li>
                        <li><input type="radio" name="step_1" id="step_1_1" value="humanas" /><label for="step_1_1">Segue a tradição profissional da família e obtêm sucesso.</label></li>
                        <li><input type="radio" name="step_1" id="step_1_2" value="saude" /><label for="step_1_2">É capaz de ajudar aos outros.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/1.png" class="responsive character">
        			</div>
                </div>
                <div class="step">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>2</span> - Quando posso escolher, prefiro estar com:
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="step_2" id="step_2_0" value="exatas" /><label for="step_2_0">Pessoas que possuem novidades para contar.</label></li>
                        <li><input type="radio" name="step_2" id="step_2_1" value="humanas" /><label for="step_2_1">Pessoas que gostam de viver bem.</label></li>
                        <li><input type="radio" name="step_2" id="step_2_2" value="saude" /><label for="step_2_2">Pessoas próximas, em quem confio.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/2.png" class="responsive character">
        			</div>
                </div>
                <div class="step primary">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>3</span> - Geralmente meus amigos me procuram quando:
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="step_3" id="step_3_0" value="exatas" /><label for="step_3_0">Precisam de uma orientação sobre algo que eles queiram comprar.</label></li>
                        <li><input type="radio" name="step_3" id="step_3_1" value="humanas" /><label for="step_3_1">Desejam desabafar sobre algo que aconteceu com eles.</label></li>
                        <li><input type="radio" name="step_3" id="step_3_2" value="saude" /><label for="step_3_2">Necessitam de uma opnião sobre temas pelos quais eu tenho interesse.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/3.png" class="responsive character">
        			</div>
                </div>
                <div class="step primary">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>4</span> - Quais assuntos geralmente te chama atenção?
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="step_4" id="step_4_0" value="exatas" /><label for="step_4_0">Tecnologia, Impacto ambiental e grandes construções.</label></li>
                        <li><input type="radio" name="step_4" id="step_4_1" value="humanas" /><label for="step_4_1">Política, economia e educação.</label></li>
                        <li><input type="radio" name="step_4" id="step_4_2" value="saude" /><label for="step_4_2">Descoberta de novas espécies, avanço no tratamento de doênças e cosméticos.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/4.png" class="responsive character">
        			</div>
                </div>
                <div class="step primary">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>5</span> - Quais das ações abaixo você desenvolve com um maior prazer?
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="step_5" id="step_5_0" value="exatas" /><label for="step_5_0">Aprender, pesquisar, calcular, criar.</label></li>
                        <li><input type="radio" name="step_5" id="step_5_1" value="humanas" /><label for="step_5_1">Organizar, debater, planejar, pensar.</label></li>
                        <li><input type="radio" name="step_5" id="step_5_2" value="saude" /><label for="step_5_2">Cuidar, exercitar, ensinar, analisar.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/5.png" class="responsive character">
        			</div>
                </div>
                <div class="step primary">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>6</span> - Prefiro que as pessoas se lembrem de mim por:
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="step_6" id="step_6_0" value="exatas" /><label for="step_6_0">Ser uma pessoa espontânea.</label></li>
                        <li><input type="radio" name="step_6" id="step_6_1" value="humanas" /><label for="step_6_1">Ser uma pessoa popular.</label></li>
                        <li><input type="radio" name="step_6" id="step_6_2" value="saude" /><label for="step_6_2">Ser uma pessoa prestativa.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/6.png" class="responsive character">
        			</div>
                </div>
                <div class="step">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>7</span> - Me sentiria mais confortável:
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="step_7" id="step_7_0" value="exatas" /><label for="step_7_0">Trabalhando em coisas  que poucas pessoas  conhecem.</label></li>
                        <li><input type="radio" name="step_7" id="step_7_1" value="humanas" /><label for="step_7_1">Organizando tarefas para grupos de pessoas realizarem.</label></li>
                        <li><input type="radio" name="step_7" id="step_7_2" value="saude" /><label for="step_7_2">Ajudando pessoas que possuam poucas condições.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/7.png" class="responsive character">
        			</div>
                </div>
                <div class="step">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>8</span> - Se me convidasse para montar uma empresa hoje, esta empresa seria:
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="step_8" id="step_8_0" value="exatas" /><label for="step_8_0">Uma empresa criativa onde eu pudesse arriscar e desenvolver novas ideias.</label></li>
                        <li><input type="radio" name="step_8" id="step_8_1" value="humanas" /><label for="step_8_1">Uma empresa direcionada as tendências atuais do mercado independentemente da área de atividade.</label></li>
                        <li><input type="radio" name="step_8" id="step_8_2" value="saude" /><label for="step_8_2">Uma empresa tradicional, com produtos ou serviços conservadores e de fácil comercialização.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/8.png" class="responsive character">
        			</div>
                </div>
                <div class="step">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>9</span> - Qual atividade voluntária você estaria disposto a exercer em troca de uma bolsa de estudos?
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="step_9" id="step_9_0" value="exatas" /><label for="step_9_0">Ajudaria em reformas de escolas públicas.</label></li>
                        <li><input type="radio" name="step_9" id="step_9_1" value="humanas" /><label for="step_9_1">Auxiliaria em um levantamento sobre as necessidades de uma comunidade e pensaria formas de atender às demandas.</label></li>
                        <li><input type="radio" name="step_9" id="step_9_2" value="saude" /><label for="step_9_2">Ajudaria na realização de um mutirão para a realização de exames e vacinas de crianças.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/9.png" class="responsive character">
        			</div>
                </div>
                <div class="step">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>10</span> - Em um final de semana com sol, você prefere?
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="step_10" id="step_10_0" value="exatas" /><label for="step_10_0">Ficar em casa e organizar o seu quarto.</label></li>
                        <li><input type="radio" name="step_10" id="step_10_1" value="humanas" /><label for="step_10_1">Sair com os amigos para ir ao cinema.</label></li>
                        <li><input type="radio" name="step_10" id="step_10_2" value="saude" /><label for="step_10_2">Passear no parque com seu animal de estimação.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/10.png" class="responsive character">
        			</div> 
                </div>
                </div>
                <div class="exatas">
                <!--
                	EXATAS -----------------------------------------------------------------------------------------------------------------------
                -->
				<div class="step">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>11</span> - No seu tempo livre, quando em casa, o que prefere fazer?
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="exatas_step_11" id="exatas_step_11_0" value="processosquimicos,processosquimicos,processosquimicos" /><label for="exatas_step_11_0">Descartar aquilo que não usa mais.</label></li>
                        <li><input type="radio" name="exatas_step_11" id="exatas_step_11_1" value="construcaodeedificios,construcaodeedificios,construcaodeedificios,anliseedesenvolvimentodesistemas,anliseedesenvolvimentodesistemas" /><label for="exatas_step_11_1">Organizar o quarto.</label></li>
                        <li><input type="radio" name="exatas_step_11" id="exatas_step_11_2" value="agronomia,agronomia,agronomia,engenhariaambiental,engenhariaambiental" /><label for="exatas_step_11_2">Cuidar do jardim e/ou quintal.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/exatas-11.png" class="responsive character">
        			</div>
                </div>
				<div class="step">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>12</span> - Dentre essas ações, a que você executa sem nenhuma dificuldade é:
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="exatas_step_12" id="exatas_step_12_0" value="anliseedesenvolvimentodesistemas,anliseedesenvolvimentodesistemas,anliseedesenvolvimentodesistemas" /><label for="exatas_step_12_0">Configurar um aplicativo no computador ou celular.</label></li>
                        <li><input type="radio" name="exatas_step_12" id="exatas_step_12_1" value="engenhariaambiental,engenhariaambiental,engenhariaambiental,construcaodeedificios,construcaodeedificios" /><label for="exatas_step_12_1">Reparar pequenos danos em aparelhos domésticos.</label></li>
                        <li><input type="radio" name="exatas_step_12" id="exatas_step_12_2" value="processosquimicos,processosquimicos,processosquimicos,agronomia,agronomia" /><label for="exatas_step_12_2">Escolher produtos com maior rendimento.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/exatas-12.png" class="responsive character">
        			</div>
                </div>
				<div class="step">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>13</span> - Se você pudesse passar quatro meses fazendo algo do seu interesse, o que você faria?
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="exatas_step_13" id="exatas_step_13_0" value="agronomia,agronomia,agronomia" /><label for="exatas_step_13_0">Iniciaria uma horta doméstica.</label></li>
                        <li><input type="radio" name="exatas_step_13" id="exatas_step_13_1" value="construcaodeedificios,construcaodeedificios,construcaodeedificios,engenhariaambiental,engenhariaambiental" /><label for="exatas_step_13_1">Me desafiaria a executar uma pequena reforma em casa.</label></li>
                        <li><input type="radio" name="exatas_step_13" id="exatas_step_13_2" value="processosquimicos,processosquimicos,processosquimicos,anliseedesenvolvimentodesistemas,anliseedesenvolvimentodesistemas" /><label for="exatas_step_13_2">Elaboraria um plano de coleta seletiva em meu bairro.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/exatas-13.png" class="responsive character">
        			</div>
                </div>
				<div class="step">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>14</span> - Me sinto incomodado com:
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="exatas_step_14" id="exatas_step_14_0" value="processosquimicos,processosquimicos,processosquimicos,engenhariaambiental,engenhariaambiental" /><label for="exatas_step_14_0">Excessos de embalagens descartadas no lixo.</label></li>
                        <li><input type="radio" name="exatas_step_14" id="exatas_step_14_1" value="agronomia,agronomia,agronomia" /><label for="exatas_step_14_1">Desperdício de comida.</label></li>
                        <li><input type="radio" name="exatas_step_14" id="exatas_step_14_2" value="anliseedesenvolvimentodesistemas,anliseedesenvolvimentodesistemas,anliseedesenvolvimentodesistemas,construcaodeedificios,construcaodeedificios" /><label for="exatas_step_14_2">Falta de planejamento de alguns produtos.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/exatas-14.png" class="responsive character">
        			</div>
                </div>
				<div class="step">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>15</span> - Pra mim, o sucesso da empresa está ligada intimamente com o potencial:
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="exatas_step_15" id="exatas_step_15_0" value="engenhariaambiental,engenhariaambiental,engenhariaambiental,construcaodeedificios,construcaodeedificios" /><label for="exatas_step_15_0">Do empreendimento, pois grandes projetos trazem grandes realizações.</label></li>
                        <li><input type="radio" name="exatas_step_15" id="exatas_step_15_1" value="processosquimicos,processosquimicos,processosquimicos,agronomia,agronomia" /><label for="exatas_step_15_1">Do produto a ser entregue ao cliente.</label></li>
                        <li><input type="radio" name="exatas_step_15" id="exatas_step_15_2" value="anliseedesenvolvimentodesistemas,anliseedesenvolvimentodesistemas,anliseedesenvolvimentodesistemas" /><label for="exatas_step_15_2">Da organização e dinâmica das pessoas envolvidas nos projetos.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/exatas-15.png" class="responsive character">
        			</div>
                </div> 
				<div class="step">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>16</span> - As pessoas costumam dizer que você possui qual habilidade?
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="exatas_step_16" id="exatas_step_16_0" value="engenhariaambiental,engenhariaambiental,engenhariaambiental,processosquimicos,processosquimicos" /><label for="exatas_step_16_0">Raciocínio rápido.</label></li>
                        <li><input type="radio" name="exatas_step_16" id="exatas_step_16_1" value="agronomia,agronomia,agronomia" /><label for="exatas_step_16_1">Buscar soluções práticas.</label></li>
                        <li><input type="radio" name="exatas_step_16" id="exatas_step_16_2" value="construcaodeedificios,construcaodeedificios,construcaodeedificios,anliseedesenvolvimentodesistemas,anliseedesenvolvimentodesistemas" /><label for="exatas_step_16_2">Ser criativo.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/exatas-16.png" class="responsive character">
        			</div>
                </div>
                <!--
                	EXATAS -----------------------------------------------------------------------------------------------------------------------
                -->
                </div>
 				<div class="humanas">
                <!--
                	HUMANAS -----------------------------------------------------------------------------------------------------------------------
                -->
				<div class="step">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>11</span> - No seu tempo livre, quando em casa, o que prefere fazer?
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="humanas_step_11" id="humanas_step_11_0" value="arquiteturaeurbanismo,arquiteturaeurbanismo,arquiteturaeurbanismo" /><label for="humanas_step_11_0">Organizar o quarto.</label></li>
                        <li><input type="radio" name="humanas_step_11" id="humanas_step_11_1" value="administracao,administracao,administracao,tecnologiaemrecursoshumanos" /><label for="humanas_step_11_1">Planejar as atividade de trabalho da próxima semana.</label></li>
                        <li><input type="radio" name="humanas_step_11" id="humanas_step_11_2" value="tecnologiaemgestaopublica,tecnologiaemgestaopublica,tecnologiaemgestaopublica,cienciascontabeis,cienciascontabeis,tecnologiaemtransporteterrestre" /><label for="humanas_step_11_2">Procurar notícias sobre a minha cidade.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/humanas-11.png" class="responsive character">
        			</div>
                </div>
				<div class="step">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>12</span> - Dentre essas ações, a que você executa sem nenhuma dificuldade é:
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="humanas_step_12" id="humanas_step_12_0" value="Administração,Administração,Administração,cienciascontabeis,cienciascontabeis" /><label for="humanas_step_12_0">Controlar os gastos do mês.</label></li>
                        <li><input type="radio" name="humanas_step_12" id="humanas_step_12_1" value="tecnologiaemrecursoshumanos,tecnologiaemrecursoshumanos,tecnologiaemrecursoshumanos" /><label for="humanas_step_12_1">Lidar com as pessoas de sua família.</label></li>
                        <li><input type="radio" name="humanas_step_12" id="humanas_step_12_2" value="tecnologiaemgestaopublica,tecnologiaemgestaopublica,tecnologiaemgestaopublica,tecnologiaemtransporteterrestre,tecnologiaemtransporteterrestre,arquiteturaeurbanismo" /><label for="humanas_step_12_2">Lidar com os vizinhos de sua rua.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/humanas-12.png" class="responsive character">
        			</div> 
                </div>
				<div class="step">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>13</span> - Se você pudesse passar quatro meses fazendo algo do seu interesse, o que você faria?
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="humanas_step_13" id="humanas_step_13_0" value="tecnologiaemgestaopublica,tecnologiaemgestaopublica,tecnologiaemgestaopublica" /><label for="humanas_step_13_0">Buscaria um estágio em orgão público.</label></li>
                        <li><input type="radio" name="humanas_step_13" id="humanas_step_13_1" value="arquiteturaeurbanismo,arquiteturaeurbanismo,arquiteturaeurbanismo,tecnologiaemtransporteterrestre,tecnologiaemtransporteterrestre,cienciascontabeis" /><label for="humanas_step_13_1">Visitaria locais afim de ficar próximo a natureza.</label></li>
                        <li><input type="radio" name="humanas_step_13" id="humanas_step_13_2" value="administracao,administracao,administracao,tecnologiaemrecursoshumanos,tecnologiaemrecursoshumanos" /><label for="humanas_step_13_2">Buscaria informações para abrir a sua própria empresa futuramente.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/humanas-13.png" class="responsive character">
        			</div>
                </div>
				<div class="step">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>14</span> - Me sinto icomodado com:
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="humanas_step_14" id="humanas_step_14_0" value="tecnologiaemtransporteterrestre,tecnologiaemtransporteterrestre,tecnologiaemtransporteterrestre,tecnologiaemgestaopublica,tecnologiaemgestaopublica,arquiteturaeurbanismo" /><label for="humanas_step_14_0">Trânsito demasiado cheio.</label></li>
                        <li><input type="radio" name="humanas_step_14" id="humanas_step_14_1" value="tecnologiaemrecursoshumanos,tecnologiaemrecursoshumanos,tecnologiaemrecursoshumanos" /><label for="humanas_step_14_1">Colegas de trabalho.</label></li>
                        <li><input type="radio" name="humanas_step_14" id="humanas_step_14_2" value="cienciascontabeis,cienciascontabeis,cienciascontabeis,administracao,administracao" /><label for="humanas_step_14_2">Despesas futuras.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/humanas-14.png" class="responsive character">
        			</div>
                </div>
				<div class="step">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>15</span> - Pra mim, o sucesso da empresa está ligada intimamente com o potencial:
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="humanas_step_15" id="humanas_step_15_0" value="administracao,administracao,administracao,cienciascontabeis,cienciascontabeis" /><label for="humanas_step_15_0">Do chefe.</label></li>
                        <li><input type="radio" name="humanas_step_15" id="humanas_step_15_1" value="tecnologiaemrecursoshumanos,tecnologiaemrecursoshumanos,tecnologiaemrecursoshumanos" /><label for="humanas_step_15_1">Dos funcionários.</label></li>
                        <li><input type="radio" name="humanas_step_15" id="humanas_step_15_2" value="arquiteturaeurbanismo,arquiteturaeurbanismo,arquiteturaeurbanismo,tecnologiaemtransporteterrestre,tecnologiaemtransporteterrestre,tecnologiaemgestaopublica" /><label for="humanas_step_15_2">De organização.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/humanas-15.png" class="responsive character">
        			</div>
                </div> 
				<div class="step">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>16</span> - As pessoas costumam dizer que você possui qual habilidade?
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="humanas_step_16" id="humanas_step_16_0" value="administracao,administracao,administracao,tecnologiaemgestaopublica,tecnologiaemgestaopublica" /><label for="humanas_step_16_0">Liderança.</label></li>
                        <li><input type="radio" name="humanas_step_16" id="humanas_step_16_1" value="cienciascontabeis,cienciascontabeis,cienciascontabeis,arquiteturaeurbanismo,arquiteturaeurbanismo,tecnologiaemtransporteterrestre" /><label for="humanas_step_16_1">Organização.</label></li>
                        <li><input type="radio" name="humanas_step_16" id="humanas_step_16_2" value="tecnologiaemrecursoshumanos,tecnologiaemrecursoshumanos,tecnologiaemrecursoshumanos" /><label for="humanas_step_16_2">Discrição.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/humanas-16.png" class="responsive character">
        			</div>
                </div>
                <!--
                	HUMANAS -----------------------------------------------------------------------------------------------------------------------
                -->
                </div>
			<div class="saude">
                <!--
                	SAUDE -----------------------------------------------------------------------------------------------------------------------
                -->
				<div class="step">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>11</span> - No seu tempo livre, quando em casa, o que prefere fazer?
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="saude_step_11" id="saude_step_11_0" value="esteticaecosmetica,esteticaecosmetica,esteticaecosmetica,farmacia,farmacia" /><label for="saude_step_11_0">Cuidar de sua aparência, afinal, não teve o tempo necessário durante a semana.</label></li>
                        <li><input type="radio" name="saude_step_11" id="saude_step_11_1" value="medicinaveterinaria,medicinaveterinaria,medicinaveterinaria,cienciasbiologicas,cienciasbiologicas" /><label for="saude_step_11_1">Dar uma atenção ao seu animal de estimação.</label></li>
                        <li><input type="radio" name="saude_step_11" id="saude_step_11_2" value="enfermagem,enfermagem,enfermagem" /><label for="saude_step_11_2">Procura fazer uma caminhada ou algum outro exercício.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/saude-11.png" class="responsive character">
        			</div>
                </div>
				<div class="step">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>12</span> - Dentre essas ações, a que você executa sem nenhuma dificuldade é:
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="saude_step_12" id="saude_step_12_0" value="enfermagem,enfermagem,enfermagem,farmacia,farmacia" /><label for="saude_step_12_0">Realizar um exame de sangue.</label></li>
                        <li><input type="radio" name="saude_step_12" id="saude_step_12_1" value="medicinaveterinaria,medicinaveterinaria,medicinaveterinaria,cienciasbiologicas,cienciasbiologicas" /><label for="saude_step_12_1">Cuidar de um jardim.</label></li>
                        <li><input type="radio" name="saude_step_12" id="saude_step_12_2" value="esteticaecosmetica,esteticaecosmetica,esteticaecosmetica" /><label for="saude_step_12_2">Vestir-se bem.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/saude-12.png" class="responsive character">
        			</div>
                </div>
				<div class="step">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>13</span> - Se você pudesse passar quatro meses fazendo algo do seu interesse, o que você faria?
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="saude_step_13" id="saude_step_13_0" value="medicinaveterinaria,medicinaveterinaria,medicinaveterinaria,cienciasbiologicas,cienciasbiologicas" /><label for="saude_step_13_0">Passaria uma temporada em um hotel fazenda.</label></li>
                        <li><input type="radio" name="saude_step_13" id="saude_step_13_1" value="enfermagem,enfermagem,enfermagem" /><label for="saude_step_13_1">Me ofereceria como voluntário para trabalhar em uma creche.</label></li>
                        <li><input type="radio" name="saude_step_13" id="saude_step_13_2" value="esteticaecosmetica,esteticaecosmetica,esteticaecosmetica,farmacia,farmacia" /><label for="saude_step_13_2">Aproveitaria para cuidar de meu corpo como gostaria.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/saude-13.png" class="responsive character">
        			</div>
                </div>
				<div class="step">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>14</span> - Me sinto icomodado com:
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="saude_step_14" id="saude_step_14_0" value="medicinaveterinaria,medicinaveterinaria,medicinaveterinaria,cienciasbiologicas,cienciasbiologicas" /><label for="saude_step_14_0">Maltrato de animais.</label></li>
                        <li><input type="radio" name="saude_step_14" id="saude_step_14_1" value="farmacia,farmacia,farmacia,enfermagem,enfermagem" /><label for="saude_step_14_1">Excesso de remédios que as pessoas consomem.</label></li>
                        <li><input type="radio" name="saude_step_14" id="saude_step_14_2" value="esteticaecosmetica,esteticaecosmetica,esteticaecosmetica" /><label for="saude_step_14_2">A excessiva busca pelo corpo ideal.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/saude-14.png" class="responsive character">
        			</div>
                </div>
				<div class="step">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>15</span> - Pra mim, o sucesso da empresa está ligada intimamente com o potencial:
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="saude_step_15" id="saude_step_15_0" value="esteticaecosmetica,esteticaecosmetica,esteticaecosmetica,farmacia,farmacia" /><label for="saude_step_15_0">De conquistar grandes quantidades de clientes.</label></li>
                        <li><input type="radio" name="saude_step_15" id="saude_step_15_1" value="enfermagem,enfermagem,enfermagem.medicinaveterinaria,medicinaveterinaria" /><label for="saude_step_15_1">De tomar decisões rápidas sobre pressão.</label></li>
                        <li><input type="radio" name="saude_step_15" id="saude_step_15_2" value="cienciasbiologicas,cienciasbiologicas,cienciasbiologicas" /><label for="saude_step_15_2">Observar todo o campo de atuação.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/saude-15.png" class="responsive character">
        			</div>
                </div> 
				<div class="step">
                	<div class="col-md-8 col-sm-8 relative">
        			<div class="question">
                    	<span>16</span> - As pessoas costumam dizer que você possui qual habilidade?
                    </div>
                    <div class="space"></div>
                    <ul>
            			<li><input type="radio" name="saude_step_16" id="saude_step_16_0" value="esteticaecosmetica,esteticaecosmetica,esteticaecosmetica,farmacia,farmacia" /><label for="saude_step_16_0">Ser discreto.</label></li>
                        <li><input type="radio" name="saude_step_16" id="saude_step_16_1" value="enfermagem,enfermagem,enfermagem" /><label for="saude_step_16_1">Ser prestativo.</label></li>
                        <li><input type="radio" name="saude_step_16" id="saude_step_16_2" value="medicinaveterinaria,medicinaveterinaria,medicinaveterinaria,cienciasbiologicas,cienciasbiologicas" /><label for="saude_step_16_2">Ser paciente.</label></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 relative">
        				<img src="<?php echo get_template_directory_uri(); ?>/results/saude-16.png" class="responsive character">
        			</div>
                </div>
                <!--
                	SAUDE -----------------------------------------------------------------------------------------------------------------------
                -->
                </div>
                <!--STEP-->
            	<div class="buttons">
                 	<img src="<?php echo get_template_directory_uri(); ?>/img/back_button.png" class="fadehover hover back">
                 	<img src="<?php echo get_template_directory_uri(); ?>/img/go_button.png" class="fadehover hover go">
            	</div>
        	</div>
        </div>
    </div>
    <div class="space"></div>
    <div class="space"></div>
<!--BODY-->
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
