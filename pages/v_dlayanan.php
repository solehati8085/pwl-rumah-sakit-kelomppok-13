<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_layanan.php');
$id = $_GET['id'];
if(!is_numeric($id)){
	exit('Access Forbiden');
}
$layanan = new layanan();
$d = $layanan->readlayanan($id);
foreach ($d as $a):
$c=($a['foto']);
unlink($c);
endforeach;
$data = $layanan->deletelayanan($id);
if(empty($data)){
	echo "data layanan berhasil dihapus";
}
?>

<br />
<a href="d_layanan.php">Kembali </a>