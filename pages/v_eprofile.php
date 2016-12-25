<?php 
require_once('libraries/DBClass.php');
require_once('libraries/m_profile.php');
if (!isset($_POST['kirim'])){
	exit('Access Forbiden');
}
$profile = new profile();
$data['in_visi'] = $_POST['in_visi'];
$data['in_misi'] = $_POST['in_misi'];
$data['in_sejarah'] = $_POST['in_sejarah'];
$profile->updateprofile($_POST['in_id'], $data);
//print_r($_FILES);
echo "Data profile Berhasil di update<br />";
echo "<a href='d_profile.php?id=".$_POST['in_id']."'>profile</a>"
?>