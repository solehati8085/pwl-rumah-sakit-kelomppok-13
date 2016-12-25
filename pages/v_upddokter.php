<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_dokter.php');
$id = $_GET['id'];
if(!is_numeric($id)){
	exit('Access Forbiden');
}
$dokter = new dokter();
$data = $dokter->readddokter($id);
$dok = $dokter->readAlldokter();
$poli = $dokter->readAllpoli();
if(empty($data)){
	exit('detail_dokter is not found');
}
?>



<h1>UBAH DATA DETAIL DOKTER</h1>
<?php 
foreach($data as $d):?>

<form action="eddokter.php" method="post" enctype="multipart/form-data"> 
ID_DETAIL: <br />
	<input type="text" value='<?php echo $d['id_detail_dokter']?>' name="in_id" readonly="true"> <br />
	
DOKTER:
<select name='in_nama'>
<option value="<?php echo $d['id_dokter'];?>"><?php echo $d['nama_dokter'];?></option>
<?php 
foreach($dok as $a):?>
<option value="<?php echo $a['id_dokter'];?>"><?php echo $a['nama_dokter'];?></option>
<?php endforeach ?>
</select>
<br />
POLI:
<select name='in_poli'>
<option value="<?php echo $d['id_poli'];?>"><?php echo $d['nama_poli'];?></option>
<?php 
foreach($poli as $b):?>
<option value="<?php echo $b['id_poli'];?>"><?php echo $b['nama_poli'];?></option>
<?php endforeach ?>
</select>

	<input type="submit" name="kirim" value="Simpan">
</form>
<?php endforeach ?>
