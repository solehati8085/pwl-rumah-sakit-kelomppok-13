 <?php
require_once('libraries/m_profile.php');
require_once('libraries/DBClass.php');
$profile = new profile();
$data = $profile->readAllprofile();
?>

		<h1>PROFILE RUMAH SAKIT KITA</h1>
<br>

<?php foreach($data as $r):?>
<span>
<h2>VISI RUMAH SAKIT:</h2><br>					
	<?php echo  $r['visi_profile']; ?><br>
<hr/>
<h2>MISI RUMAH SAKIT:</h2><br>
<?php echo  $r['misi_profile']; ?>
<hr/>
<h2>SEJARAH RUMAH SAKIT:</h2><br>	
	<?php echo  $r['sejarah_profile']; ?>
</span>
	<?php endforeach?>
