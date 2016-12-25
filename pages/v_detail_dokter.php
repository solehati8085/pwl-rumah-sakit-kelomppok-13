 <?php
require_once('libraries/m_dokter.php');
require_once('libraries/m_jadwal.php');
require_once('libraries/DBClass.php');
$dokter = new dokter();
$jadwal = new jadwal();
$data = $dokter->readddokter($_GET['id']);
$data_jadwal = $jadwal->readjadwalindividu($_GET['id']);

?>
<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <title>DOKTER</title>
        <link rel="stylesheet" href="libraries/datatables/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="libraries/datatables/css/dataTables.bootstrap.css"/>
    
	</head>
<body>
	<div id="body">
	<?php foreach($data as $r):?>
		<div id="blog">
			
				<span><h1><?php echo  $r['nama_dokter']; ?></h1></span>
				
	<img src="<?php echo  $r['foto']; ?>" alt='foto-profil' width='200' height='200' border='5px'>
					<div class="article">
						<p>
						<b>NAMA DOKTER:</b>
						<?php echo  $r['nama_dokter']; ?>
						<br><b> NAMA POLI:</b>
						<?php echo  $r['nama_poli']; ?>
						<br><b> ALAMAT:</b>
						<?php echo  $r['alamat_dokter']; ?>
						<br> <b>NO TELEPON:</b>
						<?php echo  $r['no_telpn_dokter']; ?>
						<br> <b>RIWAYAT PENDIDIKAN:</b>
						<?php echo  $r['riwayat_pendidikan_dokter']; ?>
						
						</p>
					</div>
				
			</div>
			<?php endforeach?>
<div class="container">
<hr/>

		    <table id="provinsi" class="table table-bordered">
                <thead>
                    <tr>
					<th width="10%">DOKTER</th>
                        <th width="10%">DOKTER</th>
                        <th width="15%">POLI</th>
                        <th width="15%">HARI</th>	
						<th width="15%">JAM</th>
	                </tr>
                </thead>
                <tbody>
                    	<?php $no=0?>
	<?php foreach($data_jadwal as $r):?>
	
		<tr align='left'>
		<td><?php echo  $r['id_jadwal']; ?></td>
                        <td><?php echo  $r['nama_dokter']; ?></td>
                        <td><?php echo  $r['nama_poli']; ?></td>
					    <td><?php echo  $r['nama_hari']; ?></td>
					    <td><?php echo  $r['nama_jam']; ?></td>
                                                
	                </tr><?php $no++?>
	
	<?php endforeach?>

                
                </tbody>
            </table>

        </div>
        
        <script src="libraries/datatables/js/jquery-1.11.0.js"></script>
        <script src="libraries/datatables/js/bootstrap.min.js"></script>
        <script src="libraries/datatables/datatables/jquery.dataTables.js"></script>
        <script src="libraries/datatables/datatables/dataTables.bootstrap.js"></script>
        <script type="text/javascript">
            $(function() {
                $("#provinsi").dataTable();
            });
        </script>
</div>
</div>
		</body>
</html>	
