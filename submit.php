<?
$path = "../../..";
define('WP_USE_THEMES', false);
require($path .'/wp-load.php');
$nomeConfig     = get_bloginfo('name');
$emailConfig = get_bloginfo('admin_email');
$query_args = array('page_id' => 14);
$query = new WP_Query($query_args);
while ( $query->have_posts() ) : $query->the_post();
$emailConfig = get_field('email');
endwhile;

$nome = @$_POST["nome"];
/* Medida preventiva para evitar que outros domínios sejam remetente da sua mensagem. */
if (eregi('tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$', $_SERVER[HTTP_HOST])) {
        $emailsender='seu@e-mail.com.br';
} else {
        $emailsender = "webmaster@" . $_SERVER[HTTP_HOST];
        //    Na linha acima estamos forçando que o remetente seja 'webmaster@seudominio',
        // você pode alterar para que o remetente seja, por exemplo, 'contato@seudominio'.
}
 
/* Verifica qual é o sistema operacional do servidor para ajustar o cabeçalho de forma correta. Não alterar */
if(PHP_OS == "Linux") $quebra_linha = "\n"; //Se for Linux
elseif(PHP_OS == "WINNT") $quebra_linha = "\r\n"; // Se for Windows
else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");
 
// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente     = "CADASTRO - ";
$emailremetente    = $emailConfig;
$emaildestinatario = $emailConfig;
$comcopia          = trim($_POST['comcopia']);
$comcopiaoculta    = trim($_POST['comcopiaoculta']);
$data = date('d/m/y');
$assunto           = $data." - ".$nome;
 
$msg = $_POST['msg'];
$msg_arr = explode("#content#",$msg);
$msg_body = "";
for($i = 0; $i < count($msg_arr); $i++){
	if(strlen($msg_arr[$i]) > 0){
		$msg_body .= $msg_arr[$i].'<br>';
	}
}
$msg1="<html><body>";
$msg1=$msg1.$msg_body;
$msg1=$msg1."<br>-----</body></html>";
$mensagemHTML = $msg1;
 
 
/* Montando o cabeçalho da mensagem */
$headers = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;
// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
$headers .= "From: ".$emailsender.$quebra_linha;
$headers .= "Return-Path: " . $emailsender . $quebra_linha;
// Esses dois "if's" abaixo são porque o Postfix obriga que se um cabeçalho for especificado, deverá haver um valor.
// Se não houver um valor, o item não deverá ser especificado.
if(strlen($comcopia) > 0) $headers .= "Cc: ".$comcopia.$quebra_linha;
if(strlen($comcopiaoculta) > 0) $headers .= "Bcc: ".$comcopiaoculta.$quebra_linha;
$headers .= "Reply-To: ".$emailremetente.$quebra_linha;
// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)
/* Enviando a mensagem */
if(@mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r". $emailsender)){
	echo "sucess";	
}else{
	echo "Erro no envio";	
}
 ?>