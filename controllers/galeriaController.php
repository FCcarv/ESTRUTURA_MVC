<?php 
/*
*Classe galeriaController
* 
*Controla o que vai ser mostrado na pagina de galerias,
*e tera um auxiliar que é a classe Controller.
*
* @package Estrutura MVC
* @author Francisco fccomp@ny
*/
class galeriaController extends Controller{

	public function index(){
		$dados = array(
			'qt' => 129,
		);
		$this->loadTemplate('galeria', $dados);
	}


}