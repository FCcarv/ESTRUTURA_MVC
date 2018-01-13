<?php
session_start();
require "config.php";

/*
*Auto-load serve para automatizar o carregamento das classes.
*Tem a responsabilidade de encontrar a classe e integra-la ao sistema.
**/
spl_autoload_register(function($class){
	if (file_exists('controllers/'.$class.'.php')) {
		require 'controllers/'.$class.'.php';
	}
	elseif(file_exists('models/'.$class.'.php')){
		require 'models/'.$class.'.php';
	}
	elseif(file_exists('core/'.$class.'.php')){
		require 'core/'.$class.'.php';	
	}
});
/*Instancia a classe CORE(o coração da estrutura mvc).  
* Metodo RUN( que da o start na aplicação).
 */
$core = new Core();
$core->run();
