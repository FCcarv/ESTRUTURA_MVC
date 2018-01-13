<?php
/*ARQUIVO  DE CONFIGURAÇÕES E DE CONEXÃO AO BANCO DE DADOS.*/
require 'environment.php';
//cria as constantes de conexão ao banco de dados.
$config = array();

if (ENVIRONMENT  == 'development') {//SERVIDOR LOCAL
	define("BASE_URL", "http://localhost/estrutura_mvc/");
	$config['dbname'] = 'estrutura_mvc';
	$config['host']   = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';	
}else{//servidor FTP
	
	define("BASE_URL", "http://meusite.com.br");
	$config['dbname'] = '';
	$config['host']   = '';
	$config['dbuser'] = '';
	$config['dbpass'] = '';	
}

global $db;
try{
 $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
}catch(PDOException $e){
	echo "Erro: ".$e->getMessage();
	exit();
}