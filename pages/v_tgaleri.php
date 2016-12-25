<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_galeri.php');
$galeri = new galeri();
$data_nation = $galeri->readAllgaleri();
if (isset($_POST['kirim'])) {
if(!copy($_FILES['in_foto']['tmp_name'],'images/galeri/'.$_POST['in_nama'].'.jpg')){
	exit('Error upload file');
}
	$tambah = $galeri->creategaleri($_POST['in_nama'],'images/galeri/'.$_POST['in_nama'].'.jpg');
	echo "data galeri berhasil ditambahkan <br /> <br />";
}
?>
<!DOCTYPE html>
<html>
<body>
     
<h1>Tambah Data galeri</h1>
<form action="tgaleri.php" method="POST" enctype="multipart/form-data"> 
	Nama galeri: <br />
	<input type="text" name="in_nama"> <br />
	<br>FOTO: <br />
	<input type="file" name="in_foto" onchange="PreviewImage()">
	<br /> <br />
	
	<input type="submit" name="kirim" value="Simpan">
</form>
	 
	 
	
	 
	 
	 
</body>
</html>