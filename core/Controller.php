<?php

class Controller{

    // a variavel viewDataq é um array esta puxando o array $dados
    // a funbçaõ extract tranforma um array de varios elementos em varias variaveis a cada indice e valor..
	public function loadView($viewName, $viewData = array()){
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()){
		require 'views/template.php';
	}

	public function loadViewInTemplate($viewName, $viewData = array()){
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}
}