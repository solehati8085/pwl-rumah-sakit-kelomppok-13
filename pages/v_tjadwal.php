<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_jadwal.php');
$jadwal = new jadwal();
$hari=$jadwal->readAllhari();
$jam=$jadwal->readAlljam();
require_once('libraries/m_dokter.php');
$dokter = new dokter();
$dok = $dokter->readAllddokter();


if (isset($_POST['kirim'])) {
	$tambah = $jadwal->createjadwal($_POST['in_dok'],$_POST['in_hari'],$_POST['in_jam']);
	echo "data jadwal berhasil ditambahkan <br /> <br />";
}
?>
<h1>Tambah Data Jadwal</h1>
<form action="tjadwal.php" method="POST"> 
	DOKTER:
<select name='in_dok'>
<option value="">-NAMA DOKTER-</option>
<?php 
foreach($dok as $n):?>
<option value="<?php echo $n['id_detail_dokter'];?>"><?php echo $n['nama_dokter'];?></option>
<?php endforeach ?>
</select>
	<br/>HARI:
	<select name='in_hari'>
<option value="">-NAMA HARI-</option>
<?php 
foreach($hari as $n):?>
<option value="<?php echo $n['id_hari'];?>"><?php echo $n['nama_hari'];?></option>
<?php endforeach ?>
</select>
	
	<br/>JAM: 
	<select name='in_jam'>
<option value="">-NAMA JAM-</option>
<?php 
foreach($jam as $n):?>
<option value="<?php echo $n['id_jam'];?>"><?php echo $n['nama_jam'];?></option>
<?php endforeach ?>
</select>
	<input type="submit" name="kirim" value="Simpan">
</form>