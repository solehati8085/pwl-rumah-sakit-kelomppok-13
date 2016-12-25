<?php
class profile{
	
	private $db;
	
	public function profile(){
		$this->db = new DBClass();
	}
	
	public function readAllprofile(){
		$query = "SELECT * FROM profile ";
		return $this->db->getRows($query);
	}
	

	public function readprofile($id){
		$query = "SELECT * FROM profile WHERE id_profile =".$id;
		return $this->db->getRows($query);
	}
	

	public function createprofile($visi, $misi,$sejarah){
		$query = "INSERT INTO profile (visi_profile, misi_profile,sejarah_profile)
				VALUES('$visi', '$misi','$sejarah')";
		$this->db->putRows($query);
	}
	
	public function updateprofile($id, $data){
		$visi = $data['in_visi'];
		$misi = $data['in_misi'];
		$sejarah = $data['in_sejarah'];
		
	
		$query = "update profile set visi_profile='$visi', misi_profile='$misi',sejarah_profile='$sejarah'";
		$query.= "WHERE id_profile=$id";
		$this->db->putRows($query);		
	}
	
	public function deleteprofile($id) {
		$query = "DELETE FROM profile WHERE id_profile=$id";
		$this->db->putRows($query);
	}
}
?>