<?php
class layanan{
	
	private $db;
	
	public function layanan(){
		$this->db = new DBClass();
	}
	
	public function readAlllayanan(){
		$query = "SELECT * FROM pelayanan ";
		return $this->db->getRows($query);
	}
	

	public function readlayanan($id){
		$query = "SELECT * FROM pelayanan WHERE id_pelayanan =".$id;
		return $this->db->getRows($query);
	}
	
	
	public function createlayanan($nama_pelayanan, $deskripsi,$ff){
		$query = "INSERT INTO pelayanan (nama_pelayanan, deskripsi,foto)
				VALUES('$nama_pelayanan', '$deskripsi','$ff')";
		$this->db->putRows($query);
	}
	
	public function updatelayanan($id, $data){
		$nama = $data['in_nama'];
		$deskripsi = $data['in_deskripsi'];
		$foto = $data['in_foto'];

		$query = "update pelayanan set nama_pelayanan='$nama', deskripsi='$deskripsi',foto='$foto'";
		$query.= "WHERE id_pelayanan=$id";
		$this->db->putRows($query);		
	}
	
	public function deletelayanan($id) {
		$query = "DELETE FROM pelayanan WHERE id_pelayanan=$id";
		$this->db->putRows($query);
	}
}
?>