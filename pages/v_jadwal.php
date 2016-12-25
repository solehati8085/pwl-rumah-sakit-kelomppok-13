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
	<?php foreach($jadwal as $r):?>
	
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
    </body>
</html>
