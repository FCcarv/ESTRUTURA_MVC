<?php 
/*
*Classe homeController
* 
*Controla o que vai ser mostrado na pagina home,
*e tera um auxiliar que é a classe Controller.
*
* @package Estrutura MVC
* @author Francisco fccomp@ny
*/
class homeController extends Controller{

	public function index(){
		//model anuncio
		$anuncios = new  Anuncios();
		//model usuarios
		$usuarios = new  Usuarios();
		//Envia as informações paa view
		$dados = array(
			'quantidade' => $anuncios->getQuantidade(),
			'nome' => $usuarios->getNome(),
			'idade' => $usuarios->getIdade()
		);
		//esse parmetroo chama a view pra ser mostrda na pagina home
		$this->loadTemplate('home', $dados);
	}


}