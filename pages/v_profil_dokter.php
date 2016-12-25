<?php
require_once('libraries/m_dokter.php');
require_once('libraries/DBClass.php');
$profile = new dokter();
$data = $profile->readAllddokter();
?>

 <?php foreach($data as $r):?>
<ul>
<a href="detail_dokter.php?id=<?php echo  $r['id_detail_dokter']; ?>">
<li>
<div>
<div class="figure">
<span><h2><?php echo  $r['nama_dokter']; ?></h2></span>
 <img src="<?php echo  $r['foto'];?>" alt='foto-profil' width='100' height='100' border='5px'>
<?php echo  $r['nama_poli']; ?>

</div>
</div>
</li>
</a>

</ul>
				<?php endforeach?>