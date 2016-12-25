<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_profile.php');
$id = $_GET['id'];
if(!is_numeric($id)){
	exit('Access Forbiden');
}
$profile = new profile();
$data = $profile->readprofile($id);
if(empty($data)){
	exit('profile is not found');
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
<h1>UBAH DATA profile</h1>
<?php foreach($data as $r):?>
<form action="eprofile.php" method="post" enctype="multipart/form-data"> 
	ID:<br>
		<input type="text" name="in_id" value='<?php echo $r['id_profile']?>' readonly='true'> <br />
	
	VISI: <br />
<textarea name="in_visi" value='<?php echo $r['visi_profile']?>'><?php echo $r['visi_profile']?></textarea><br>
	MISI: <br />
	 <textarea name="in_misi" value='<?php echo $r['misi_profile']?>'><?php echo $r['misi_profile']?></textarea><br>
	SEJARAH: <br />
	 <textarea name="in_sejarah" value='<?php echo $r['sejarah_profile']?>'><?php echo $r['sejarah_profile']?></textarea><br>
	<input type="submit" name="kirim" value="Simpan">
</form>

<?php endforeach;?>
</body>
</html>