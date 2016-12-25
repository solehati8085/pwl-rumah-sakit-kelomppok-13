<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_even.php');
$id = $_GET['id'];
if(!is_numeric($id)){
	exit('Access Forbiden');
}
$event = new event();
$data = $event->readevent($id);
if(empty($data)){
	exit('admin is not found');
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
<h1>UBAH DATA EVENT</h1>
<?php foreach($data as $r):?>
<form action="eeven.php" method="post" enctype="multipart/form-data"> 
	ID: <br />
	<input type="text" name="in_id" value='<?php echo $r['id_event']?>' readonly='true'> <br />
	
	JUDUL: <br />
	<input type="text" name="in_judul" value='<?php echo $r['judul_event']?>'> <br />
	ISI EVENT: <br />
	 <textarea name="in_isi" value=''><?php echo $r['isi_event']?></textarea>
<br>
	TANGGAL EVENT: <br />
	<input type="text" name="in_tgl" value='<?php echo $r['tgl_event']?>'> <br />
<br>FOTO: <br />
	<input type="file" name="in_foto" value='<?php echo $r['foto']?>' onchange="PreviewImage()">
	<?php if(!empty($r['foto'])){?>
		<img src="<?php echo $r['foto']?>" width='100'/>
	<?php }?>	
	<br /> <br />
	
	<input type="submit" name="kirim" value="Simpan">

	</form>

<?php endforeach;?>
</body>
</html>