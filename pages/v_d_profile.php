
 <?php
require_once('libraries/m_profile.php');
require_once('libraries/DBClass.php');
$profile = new profile();
$data = $profile->readAllprofile();
?>
<!doctype html>
<html>
    <head>
        <title>LAYANAN</title>
    </head>
    <body>
        <div class="container">
<?php		if(empty($data)){?>
		<a href="tprofile.php"><button>Tambah</button></a>
	
	<?php
	}?>
	
            
     	<?php foreach($data as $r):?>
	<div>
			VISI:<br>
			<?php echo  $r['visi_profile'];?>
	</div>	
		<div>
		MISI<br>
			<?php echo  $r['misi_profile']; ?>
</div>		
	<div>	SEJARAH<br>
            <?php echo  $r['sejarah_profile']; ?>            
</div>	    
		<br><a href="uprofile.php?id=<?php echo  $r['id_profile']; ?>"><button>Edit</button></a>  
            <a href="dprofile.php?id=<?php echo  $r['id_profile']; ?>"><button>Delete</button></a>
					
	
	<?php endforeach?>

</body>
</html>
