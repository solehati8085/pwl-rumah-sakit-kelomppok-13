
 <?php
require_once('libraries/m_admin.php');
require_once('libraries/DBClass.php');
$admin = new admin();
$data = $admin->readAlladmin();
?>
<!doctype html>
<html>
    <head>
        <title>ADMIN</title>
        <link rel="stylesheet" href="libraries/datatables/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="libraries/datatables/css/dataTables.bootstrap.css"/>
    </head>
    <body>
        <div class="container">
		<a href="tadmin.php?id=<?php echo  $data['id_admin']; ?>"><button>Tambah</button></a>
            
		<table id="provinsi" class="table table-bordered">
                <thead>
                    <tr>
                        <th width="10%">Id_Admin</th>
                        <th width="15%">Nama_Admin</th>
                        <th width="15%">Password</th>
						<th width="15%">AKSI</th>
                    </tr>
                </thead>
    <?php $no=0?>
	<?php foreach($data as $r):?>
	
         <tr align='left'>
                        <td><?php echo  $r['id_admin'];;?></td>
                        <td><?php echo  $r['nama_admin']; ?></td>
                        <td><?php echo  $r['password']; ?></td>
                        
						<td>
                            <a href="uadmin.php?id=<?php echo  $r['id_admin']; ?>">Edit</a> | 
                            <a href="dadmin.php?id=<?php echo  $r['id_admin']; ?>">Delete</a>
							 
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
