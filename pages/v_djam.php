<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_jadwal.php');
$id = $_GET['id'];
if(!is_numeric($id)){
	exit('Access Forbiden');
}
$jadwal = new jadwal();
$data = $jadwal->deletejam($id);
if(empty($data)){
	echo "data berhasil dihapus";
}
?>

<br />
<a href="d_jadwal.php">Kembali </a>