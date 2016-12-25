<?php 
require_once('libraries/DBClass.php');
require_once('libraries/m_galeri.php');
if (!isset($_POST['kirim'])){
	exit('Access Forbiden');
}
$galeri = new galeri();
$d = $galeri->readgaleri($_POST['in_id']);
foreach ($d as $a):
$c=($a['foto']);
unlink($c);
endforeach;

if (move_uploaded_file($_FILES["in_foto"]["tmp_name"], 'images/galeri/'.$_POST['in_id'].'.jpg')) {
      echo  "has been uploaded";
    }	


$data['in_nama'] = $_POST['in_nama'];
$data['in_foto'] = 'images/galeri/'.$_POST['in_id'].'.jpg';
$galeri->updategaleri($_POST['in_id'], $data);
//print_r($_FILES);
echo "Data galeri Berhasil di update<br />";
echo "<a href='d_galeri.php?id=".$_POST['in_id']."'>Detail galeri</a>"
?>