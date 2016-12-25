<?php
 require_once('libraries/m_even.php');
require_once('libraries/DBClass.php');
$event = new event();
$data = $event->readAllevent();
?><!doctype html>
<html>
    <head>
        <title>EVEN</title>
        <link rel="stylesheet" href="libraries/datatables/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="libraries/datatables/css/dataTables.bootstrap.css"/>
    </head>
    <body>
        <div class="container">
		<a href="teven.php?id=<?php echo  $r['id_event']; ?>"><button>Tambah</button></a>
            <table id="provinsi" class="table table-bordered">
                <thead>
                    <tr>
                        <th width="10%">NO</th>
                        <th width="15%">JUDUL_EVENT</th>
                        <th width="15%">ISI</th>
					
						<th width="15%">TGL_EVENT</th>
	 <th width="15%">FOTO</th>
										
					<th width="15%">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    				                	<?php $no=1?>
	<?php foreach($data as $r):?>
	
         <tr align='left'>
                        <td><?php echo  $no;?></td>
                        <td><?php echo  $r['judul_event']; ?></td>
                        <td><?php echo  $r['isi_event']; ?></td>
						<td><?php echo  $r['tgl_event']; ?></td>
                        <td><?php echo  $r['foto']; ?></td>
                        
					<td>
                            <a href="ueven.php?id=<?php echo  $r['id_event']; ?>">Edit</a> | 
                            <a href="deven.php?id=<?php echo  $r['id_event']; ?>">Delete</a>
							 
						</td>
                    </tr>
				
					<?php $no++?>
	
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
