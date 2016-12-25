<?php 
require_once('libraries/DBClass.php');
require_once('libraries/m_layanan.php');
if (!isset($_POST['kirim'])){
	exit('Access Forbiden');
}

$layanan = new layanan();
$d = $layanan->readlayanan($_POST['in_id']);


if (move_uploaded_file($_FILES["in_foto"]["tmp_name"], 'images/layanan/'.$_POST['in_id'].'.jpg')) {
      echo  "has been uploaded";
    }	

$data['in_nama'] = $_POST['in_nama'];
$data['in_deskripsi'] = $_POST['in_deskripsi'];
$data['in_foto'] = 'images/layanan/'.$_POST['in_id'].'.jpg';

$layanan->updatelayanan($_POST['in_id'], $data);
//print_r($_FILES);
echo "Data layanan Berhasil di update<br />";
echo "<a href='d_layanan.php?id=".$_POST['in_id']."'>layanan</a>"
?>