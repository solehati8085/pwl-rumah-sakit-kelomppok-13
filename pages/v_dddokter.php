<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_dokter.php');
$id = $_GET['id'];
if(!is_numeric($id)){
	exit('Access Forbiden');
}
$dokter = new dokter();
$data = $dokter->deleteddokter($id);
if(empty($data)){
	echo "data berhasil dihapus";
}
?>

<br />
<a href="d_dokter.php">Kembali </a>