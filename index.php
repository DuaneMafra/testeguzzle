<?php

require 'vendor/autoload.php';

$client = new GuzzleHttp\Client([
	'cookies' => $cookies = new \GuzzleHttp\Cookie\CookieJar,
	'verify' => false,
	'base_uri' => 'http://sistema.t4gn.com.br'
]);

$response = $client->request('POST', '/', [    
    'form_params' => [
    	'email'=>'duanemafra@gmail.com',
    	'senha'=>'consultel'
    ]
]);

//echo $response->getBody();


$response = $client->request('POST', '/perfil/index/form-edita-perfil-enviar', [	
    'form_params' => [
    	'nome'=>'Duane',
    	'sobrenome'=>'Eduardo Mafra ',
    	'email'=>'duanemafra@gmail.com',
    	'cpf'=>'389.296.128-06',
    	'rg'=>'',
    	'request'=>'true',
    ]
]);


//echo $response->getBody();
