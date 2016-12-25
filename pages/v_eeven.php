<?php 
require_once('libraries/DBClass.php');
require_once('libraries/m_even.php');
if (!isset($_POST['kirim'])){
	exit('Access Forbiden');
}
$event = new event();
$d = $event->readevent($_POST['in_id']);


if (move_uploaded_file($_FILES["in_foto"]["tmp_name"], 'images/event/'.$_POST['in_id'].'.jpg')) {
      echo  "has been uploaded";
    }	


$data['in_id'] = $_POST['in_id'];
$data['in_judul'] = $_POST['in_judul'];
$data['in_isi'] = $_POST['in_isi'];
$data['in_tgl'] = $_POST['in_tgl'];
$data['in_foto'] = 'images/event/'.$_POST['in_id'].'.jpg';
$event->updateevent($_POST['in_id'], $data);
//print_r($_FILES);
echo "Data event Berhasil di update<br />";
echo "<a href='ueven.php?id=".$_POST['in_id']."'>Detail admin</a>"
?>