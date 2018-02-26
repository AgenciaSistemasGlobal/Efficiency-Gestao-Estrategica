<?php
$origem           = isset($_POST["origem"]) ? $_POST["origem"] : 0;
$nome_form        = isset($_POST["nome"]) ? $_POST["nome"] : 'Sem Nome';
$email_form       = isset($_POST["email"]) ? $_POST["email"] : 'Sem Email';
$telefone_form    = isset($_POST["tel"]) ? $_POST["tel"] : 'Sem Telefone';
$mensagem_form    = isset($_POST["msg"]) ? $_POST["msg"] : 'Sem Mensagem';
$campoextra1      = isset($_POST["campoextra1"]) ? $_POST["campoextra1"] : '';
$campoextra2      = isset($_POST["campoextra2"]) ? $_POST["campoextra2"] : '';

// Para ambos
$headers          = "MIME-Version: 1.0" . "\r\n";
$headers         .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers         .= "From: Sistemas Global <falecom@sistemasglobal.com.br>" . "\r\n";

// Para CEO
$destino_CEO      = "To: Murilo Eduardo CEO <muriloeduardoooooo@gmail.com>";
$titulo_CEO       = "Cliente Solicitando Contato";
$msg_CEO          = "<b>Nome:</b> ".$nome_form."<br><b>Email: </b>".$email_form."<br><b>Telefone: </b>".$telefone_form."<br><b>Mensagem: </b>".$mensagem_form."<br><b>Outras Informações: </b><br>Melhor Dia Horario: " . $campoextra1 . "<br>Orçamento: " . $campoextra2;

// Para Cliente
$destino_cliente  = "To: ".$nome_form." <".$email_form.">";
$titulo_cliente   = "Obrigado pelo contato ".$nome_form;
$msg_cliente_site = '
<html>
	<body>
		<table width="600px" style="margin:50px auto;font-family:arial;" cellpadding="25" cellspacing="0">
			<thead bgcolor="#f58634" style="color:#fff;" align="left">
				<tr>
					<th height="200px">
						<h1>Recebemos seu contato!</h1>
						<h2>Dentro de <b>2 minutos</b> entraremos em contato com voc&ecirc;.</h2>
					</th>
				</tr>
			</thead>
			<tbody bgcolor="#f8f8f8">
				<tr>
					<td height="150px">
						<h2>Por que estou recebendo este email?</h2>
						<h4>Este email &eacute; automatico sim! Mas pensando em cada cliente com muito carinho.</h4>
						<p>Ao solicitar algum contato em nosso site, lhe enviamos este email para que fique ciente de que recebemos as suas solicita&ccedil;&otilde;es.</p>
						<p>Fique tranquilo, tamb&ecirc;m odiamos span.</p>
					</td>
				</tr>
			</tbody>
			<tfoot bgcolor="#ddd" align="center" style="font-size:12px;">
				<tr>
					<td height="50px">
						Todos seus dados assegurados por <a href="http://sistemasglobal.com.br" target="_blank" style="color:#f58634;">sistemasglobal.com.br</a>
					</td>
				</tr>
			</tfoot>
		</table>
	</body>
</html>
';
$msg_cliente_blog = '';

// 0 = Site
// 1 = Blog
switch ($origem) {
	case 0:
		$msg_cliente = $msg_cliente_site;
		break;
	case 1:
		$msg_cliente = $msg_cliente_blog;
		break;
	default:
		$msg_cliente = $msg_cliente_site;
		break;
}

$sended = mail($destino_cliente, $titulo_cliente, $msg_cliente, $headers) && mail($destino_CEO, $titulo_CEO, $msg_CEO, $headers);

echo json_encode($sended);
?>