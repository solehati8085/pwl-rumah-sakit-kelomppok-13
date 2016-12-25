<?php 
require_once('libraries/DBClass.php');
require_once('libraries/m_dokter.php');
if (!isset($_POST['kirim'])){
	exit('Access Forbiden');
}
$dokter = new dokter();

$data['in_nama'] = $_POST['in_nama'];
$dokter->updatepoli($_POST['in_id'], $data);
//print_r($_FILES);
echo "Data poli Berhasil di update<br />";
echo "<a href='d_dokter.php?id=".$_POST['in_id']."'>dokter</a>"
?>