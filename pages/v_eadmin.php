<?php 
require_once('libraries/DBClass.php');
require_once('libraries/m_admin.php');
if (!isset($_POST['kirim'])){
	exit('Access Forbiden');
}
$admin = new admin();

$data['in_nama'] = $_POST['in_nama'];
$data['in_password'] = $_POST['in_password'];
$admin->updateadmin($_POST['in_id'], $data);
//print_r($_FILES);
echo "Data admin Berhasil di update<br />";
echo "<a href='uadmin.php?id=".$_POST['in_id']."'>Detail admin</a>"
?>