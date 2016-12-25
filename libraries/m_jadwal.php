<?php
class jadwal{
	
	private $db;
	
	public function jadwal(){
		$this->db = new DBClass();
	}
	
	public function readAlljam(){
		$query = "SELECT * FROM jam";
		return $this->db->getRows($query);
	}
	
	public function readAllhari(){
		$query = "SELECT * FROM hari";
		return $this->db->getRows($query);
	}
	
	public function readAlljadwal(){
		$query = "SELECT * FROM jadwal s JOIN hari n on
				s.id_hari = n.id_hari JOIN jam a on s.id_jam=a.id_jam JOIN detail_dokter c on c.id_detail_dokter=s.id_detail_dokter JOIN 
				dokter d on c.id_dokter=d.id_dokter join poli e on c.id_poli=e.id_poli";
		return $this->db->getRows($query);
	}
	
	public function readhari($id){
		$query = "SELECT * FROM hari WHERE id_hari =".$id;
		return $this->db->getRows($query);
	}
	
	public function readjam($id){
		$query = "SELECT * FROM jam WHERE id_jam =".$id;
		return $this->db->getRows($query);
	}
	
	public function readjadwal($id){
		$query = "SELECT * FROM jadwal s JOIN hari n on
				s.id_hari = n.id_hari JOIN jam a on s.id_jam=a.id_jam JOIN detail_dokter c on c.id_detail_dokter=s.id_detail_dokter JOIN 
				dokter d on c.id_dokter=d.id_dokter join poli e on c.id_poli=e.id_poli where id_jadwal=".$id;
		return $this->db->getRows($query);
	}
	public function readjadwalindividu($id){
		$query = "SELECT * FROM jadwal s JOIN hari n on
				s.id_hari = n.id_hari JOIN jam a on s.id_jam=a.id_jam JOIN detail_dokter c on c.id_detail_dokter=s.id_detail_dokter JOIN 
				dokter d on c.id_dokter=d.id_dokter join poli e on c.id_poli=e.id_poli where s.id_detail_dokter=".$id;
		return $this->db->getRows($query);
	}
	
	public function createjadwal($id_detail_dokter,$id_hari, $id_jam){
		$query = "INSERT INTO jadwal (id_detail_dokter,id_hari,id_jam)
				VALUES('$id_detail_dokter','$id_hari', '$id_jam')";
		$this->db->putRows($query);
	}
		
	public function createhari($in_nama){
		$query = "INSERT INTO hari (nama_hari)
				VALUES('$in_nama')";
		$this->db->putRows($query);
	}
	
	
	public function createjam($in_nama){
		$query = "INSERT INTO jam (nama_jam)
				VALUES('$in_nama')";
		$this->db->putRows($query);}
	
	
	public function updatejadwal($id, $data){
		$dok = $data['in_dok'];
		$hari = $data['in_hari'];
		$jam = $data['in_jam'];
		$query = "update jadwal set id_detail_dokter='$dok',id_hari='$hari', id_jam='$jam'";
		$query.= "WHERE id_jadwal=$id";
		$this->db->putRows($query);		
	}
	
	
	public function updatehari($id, $data){
		$nama = $data['in_nama'];
		
		$query = "update hari set nama_hari='$nama'";
		$query.= "WHERE id_hari=$id";
		$this->db->putRows($query);		
	}
	public function updatejam($id, $data){
		$nama = $data['in_nama'];
		$query = "update jam set nama_jam='$nama'";
		$query.= "WHERE id_jam=$id";
		$this->db->putRows($query);		
	}
	
	
	public function deletejadwal($id) {
		$query = "DELETE FROM jadwal WHERE id_jadwal=$id";
		$this->db->putRows($query);
	}
	
	
	public function deletehari($id) {
		$query = "DELETE FROM hari WHERE id_hari=$id";
		$this->db->putRows($query);
	}
	
	public function deletejam($id) {
		$query = "DELETE FROM jam WHERE id_jam=$id";
		$this->db->putRows($query);
	}
	
	}
?>