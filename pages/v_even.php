 <?php
require_once('libraries/m_even.php');
require_once('libraries/DBClass.php');
$event = new event();
$data = $event->readAllevent();
?>
<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>Blog - Laboratory Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="body">
	<?php foreach($data as $r):?>
		<div id="blog">
			<div>
				<span><?php echo  $r['tgl_event']; ?></span>
				<div>

				<div class="figure">
					<span><h2><?php echo  $r['judul_event']; ?></h2></span>
					<img src="<?php echo  $r['foto']; ?>" alt='foto-profil' width='100' height='100' border='5px'></div>

				
					</div>
					<div class="article">
						<p>
						<?php echo  $r['isi_event']; ?>
						</p>
						<a href="detail_even.php?id=<?php echo  $r['id_event']; ?>" class="more" >read more</a>
					</div>
				</div>
				<div class="stats">
					<i>Posted by <a href="#" >Admin</a> in <a href="" >RUMAH SAKIT KITA</a></i>
				</div>
			</div>
			<?php endforeach?>

</div>
</div>
</body>
</html>	