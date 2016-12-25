<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_dokter.php');
$dokter = new dokter();
$dok = $dokter->readAlldokter();
$poli=$dokter->readAllpoli();
if (isset($_POST['kirim'])) {
	$tambah = $dokter->createddokter($_POST['in_dok'], $_POST['in_pol']);
	echo "data detail dokter berhasil ditambahkan <br /> <br />";
}
?>

<h1>Tambah Data Detail Dokter</h1>

<form action="tddokter.php" method="POST"> 
DOKTER:
<select name='in_dok'>
<option value="">-NAMA DOKTER-</option>
<?php 
foreach($dok as $n):?>
<option value="<?php echo $n['id_dokter'];?>"><?php echo $n['nama_dokter'];?></option>
<?php endforeach ?>
</select>
<br />
POLI:
<select name='in_pol'>
<option value="">-NAMA POLI-</option>
<?php 
foreach($poli as $n):?>
<option value="<?php echo $n['id_poli'];?>"><?php echo $n['nama_poli'];?></option>
<?php endforeach ?>
</select>

	<input type="submit" name="kirim" value="Simpan">
</form>