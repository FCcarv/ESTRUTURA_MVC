<?php
require 'environment.php';

$config = array();

if (ENVIRONMENT  == 'development') {
	define("BASE_URL", "http://localhost/estrutura_mvc/");
	$config['dbname'] = 'estrutura_mvc';
	$config['host']   = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';	
}else{
	//servidor FTP
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