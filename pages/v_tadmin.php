<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_admin.php');
$admin = new admin();
$data_nation = $admin->readAlladmin();
if (isset($_POST['kirim'])) {
	$tambah = $admin->createadmin($_POST['in_name'], $_POST['in_password']);
	echo "data admin berhasil ditambahkan <br /> <br />";
}
?>

<h1>Tambah Data Admin</h1>
<form action="tadmin.php" method="POST"> 
	Nama lengkap: <br />
	<input type="text" name="in_name"> <br />
	Password: <br />
	<input type="text" name="in_password"> <br />
	 <br /> <br />
	<input type="submit" name="kirim" value="Simpan">
</form>