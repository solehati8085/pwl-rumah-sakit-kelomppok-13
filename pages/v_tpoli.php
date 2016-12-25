<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_dokter.php');
$dokter = new dokter();
if (isset($_POST['kirim'])) {
	$tambah = $dokter->createpoli($_POST['in_nama']);
	echo "data dokter berhasil ditambahkan <br /> <br />";
}
?>
<h1>Tambah Data POLI</h1>
<form action="tpoli.php" method="POST"> 
	Nama Poli: <br />
	<input type="text" name="in_nama"> <br />
	<input type="submit" name="kirim" value="Simpan">
</form>