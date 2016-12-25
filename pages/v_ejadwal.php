<?php 
require_once('libraries/DBClass.php');
require_once('libraries/m_jadwal.php');
if (!isset($_POST['kirim'])){
	exit('Access Forbiden');
}
$jadwal = new jadwal();
$data['in_dok'] = $_POST['in_dok'];
$data['in_hari'] = $_POST['in_hari'];
$data['in_jam'] = $_POST['in_jam'];
$jadwal->updatejadwal($_POST['in_id'], $data);
//print_r($_FILES);
echo "Data detail Berhasil di update<br />";

?>