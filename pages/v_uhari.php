<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_jadwal.php');
$id = $_GET['id'];
if(!is_numeric($id)){
	exit('Access Forbiden');
}
$hari = new jadwal();
$data = $hari->readhari($id);
if(empty($data)){
	exit('hari is not found');
}
?>

<h1>UBAH DATA hari</h1>
<?php foreach($data as $r):?>
<form action="ehari.php" method="post" enctype="multipart/form-data"> 
	ID_hari: <br />
	<input type="text" value='<?php echo $r['id_hari']?>' name="in_id" readonly="true"> <br />
	Nama Hari: <br />
	<input type="text" name="in_nama" value='<?php echo $r['nama_hari']?>'> <br />
	<input type="submit" name="kirim" value="Simpan">
</form>
<?php endforeach;?>