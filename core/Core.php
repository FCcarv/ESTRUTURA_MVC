<?php
	/*
	*Classe Core
	*
	* Esta classe é responsavel por provocar o start no sistema e controlar os parametros da url. 
	* A url (http://www.meusite.com.br/galeria-fotos/foto/1/) é divida em 3 partes.
	* Para o sistema só importa a parte (/galeria-fotos/foto/1/) que são CONTROLLER/ACTIONS/PARAMETROS
	* Pode a ver mais parametros que serão mostrados normalmente e divididos pela barra /.
	* 
	* @package Estrutura MVC
	* @author Francisco fccomp@ny
	*/
	class Core{

	/*
	*Metoddo que inicia a aplicação da estrutura e
	*organiza a url dividindo em 3 partes CONTROLLER, ACTION e PARAMS.
	*/
	public function run(){

		$url = '/';

		if (isset($_GET['url'])) {
			$url .= $_GET['url'];
		}

		$params = array();

		if (!empty($url) && $url != '/') {//Se a url não estiver vazia e não for só um barra
			$url = explode('/', $url);
			array_shift($url);//remove o primeiro elemento do array $url que não será usado, o $url[0].

			$currentController = $url[0].'Controller';//Pega o nome homeController o ($url[0]) será o home
			array_shift($url);

			if (isset($url[0]) && !empty($url[0])) {
				$currentAction = $url[0];
				array_shift($url);
			}else{
				$currentAction = 'index';
			}
			//Conta o 3 parametro , se houver 1 ou mais parametros apos action
			//da url e transforma o array $url em $param.
			if (count($url) > 0) {
				$params = $url;
			}
			
		}else{
			/*Controller Atual -> currentController mostra a pag HOME ou pagina inicial do site.
			*Caso contrário a url estiver vazia ou usuario colocar somente uma barra.
			*Por exemplo www.meusite.com.br/
			 */
			$currentController = 'homeController';
			$currentAction = 'index';//metodo index (inicial) da classse (homeController), 2 parametro da url.
		}
			/*instacia as classes controllers, e manda o autoloader buscar a classe desejada. */
			$c = new $currentController();
			/*
			*FUNÇÃO DO PHP call_user_func_array
			* 
			*É usada pra puxar action da url,
			*ela precisa de 2 paramentos(@param).
			*1ª@param é um array, que no primeiro indice($c) vai setar a classe CONTROLOLLER e instância-la(new homeController) e o segundo indice é a ACTION ($currentAction)  .
			*2º @param  a variavel($param) É o terceiro parametro da url se houver esse e outros a frente.
			*Esse terceiro parametro por ezemplo podera ser o id de uma foto da galeria de fotos,
			**/
			call_user_func_array(array($c, $currentAction), $params);


	}
}