<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_profile.php');
$id = $_GET['id'];
if(!is_numeric($id)){
	exit('Access Forbiden');
}
$profile = new profile();
$data = $profile->deleteprofile($id);
if(empty($data)){
	echo "data profile berhasil dihapus";
}
?>

<br />
<a href="d_profile.php">Kembali </a>