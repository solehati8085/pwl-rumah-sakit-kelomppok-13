<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_layanan.php');
$id = $_GET['id'];
if(!is_numeric($id)){
	exit('Access Forbiden');
}
$layanan = new layanan();
$data = $layanan->readlayanan($id);
if(empty($data)){
	exit('layanan is not found');
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
<h1>UBAH DATA LAYANAN</h1>
<?php foreach($data as $r):?>
<form action="elayanan.php" method="post" enctype="multipart/form-data"> 
	ID: <br />
	<input type="text" name="in_id" value='<?php echo $r['id_pelayanan']?>' readonly='true'> <br />
	
	NAMA: <br />
	<input type="text" name="in_nama" value='<?php echo $r['nama_pelayanan']?>'> <br />
	DESKRIPSI: <br />
	 <textarea name="in_deskripsi" value=''><?php echo $r['deskripsi']?></textarea>
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