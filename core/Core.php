<?php
class Core{

	public function run(){

		$url = '/';

		if (isset($_GET['url'])) {
			$url .= $_GET['url'];
		}

		$params = array();

		if (!empty($url) && $url != '/') {
			$url = explode('/', $url);
			array_shift($url);//remove o primeiro elemento do array

			$currentController = $url[0].'Controller';
			array_shift($url);

			if (isset($url[0]) && !empty($url[0])) {
				$currentAction = $url[0];
				array_shift($url);
			}else{
				$currentAction = 'index';
			}

			if (count($url) > 0) {
				$params = $url;
			}
			
		}else{
			//controller atual
			$currentController = 'homeController';
			$currentAction = 'index';
		}
			/*instacia a classe, e o autoloader q tem a responsabilidade de 
			*encontrar a classe que foi chamada pela view.
			*/
			$c = new $currentController();
			/*
			*Essa funçãa do php vai ser usada pra puxar a ction da url,
			*ela precisa de 2 paramentos(@param).
			*1ª@param  é um array, que vai a pegar a instancia da classe e o metodo default de todas as classes o INDEX.
			*e o 2º @param  da variavel $param o terceiro parametro da url se houver.
			**/
			call_user_func_array(array($c, $currentAction), $params);


	}
}