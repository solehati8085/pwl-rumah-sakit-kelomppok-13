<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_dokter.php');
$dokter = new dokter();
if (isset($_POST['kirim'])) {
	if(!copy($_FILES['in_foto']['tmp_name'],'images/dokter/'.$_POST['in_no'].'.jpg')){
	exit('Error upload file');
}
	$tambah = $dokter->createdokter($_POST['in_nama'], $_POST['in_alamat'],$_POST['in_no'],$_POST['in_riwayat'],'images/dokter/'.$_POST['in_no'].'.jpg');
	echo "data dokter berhasil ditambahkan <br /> <br />";
}
?>
<h1>Tambah Data DOKTER</h1>
<form action="tdokter.php" method="POST" enctype="multipart/form-data"> 
	Nama lengkap: <br />
	<input type="text" name="in_nama"> <br />
	ALAMAT: <br />
	<input type="text" name="in_alamat"> <br />
	NO HP: <br />
	<input type="text" name="in_no"> <br />
	RIWAYAT_PEND: <br />
	<input type="text" name="in_riwayat"> <br />
	FOTO: <br />
	<input type="file" name="in_foto" onchange="PreviewImage()">
	<br /> <br />
	<input type="submit" name="kirim" value="Simpan">
</form>