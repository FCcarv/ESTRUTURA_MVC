<?php
/*
*Classe Controller
*
* Tem a função de auxiliar os controçles no funcionamento do sistema.
* Carregando a view(parte html) das paginas.
* 
* @package Estrutura MVC
* @author Francisco fccomp@ny
*/
class Controller{

 
   /*
   *Metodo que usa um require e chama a view pelo nome atraves da variavel $viewName.
   *E a outras informações viram no array $viewData
   *viewData é um array esta sendo chamado pelo array $dados.
   */
	public function loadView($viewName, $viewData = array()){
		extract($viewData);//tranforma um array de varios elementos em varias variaveis a cada indice e valor.
		require 'views/'.$viewName.'.php';
	}
  /*
   *Mtodo que usa um require e chama a view template do site,
   * E a outras informações viram no array $viewData
   */	
	public function loadTemplate($viewName, $viewData = array()){
		require 'views/template.php';
	}
  /*
   *Metodo que usa um require e carrega a view dentro da view template do site,
   * atraves da variavel $viewName.
   */	
	public function loadViewInTemplate($viewName, $viewData = array()){
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}
}