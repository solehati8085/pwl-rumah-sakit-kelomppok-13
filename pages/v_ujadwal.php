<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_jadwal.php');
$id = $_GET['id'];
if(!is_numeric($id)){
	exit('Access Forbiden');
}

$jadwal = new jadwal();
$data= $jadwal->readjadwal($id);
$hari=$jadwal->readAllhari();
$jam=$jadwal->readAlljam();
require_once('libraries/m_dokter.php');
$dokter = new dokter();
$dok = $dokter->readAllddokter();

if(empty($data)){
	exit('detail_jadwal is not found');
}
?>

<h1>UBAH DATA DETAIL jadwal</h1>
<?php 
foreach($data as $d):?>

<form action="ejadwal.php" method="POST"> 
	ID_DETAIL: <br />
	<input type="text" value='<?php echo $d['id_jadwal']?>' name="in_id" readonly="true"> <br />

	DOKTER:
<select name='in_dok'>
<option value="<?php echo $d['id_detail_dokter'];?>"><?php echo $d['nama_dokter'];?></option>
<?php 
foreach($dok as $n):?>
<option value="<?php echo $n['id_detail_dokter'];?>"><?php echo $n['nama_dokter'];?></option>
<?php endforeach ?>
</select>
	<br/>HARI:
	<select name='in_hari'>
<option value="<?php echo $d['id_hari'];?>"><?php echo $d['nama_hari'];?></option>
<?php 
foreach($hari as $n):?>
<option value="<?php echo $n['id_hari'];?>"><?php echo $n['nama_hari'];?></option>
<?php endforeach ?>
</select>
	
	<br/>JAM: 
	<select name='in_jam'>
<option value="<?php echo $d['id_jam'];?>"><?php echo $d['nama_jam'];?></option>
<?php 
foreach($jam as $n):?>
<option value="<?php echo $n['id_jam'];?>"><?php echo $n['nama_jam'];?></option>
<?php endforeach;?>
</select>
	<input type="submit" name="kirim" value="Simpan">
</form>
<?php endforeach ?>