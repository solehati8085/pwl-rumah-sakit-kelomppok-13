
 <?php
require_once('libraries/m_galeri.php');
require_once('libraries/DBClass.php');
$galeri = new galeri();
$data = $galeri->readAllgaleri();
?>
<!doctype html>
<html>
    <head>
        <title>galeri</title>
        <link rel="stylesheet" href="libraries/datatables/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="libraries/datatables/css/dataTables.bootstrap.css"/>
    </head>
    <body>
        <div class="container">
		<a href="tgaleri.php"><button>Tambah</button></a>
            
		<table id="provinsi" class="table table-bordered">
                <thead>
                    <tr>
                        <th width="10%">NO</th>
                        <th width="15%">Nama_galeri</th>
                        <th width="15%">Foto</th>
						<th width="15%">AKSI</th>
                    </tr>
                </thead>
    <?php $no=1?>
	<?php foreach($data as $r):?>
	
         <tr align='left'>
                        <td><?php echo  $no;?></td>
                        <td><?php echo  $r['nama']; ?></td>
                        <td><?php echo  $r['foto']; ?></td>
                        
						<td>
                            <a href="ugaleri.php?id=<?php echo  $r['id_galeri']; ?>">Edit</a> | 
                            <a href="dgaleri.php?id=<?php echo  $r['id_galeri']; ?>">Delete</a>
							 
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
