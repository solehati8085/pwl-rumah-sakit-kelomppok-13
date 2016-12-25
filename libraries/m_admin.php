<?php
class admin{
	
	private $db;
	
	public function admin(){
		$this->db = new DBClass();
	}
	
	public function readAlladmin(){
		$query = "SELECT * FROM admin ";
		return $this->db->getRows($query);
	}
	

	public function readadmin($id){
		$query = "SELECT * FROM admin WHERE id_admin =".$id;
		return $this->db->getRows($query);
	}
	
	
	public function createadmin($nama_admin, $password){
		$query = "INSERT INTO admin (nama_admin, password)
				VALUES('$nama_admin', '$password')";
		$this->db->putRows($query);
	}
	
	public function updateadmin($id, $data){
		$nama = $data['in_nama'];
		$password = $data['in_password'];
	
		$query = "update admin set nama_admin='$nama', password='$password'";
		$query.= "WHERE id_admin=$id";
		$this->db->putRows($query);		
	}
	
	public function deleteadmin($id) {
		$query = "DELETE FROM admin WHERE id_admin=$id";
		$this->db->putRows($query);
	}
}
?>