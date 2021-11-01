<?php
require 'vendor/autoload.php';

use simplehtmldom\HtmlDocument;

$client = new GuzzleHttp\Client([
	'cookies' => $cookies = new \GuzzleHttp\Cookie\CookieJar,
	'verify' => false,
	'base_uri' => 'https://servicos.receita.fazenda.gov.br/servicos/cpf/consultasituacao/'
]);



$response = $client->request('GET', 'ConsultaPublicaSonoro.asp');


$dom = new HtmlDocument();

$html = $dom->load($response->getBody());

$captcha = $html->find('#imgCaptcha',0);

//echo '<img src="'.$captcha->src.'" >';

?>

<img src="<?= $captcha->src ?>">
<form action="" method="post">
	Cpf: <input type="text" name="cpf"><br>
	Nasc: <input type="text" name="nasc"><br>
	captcha: <input type="text" name="captcha"><br>
	<submit type="submit" value="Enviar">
</form>


