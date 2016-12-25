<?php session_start();
require("libraries/koneksi.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM admin WHERE nama_admin = '$username'");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
if($jumlah == 0) {
echo "Username Belum Terdaftar!";
} 
else {
if($pass != $hasil['password']) {
echo "Password Salah!";
}
 else {
$_SESSION['username'] = $hasil['username'];
header('location:dashboard.php');
}
}
?>