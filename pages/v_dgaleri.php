<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_galeri.php');
$id = $_GET['id'];
if(!is_numeric($id)){
	exit('Access Forbiden');
}
$galeri = new galeri();
$d = $galeri->readgaleri($id);
foreach ($d as $a):
$c=($a['foto']);
unlink($c);
endforeach;
$data = $galeri->deletegaleri($id);
if(empty($data)){
	echo "data galeri berhasil dihapus";
}
?>

<br />
<a href="d_galeri.php">Kembali </a>