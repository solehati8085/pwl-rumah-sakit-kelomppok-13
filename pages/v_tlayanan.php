<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_layanan.php');
$layanan = new layanan();
$data_nation = $layanan->readAlllayanan();
if (isset($_POST['kirim'])) {
if(!copy($_FILES['in_foto']['tmp_name'],'images/layanan/'.$_POST['in_nama'].'.jpg')){
	exit('Error upload file');
}
	$tambah = $layanan->createlayanan($_POST['in_nama'], $_POST['in_deskripsi'],'images/layanan/'.$_POST['in_nama'].'.jpg');
	echo "data layanan berhasil ditambahkan <br /> <br />";
}
?>
<!DOCTYPE html>
<html>
<head>
<script src="./tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>
</head>
<body>
     
<h1>Tambah Data Layanan</h1>
<form action="tlayanan.php" method="POST" enctype="multipart/form-data"> 
	Nama layanan: <br />
	<input type="text" name="in_nama"> <br />
	Deskripsi: <br />
	 <textarea name="in_deskripsi"></textarea>
	<br>FOTO: <br />
	<input type="file" name="in_foto" onchange="PreviewImage()">
	<br /> <br />
	
	<input type="submit" name="kirim" value="Simpan">
</form>
	 
	 
	
	 
	 
	 
</body>
</html>