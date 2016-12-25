<?php
require_once('libraries/DBClass.php');
require_once('libraries/m_admin.php');
$id = $_GET['id'];
if(!is_numeric($id)){
	exit('Access Forbiden');
}
$admin = new admin();
$data = $admin->readadmin($id);
if(empty($data)){
	exit('admin is not found');
}
?>

<h1>UBAH DATA ADMIN</h1>
<?php foreach($data as $r):?>
<form action="eadmin.php" method="post" enctype="multipart/form-data"> 
	ID_ADMIN: <br />
	<input type="text" value='<?php echo $r['id_admin']?>' name="in_id" readonly="true"> <br />
	Nama lengkap: <br />
	<input type="text" name="in_nama" value='<?php echo $r['nama_admin']?>'> <br />
	Password: <br />
	<input type="text" name="in_password" value='<?php echo $r['password']?>'> <br />
	
	<input type="submit" name="kirim" value="Simpan">
</form>
<?php endforeach;?>