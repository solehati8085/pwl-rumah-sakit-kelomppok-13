<?php
class event{
	
	private $db;
	
	public function event(){
		$this->db = new DBClass();
	}
	
	public function readAllevent(){
		$query = "SELECT * FROM event";
		return $this->db->getRows($query);
	}
	

	public function readevent($id){
		$query = "SELECT * FROM event WHERE id_event =".$id;
		return $this->db->getRows($query);
	}
	
	
	public function createevent($judul_event,$isi_event, $tgl_event,$ff){
		$query = "INSERT INTO event (judul_event, isi_event,tgl_event,foto)
				VALUES('$judul_event', '$isi_event','$tgl_event','$ff')";
		$this->db->putRows($query);
	}
	
	public function updateevent($id, $data){
		$judul = $data['in_judul'];
		$isi = $data['in_isi'];
		$tgl = $data['in_tgl'];
		$foto = $data['in_foto'];

		$query = "update event set judul_event='$judul', isi_event='$isi',tgl_event='$tgl',foto='$foto'";
		$query.= "WHERE id_event=$id";
		$this->db->putRows($query);		
	}
	
	public function deleteevent($id) {
		$query = "DELETE FROM event WHERE id_event=$id";
		$this->db->putRows($query);
	}
}
?>