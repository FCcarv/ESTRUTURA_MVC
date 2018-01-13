<?php
class Anuncios extends Model{

	public function getQuantidade(){
		$sql = "SELECT COUNT(*) as C FROM anuncios";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			
			$sql = $sql->fetch();
			return $sql['C'];
		}else{
			return 0;
		}
		
	}
}