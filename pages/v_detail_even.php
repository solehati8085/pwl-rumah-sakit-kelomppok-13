 <?php
require_once('libraries/m_even.php');
require_once('libraries/DBClass.php');
$event = new event();
$data = $event->readevent($_GET['id']);
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
			
				<span><?php echo  $r['tgl_event']; ?></span>
		<br><h2><?php echo  $r['judul_event']; ?></h2></span> 
		<img src='<?php echo  $r['foto']; ?>' alt='foto-profil' width='100' height='100' border='5px'></div>

					<div class="article">
						<p>
						<?php echo  $r['isi_event']; ?>
						</p>
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