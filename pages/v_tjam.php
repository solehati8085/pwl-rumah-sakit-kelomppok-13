<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_jadwal.php');
$jadwal = new jadwal();
if (isset($_POST['kirim'])) {
	$tambah = $jadwal->createjam($_POST['in_nama']);
	echo "data jadwal berhasil ditambahkan <br /> <br />";
}
?>
<h1>Tambah Data jam</h1>
<form action="tjam.php" method="POST"> 
	Nama jam: <br />
	<input type="text" name="in_nama"> <br />
	<input type="submit" name="kirim" value="Simpan">
</form>