
 <?php
require_once('libraries/m_layanan.php');
require_once('libraries/DBClass.php');
$layanan = new layanan();
$data = $layanan->readAlllayanan();
?>
<!doctype html>
<html>
    <head>
        <title>LAYANAN</title>
        <link rel="stylesheet" href="libraries/datatables/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="libraries/datatables/css/dataTables.bootstrap.css"/>
    </head>
    <body>
        <div class="container">
		<a href="tlayanan.php?id=<?php echo  $data['id_pelayanan']; ?>"><button>Tambah</button></a>
            
		<table id="provinsi" class="table table-bordered">
                <thead>
                    <tr>
                        <th width="10%">NO</th>
                        <th width="15%">Nama_Pelayanan</th>
                        <th width="15%">Deskripsi</th>
						<th width="15%">FOTO</th>
						<th width="15%">AKSI</th>
                    </tr>
                </thead>
    <?php $no=1?>
	<?php foreach($data as $r):?>
	
         <tr align='left'>
                        <td><?php echo  $no;?></td>
                        <td><?php echo  $r['nama_pelayanan']; ?></td>
                        <td><?php echo  $r['deskripsi']; ?></td>
                         <td><?php echo  $r['foto']; ?></td>
                       
                      						<td>
                            <a href="ulayanan.php?id=<?php echo  $r['id_pelayanan']; ?>">Edit</a> | 
                            <a href="dlayanan.php?id=<?php echo  $r['id_pelayanan']; ?>">Delete</a>
							 
						</td>
                    </tr>
           
					<?php $no++?>
	
	<?php endforeach?>

               
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
