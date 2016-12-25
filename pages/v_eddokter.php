<?php 
require_once('libraries/DBClass.php');
require_once('libraries/m_dokter.php');
if (!isset($_POST['kirim'])){
	exit('Access Forbiden');
}
$dokter = new dokter();
$data['in_nama'] = $_POST['in_nama'];
$data['in_poli'] = $_POST['in_poli'];
$dokter->updateddokter($_POST['in_id'], $data);
//print_r($_FILES);
echo "Data detail Berhasil di update<br />";

?>