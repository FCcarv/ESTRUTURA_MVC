<?php

/*
*Classe  Model
*
* Tem a função de se conectar a o banco de dados e 
* auxiliar na busca de informações para a as classes 
* anuncios , usuarios entre outras.
*
* @package Estrutura MVC
* @author Francisco <franc@gmail.com>
* 
*/
class Model{

	Protected $db;

	public function __construct(){
		global $db;
		$this->db = $db;
	}
}