<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_galeri.php');
$id = $_GET['id'];
if(!is_numeric($id)){
	exit('Access Forbiden');
}
$galeri = new galeri();
$data = $galeri->readgaleri($id);
if(empty($data)){
	exit('galeri is not found');
}
?>
<body>
<h1>UBAH DATA galeri</h1>
<?php foreach($data as $r):?>
<form action="egaleri.php" method="post" enctype="multipart/form-data"> 
	ID: <br />
	<input type="text" name="in_id" value='<?php echo $r['id_galeri']?>' readonly='true'> <br />
	NAMA: <br />
	<input type="text" name="in_nama" value='<?php echo $r['nama']?>'> <br />
	FOTO: <br />
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