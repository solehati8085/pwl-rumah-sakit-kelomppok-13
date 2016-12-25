<?php
class dokter{
	
	private $db;
	
	public function dokter(){
		$this->db = new DBClass();
	}
	
	public function readAllpoli(){
		$query = "SELECT * FROM poli";
		return $this->db->getRows($query);
	}
	
	public function readAlldokter(){
		$query = "SELECT * FROM dokter";
		return $this->db->getRows($query);
	}
	
	public function readAllddokter(){
		$query = "SELECT * FROM detail_dokter s JOIN dokter n on
				s.id_dokter = n.id_dokter JOIN poli a on s.id_poli=a.id_poli";
		return $this->db->getRows($query);
	}
	
	public function readdokter($id){
		$query = "SELECT * FROM dokter WHERE id_dokter =".$id;
		return $this->db->getRows($query);
	}
	
	public function readpoli($id){
		$query = "SELECT * FROM poli WHERE id_poli =".$id;
		return $this->db->getRows($query);
	}
	
	public function readddokter($id){
		$query = "SELECT * FROM detail_dokter s JOIN dokter n on
				s.id_dokter = n.id_dokter JOIN poli a on s.id_poli=a.id_poli where id_detail_dokter=".$id;
		return $this->db->getRows($query);
	}
	
	
	public function createddokter($id_dokter, $id_poli){
		$query = "INSERT INTO detail_dokter (id_dokter,id_poli)
				VALUES('$id_dokter', '$id_poli')";
		$this->db->putRows($query);
	}
		
	public function createdokter($in_nama, $in_alamat, $in_no, $in_riwayat, $ff){
		$query = "INSERT INTO dokter (nama_dokter,alamat_dokter, no_telpn_dokter, riwayat_pendidikan_dokter, foto)
				VALUES('$in_nama', '$in_alamat', '$in_no', '$in_riwayat', '$ff')";
		$this->db->putRows($query);
	}
	
	
	public function createpoli($in_nama){
		$query = "INSERT INTO poli (nama_poli)
				VALUES('$in_nama')";
		$this->db->putRows($query);}
	
	
	public function updateddokter($id, $data){
		$nama = $data['in_nama'];
		$poli = $data['in_poli'];
		
		$query = "update detail_dokter set id_dokter='$nama', id_poli='$poli'";
		$query.= "WHERE id_detail_dokter=$id";
		$this->db->putRows($query);		
	}
	
	
	public function updatedokter($id, $data){
		$nama = $data['in_nama'];
		$alamat = $data['in_alamat'];
		$no = $data['in_no'];
		$riwayat = $data['in_riwayat'];
		$foto = $data['in_foto'];
		
		$query = "update dokter set nama_dokter='$nama', alamat_dokter='$alamat', no_telpn_dokter='$no',riwayat_pendidikan_dokter='$riwayat',foto='$foto'";
		$query.= "WHERE id_dokter=$id";
		$this->db->putRows($query);		
	}
	public function updatepoli($id, $data){
		$nama = $data['in_nama'];
		$query = "update poli set nama_poli='$nama'";
		$query.= "WHERE id_poli=$id";
		$this->db->putRows($query);		
	}
	
	
	public function deleteddokter($id) {
		$query = "DELETE FROM detail_dokter WHERE id_detail_dokter=$id";
		$this->db->putRows($query);
	}
	
	
	public function deletedokter($id) {
		$query = "DELETE FROM dokter WHERE id_dokter=$id";
		$this->db->putRows($query);
	}
	
	public function deletepoli($id) {
		$query = "DELETE FROM poli WHERE id_poli=$id";
		$this->db->putRows($query);
	}
	
	}
?>