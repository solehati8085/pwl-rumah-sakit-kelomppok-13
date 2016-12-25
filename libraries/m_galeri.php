<?php
class galeri{
	
	private $db;
	
	public function galeri(){
		$this->db = new DBClass();
	}
	
	public function readAllgaleri(){
		$query = "SELECT * FROM galeri ";
		return $this->db->getRows($query);
	}
	

	public function readgaleri($id){
		$query = "SELECT * FROM galeri WHERE id_galeri=".$id;
		return $this->db->getRows($query);
	}
	
	
	public function creategaleri($nama, $foto){
		$query = "INSERT INTO galeri (nama,  foto)
				VALUES('$nama', '$foto')";
		$this->db->putRows($query);
	}
	
	public function updategaleri($id, $data){
		$nama = $data['in_nama'];
		$ff = $data['in_foto'];
	
		$query = "update galeri set nama='$nama', foto='$ff'";
		$query.= "WHERE id_galeri=$id";
		$this->db->putRows($query);		
	}
	
	public function deletegaleri($id) {
		$query = "DELETE FROM galeri WHERE id_galeri=$id";
		$this->db->putRows($query);
	}
}
?>