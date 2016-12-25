<?php 
require_once('libraries/m_jadwal.php');
require_once('libraries/DBClass.php');
$j = new jadwal();
$jadwal = $j->readAlljadwal();
$hari =$j->readAllhari();
$jam=$j->readAlljam();
?>
<!doctype html>
<html>
    <head>
        <title>DOKTER</title>
        <link rel="stylesheet" href="libraries/datatables/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="libraries/datatables/css/dataTables.bootstrap.css"/>
    </head>
    <body>
        <div class="container">
		
	<h1>DATA JADWAL</h1><br>
		<a href="tjadwal.php"><button>Tambah</button></a>
            <table id="provinsi" class="table table-bordered">
                <thead>
                    <tr>
					<th width="10%">DOKTER</th>
                        <th width="10%">DOKTER</th>
                        <th width="15%">POLI</th>
                        <th width="15%">HARI</th>	
						<th width="15%">JAM</th>
						<th width="15%">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    	<?php $no=0?>
	<?php foreach($jadwal as $r):?>
	
		<tr align='left'>
		<td><?php echo  $r['id_jadwal']; ?></td>
                        <td><?php echo  $r['nama_dokter']; ?></td>
                        <td><?php echo  $r['nama_poli']; ?></td>
					    <td><?php echo  $r['nama_hari']; ?></td>
					    <td><?php echo  $r['nama_jam']; ?></td>
                                                
						<td>
                            <a href="ujadwal.php?id=<?php echo $r['id_jadwal']; ?>">Edit</a> | 
                            <a href="djadwal.php?id=<?php echo $r['id_jadwal']; ?>">Delete</a>	 
						</td>
                    </tr><?php $no++?>
	
	<?php endforeach?>

                
                </tbody>
            </table>
				<br>
	<h1>DATA HARI KERJA</h1><br>

		<a href="thari.php"><button>Tambah</button></a>
            <table id="b" class="table table-bordered">
                <thead>
                    <tr>
                        <th width="10%">ID HARI</th>
                        <th width="15%">NAMA_HARI</th>
                    	<th width="15%">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    	<?php $no=0?>
	<?php foreach($hari as $r):?>
			<tr align='left'>
                        <td><?php echo  $r['id_hari'];;?></td>
                        <td><?php echo  $r['nama_hari']; ?></td>
                    	
						<td>
                            <a href="uhari.php?id=<?php echo  $r['id_hari']; ?>">Edit</a> | 
                            <a href="dhari.php?id=<?php echo  $r['id_hari']; ?>">Delete</a>	 
						</td>
                    </tr><?php $no++?>
	<?php endforeach?>

                
                </tbody>
            </table>

	<h1>DATA JAM KERJA</h1>			
			<a href="tjam.php"><button>Tambah</button></a>
            <table id="a" class="table table-bordered">
                <thead>
                    <tr>
                        <th width="10%">ID_JAM</th>
                        <th width="15%">JAM KERJA</th>
						<th width="15%">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    	<?php $no=0?>
	<?php foreach($jam as $b):?>
		<tr align='left'>
                        <td><?php echo  $b['id_jam'];;?></td>
                        <td><?php echo  $b['nama_jam']; ?></td>
          
						<td>
                            <a href="ujam.php?id=<?php echo  $b['id_jam']; ?>">Edit</a> | 
                            <a href="djam.php?id=<?php echo  $b['id_jam']; ?>">Delete</a>	 
						</td>
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
			$(function() {
                $("#a").dataTable();
            });
			
			$(function() {
                $("#b").dataTable();
            });
        </script>
    </body>
</html>
