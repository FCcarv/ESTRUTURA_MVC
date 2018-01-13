<?php 
class homeController extends Controller{

	public function index(){
		//model anuncio
		$anuncios = new  Anuncios();
		$usuarios = new  Usuarios();

		$dados = array(
			'quantidade' => $anuncios->getQuantidade(),
			'nome' => $usuarios->getNome(),
			'idade' => $usuarios->getIdade()
		);
		$this->loadTemplate('home', $dados);
	}


}