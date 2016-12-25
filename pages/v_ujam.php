<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_jadwal.php');
$id = $_GET['id'];
if(!is_numeric($id)){
	exit('Access Forbiden');
}
$jam = new jadwal();
$data = $jam->readjam($id);
if(empty($data)){
	exit('jam is not found');
}
?>

<h1>UBAH DATA jam</h1>
<?php foreach($data as $r):?>
<form action="ejam.php" method="post" enctype="multipart/form-data"> 
	ID_jam: <br />
	<input type="text" value='<?php echo $r['id_jam']?>' name="in_id" readonly="true"> <br />
	Nama jam: <br />
	<input type="text" name="in_nama" value='<?php echo $r['nama_jam']?>'> <br />
	<input type="submit" name="kirim" value="Simpan">
</form>
<?php endforeach;?>