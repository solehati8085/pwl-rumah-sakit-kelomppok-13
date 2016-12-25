<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_even.php');
$id = $_GET['id'];
if(!is_numeric($id)){
	exit('Access Forbiden');
}
$event = new event();
$d = $event->readevent($id);
foreach ($d as $a):
$c=($a['foto']);
unlink($c);
endforeach;
$data = $event->deleteevent($id);
if(empty($data)){
	echo "data berhasil dihapus";
}
?>

<br />
<a href="d_even.php">Kembali </a>