<?PHP
/*
Minúsculas e Maiúsculas fazem diferença no nome do campo!
Formulário precisa ter os seguintes campos:
contatoNome = $_POST["contatoNome"] 
contatoMail = $_POST["contatoMail"]
contatoCidade = $_POST["contatoCidade"]
contatoComentario = $_POST["contatoComentario"]
*/
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: ".$_POST["contatoNome"]." <".$_POST["contatoMail"].">\r\n";

$assunto = "Email!!";
$paranome = "João Marcus";
$paraemail = "jmpierrotfernandes@gmail.com";

if( mail($paranome."<".$paraemail.">", $assunto,
	"<html><head></head><body>
	<b>Assunto:</b> ".$assunto."<br />
	<b>Nome:</b> ".$_POST["contatoNome"]."<br />
	<b>E-Mail:</b> ".$_POST["contatoMail"]."<br />
	<b>Cidade:</b> ".$_POST["contatoCidade"]."<br /><br />
	<b>Comentário:</b><br />".nl2br($_POST["contatoComentario"])."<br /><br />
	<b>IP</b>: " . $_SERVER['REMOTE_ADDR'] . "<br />
	<b>Detalhes</b>: " . htmlentities($_SERVER['HTTP_USER_AGENT']) . "<br />
	</body></html>", $headers)) {

	echo "E-Mail enviado com sucesso!";

} else {

	echo "E-Mail NÃO FOI enviado com sucesso!";

}
?>