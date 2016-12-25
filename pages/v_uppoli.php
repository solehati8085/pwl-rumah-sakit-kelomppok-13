<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_dokter.php');
$id = $_GET['id'];
if(!is_numeric($id)){
	exit('Access Forbiden');
}
$dokter = new dokter();
$data = $dokter->readpoli($id);
if(empty($data)){
	exit('poli is not found');
}
?>

<h1>UBAH DATA POLI</h1>
<?php foreach($data as $r):?>
<form action="epoli.php" method="post" enctype="multipart/form-data"> 
	ID_POLI: <br />
	<input type="text" value='<?php echo $r['id_poli']?>' name="in_id" readonly="true"> <br />
	Nama POLI: <br />
	<input type="text" name="in_nama" value='<?php echo $r['nama_poli']?>'> <br />
	<input type="submit" name="kirim" value="Simpan">
</form>
<?php endforeach;?>