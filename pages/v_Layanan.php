 <?php
require_once('libraries/m_layanan.php');
require_once('libraries/DBClass.php');
$layanan = new layanan();
$data = $layanan->readAlllayanan();
?>

		<ul>
			  <?php foreach($data as $r):?>
			<a href='detail_layanan.php?id=<?php echo  $r['id_pelayanan']; ?>'>
			<li>
				<div class="figure">
				
<span><h2><?php echo  $r['nama_pelayanan']; ?></h2></span> 
<img src="<?php echo  $r['foto']; ?>" alt='foto-profil' width='100' height='100' border='5px'></div>
				<div class="article">
					<p>          
					
					</p>
					
				</div>
			</li><a>
			<hr/>
				<?php endforeach?>
		</ul>
	