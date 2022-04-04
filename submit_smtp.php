<?
$path = "../../..";
define('WP_USE_THEMES', false);
require($path .'/wp-load.php');
require("php_mailer/class.phpmailer.php"); // Chama o arquivo da classe

$nomeremetente     = get_bloginfo('name');
$emaildestinatario = get_bloginfo('admin_email');
$query_args = array('page_id' => 12);
$query = new WP_Query($query_args);
while ( $query->have_posts() ) : $query->the_post();
$emaildestinatario = get_field('email');
endwhile;
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

$formulario    = trim($_POST['formname']);
if(strlen($formulario) > 0){
$assunto           = $formulario." - ".$nomeremetente;
}else{
$assunto           = $nomeremetente;
}


$mail = new PHPMailer(); // Cria a instância
$mail->SetLanguage("br"); // Define o Idioma
$mail->CharSet = "utf-8"; // Define a Codificação
$mail->IsSMTP(); // Define que será enviado por SMTP
$mail->Host = "mail.attekita.com"; // Servidor SMTP
$mail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
$mail->Username = "contato@attekita.com"; // Usuário ou E-mail para autenticação no SMTP
$mail->Password = "werty007"; // Senha do E-mail
$mail->IsHTML(true); // Enviar como HTML
$mail->From = "contato@attekita.com"; // Define o Remetente
$mail->FromName = $nomeremetente; // Nome do Remetente
$mail->AddAddress($emaildestinatario,$nomeremetente); // Email e Nome do destinatário

// Estes campos a seguir são opcionais, caso não queira usar, remova-os
/*$mail->AddReplyTo("email@dominio.com.br","Information"); // E-mail de Resposta
$mail->AddCC("outroemail@dominio.com.br";"Nome"); // Envia Cópia
$mail->AddBCC("meuemail@dominio.com.br";"Nome"); // Envia Cópia Oculta

// Se você quiser anexar aquivos, pode utilizar os comandos abaixo, caso não vá enviar anexos, remova os comandos
$mail->AddAttachment("/var/tmp/file.tar.gz"); // Arquivo Anexo 1
$mail->AddAttachment("/tmp/image.jpg","new.jpg"); // Arquivo Anexo 2*/

// Configuração de Assuntos e Corpo do E-mail


$mail->Subject = $assunto ; // Define o Assunto
$mail->Body = $mensagemHTML; // Corpo da mensagem em formato HTML
// Este campo abaixo é Opcional

// Fazemos o envio do email
if(!$mail->Send()){
    $mensagem = "Ocorreu um erro no envio da Mensagem.<br />";
    $mensagem .= "Erro: ".$mail->ErrorInfo;
}else{
    $mensagem = "sucess";
}
 ?>