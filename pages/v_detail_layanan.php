 <?php
require_once('libraries/m_layanan.php');
require_once('libraries/DBClass.php');
$layanan = new layanan();
$data = $layanan->readlayanan($_GET['id']);
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
			
		<span><h1><?php echo  $r['nama_pelayanan']; ?></h1></span>
		 <img src="<?php echo  $r['foto']; ?>" alt="" width='250' height='200' border='5px'>
				
					<div class="article">
						<p>
						<?php echo  $r['deskripsi']; ?>
						</p>
					</div>
			</div>
			<?php endforeach?>

</div>
</div>
</body>
</html>	