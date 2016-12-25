<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_admin.php');
$id = $_GET['id'];
if(!is_numeric($id)){
	exit('Access Forbiden');
}
$admin = new admin();
$data = $admin->deleteadmin($id);
if(empty($data)){
	echo "data berhasil dihapus";
}
?>

<br />
<a href="d_admin.php">Kembali </a>