<?php 
require_once('libraries/DBClass.php');
require_once('libraries/m_jadwal.php');
if (!isset($_POST['kirim'])){
	exit('Access Forbiden');
}
$jam = new jadwal();

$data['in_nama'] = $_POST['in_nama'];
$jam->updatejam($_POST['in_id'], $data);
//print_r($_FILES);
echo "Data jam Berhasil di update<br />";
echo "<a href='d_jadwal.php?id=".$_POST['in_id']."'>Detail jam</a>"
?>