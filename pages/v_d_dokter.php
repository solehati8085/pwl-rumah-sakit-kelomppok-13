<?php 
require_once('libraries/m_dokter.php');
require_once('libraries/DBClass.php');
$dokter = new dokter();
$data = $dokter->readAllddokter();
$poli =$dokter->readAllpoli();
$dok=$dokter->readAlldokter();
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
		
	<h1>DATA DETAIL DOKTER</h1><br>
		<a href="tddokter.php?id=<?php echo  $data['id_detail_dokter']; ?>"><button>Tambah</button></a>
            <table id="provinsi" class="table table-bordered">
                <thead>
                    <tr>
                        <th width="10%">NO</th>
                        <th width="15%">NAMA</th>
                        <th width="15%">POLI</th>	
						<th width="15%">FOTO</th>
						<th width="15%">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    	<?php $no=1?>
	<?php foreach($data as $r):?>
	
		<tr align='left'>
                        <td><?php echo  $no;?></td>
                        <td><?php echo  $r['nama_dokter']; ?></td>
                        <td><?php echo  $r['nama_poli']; ?></td>
					    <td><?php echo  $r['foto']; ?></td>
                        
						<td>
                            <a href="upddokter.php?id=<?php echo  $r['id_detail_dokter']; ?>">Edit</a> | 
                            <a href="dddokter.php?id=<?php echo  $r['id_detail_dokter']; ?>">Delete</a>	 
						</td>
                    </tr><?php $no++?>
	
	<?php endforeach?>

                
                </tbody>
            </table>
				<br>
	<h1>DATA DOKTER</h1><br>

		<a href="tdokter.php?id=<?php echo  $r['id_dokter']; ?>"><button>Tambah</button></a>
            <table id="b" class="table table-bordered">
                <thead>
                    <tr>
                        <th width="10%">NO</th>
                        <th width="15%">NAMA</th>
                    	<th width="15%">ALAMAT</th>
						<th width="15%">NOMOR_TELPON</th>
						<th width="15%">RIWAYAT_PEN</th>
						<th width="15%">FOTO</th>
						<th width="15%">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    	<?php $n=1?>
	<?php foreach($dok as $r):?>
			<tr align='left'>
                        <td><?php echo  $n;?></td>
                        <td><?php echo  $r['nama_dokter']; ?></td>
                    	<td><?php echo  $r['alamat_dokter']; ?></td>
                        <td><?php echo  $r['no_telpn_dokter']; ?></td>
                        <td><?php echo  $r['riwayat_pendidikan_dokter']; ?></td>
                        <td><?php echo  $r['foto']; ?></td>
                        
						<td>
                            <a href="updokter.php?id=<?php echo  $r['id_dokter']; ?>">Edit</a> | 
                            <a href="ddokter.php?id=<?php echo  $r['id_dokter']; ?>">Delete</a>	 
						</td>
                    </tr><?php $n++?>
	<?php endforeach?>

                
                </tbody>
            </table>

	<h1>DATA POLI</h1>			
			<a href="tpoli.php?id=<?php echo  $b['id_poli']; ?>"><button>Tambah</button></a>
            <table id="a" class="table table-bordered">
                <thead>
                    <tr>
                        <th width="10%">NO</th>
                        <th width="15%">NAMA_POLI</th>
						<th width="15%">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    	<?php $ni=1?>
	<?php foreach($poli as $b):?>
		<tr align='left'>
                        <td><?php echo  $ni;?></td>
                        <td><?php echo  $b['nama_poli']; ?></td>
          
						<td>
                            <a href="uppoli.php?id=<?php echo  $b['id_poli']; ?>">Edit</a> | 
                            <a href="dpoli.php?id=<?php echo  $b['id_poli']; ?>">Delete</a>	 
						</td>
                    </tr><?php $ni++?>
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
