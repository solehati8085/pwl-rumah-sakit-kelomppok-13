<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_dokter.php');
$id = $_GET['id'];
if(!is_numeric($id)){
	exit('Access Forbiden');
}
$dokter = new dokter();
$d = $dokter->readdokter($id);
foreach ($d as $a):
$c=($a['foto']);
unlink($c);
endforeach;
if(empty($data)){
	echo "data berhasil dihapus";
}
$data = $dokter->deletedokter($id);

?>

<br />
<a href="d_dokter.php">Kembali </a>