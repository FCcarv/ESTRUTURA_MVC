<?php
class Model{

	Protected $db;

	public function __construct(){
		global $db;
		$this->db = $db;
	}
}