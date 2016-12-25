<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_even.php');
$event = new event();
$data_nation = $event->readAllevent();

if (isset($_POST['kirim'])) {
		if(!copy($_FILES['in_foto']['tmp_name'],'images/event/'.$_POST['in_tgl'].'.jpg')){
	exit('Error upload file');
}
	$tambah = $event->createevent($_POST['in_judul'], $_POST['in_isi'],$_POST['in_tgl'],'images/event/'.$_POST['in_tgl'].'.jpg');
	echo "data event berhasil ditambahkan <br /> <br />";
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
     
<h1>Tambah Data EVEN</h1>
<form action="teven.php" method="POST" enctype="multipart/form-data"> 
	JUDUL: <br />
	<input type="text" name="in_judul"> <br />
	ISI EVENT: <br />
	 <textarea name="in_isi"></textarea>

	TANGGAL EVENT: <br />
	<input type="text" name="in_tgl"> <br />
	  
	FOTO: <br />
	<input type="file" name="in_foto" onchange="PreviewImage()">
	<br /> <br />
	
	<input type="submit" name="kirim" value="Simpan">
</form>
	 
	 
	
	 
	 
	 
</body>
</html>