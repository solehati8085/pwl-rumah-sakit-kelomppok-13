<?php 
require_once('libraries/DBClass.php');
require_once('libraries/m_dokter.php');
if (!isset($_POST['kirim'])){
	exit('Access Forbiden');
}
$dokter = new dokter();
$d = $dokter->readdokter($_POST['in_id']);

if (move_uploaded_file($_FILES["in_foto"]["tmp_name"], 'images/dokter/'.$_POST['in_id'].'.jpg')) {
      echo  "has been uploaded";
    }	


$data['in_nama'] = $_POST['in_nama'];
$data['in_alamat'] = $_POST['in_alamat'];
$data['in_no'] = $_POST['in_no'];
$data['in_riwayat'] = $_POST['in_riwayat'];
$data['in_foto'] = 'images/dokter/'.$_POST['in_id'].'.jpg';
$dokter->updatedokter($_POST['in_id'], $data);
//print_r($_FILES);
echo "Data dokter Berhasil di update<br />";
echo "<a href='d_dokter.php?id=".$_POST['in_id']."'>dokter</a>";
?>