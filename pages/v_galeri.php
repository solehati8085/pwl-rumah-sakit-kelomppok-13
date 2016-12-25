<?php 
require_once('libraries/m_galeri.php');
require_once('libraries/DBClass.php');
$j = new galeri();
$galeri = $j->readAllgaleri();
?>
<!doctype html>
<html>
    <head>
        <title>GALERI</title>
    </head>
    <body>
        <div class="container">
		
	<h1>GALERI</h1><br>    
<ul>
	<?php foreach($galeri as $r):?>

	
	<div class="artikel">	
<li>
	<h2><?php echo  $r['nama']; ?></h2><BR>
	<img src="<?php echo $r['foto']?>" width='200'/>
</li>
</div>

<?php endforeach?>
</ul>                
                   </body>
</html>
