<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_dokter.php');
$id = $_GET['id'];
if(!is_numeric($id)){
	exit('Access Forbiden');
}
$dokter = new dokter();
$data = $dokter->readdokter($id);
if(empty($data)){
	exit('dokter is not found');
}
?>

<h1>UBAH DATA DOKTER</h1>
<?php foreach($data as $r):?>
<form action="edokter.php" method="post" enctype="multipart/form-data"> 
	ID_DOKTER: <br />
	<input type="text" value='<?php echo $r['id_dokter']?>' name="in_id" readonly="true"> <br />
	Nama lengkap: <br />
	<input type="text" name="in_nama" value='<?php echo $r['nama_dokter']?>'> <br />
	ALAMAT: <br />
	<input type="text" name="in_alamat" value='<?php echo $r['alamat_dokter']?>'> <br />
	NO HP: <br />
	<input type="text" name="in_no" value='<?php echo $r['no_telpn_dokter']?>'> <br />
	RIWAYAT_PEND: <br />
	<input type="text" name="in_riwayat" value='<?php echo $r['riwayat_pendidikan_dokter']?>'> 
	<br>FOTO: <br />
	<input type="file" name="in_foto" value='<?php echo $r['foto']?>' onchange="PreviewImage()">
	<?php if(!empty($r['foto'])){?>
		<img src="<?php echo $r['foto']?>" width='100'/>
	<?php }?>
	<br /> <br /><input type="submit" name="kirim" value="Simpan">
</form>
<?php endforeach;?>