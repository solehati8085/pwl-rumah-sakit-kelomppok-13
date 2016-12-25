<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_profile.php');
$profile = new profile();
$data_nation = $profile->readAllprofile();
if (isset($_POST['kirim'])) {
	$tambah = $profile->createprofile($_POST['in_visi'], $_POST['in_misi'],$_POST['in_sejarah']);
	echo "data profile berhasil ditambahkan <br /> <br />";
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
     
<h1>Tambah Data profile</h1>
<form action="tprofile.php" method="POST"> 
	VISI: <br />
<textarea name="in_visi"></textarea><br>
	MISI: <br />
	 <textarea name="in_misi"></textarea><br>
	SEJARAH: <br />
	 <textarea name="in_sejarah"></textarea><br>
	<input type="submit" name="kirim" value="Simpan">
</form>
	 
	 
	
	 
	 
	 
</body>
</html>