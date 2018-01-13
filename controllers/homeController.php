<?php 
class homeController extends Controller{

	public function index(){
		$dados = array(
			'quantidade' => 5,
			'nome' => 'Francisco',
			'idade' => 99
		);
		$this->loadTemplate('home', $dados);
	}


}