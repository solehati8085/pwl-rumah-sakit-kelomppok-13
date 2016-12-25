<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Rumah Sakit</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	 <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    
<link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
	<style>
 ul.utama li{

 display: inline-block;
  width: 130px;
  height: 45px;

 }
 ul li:hover{
  background: yellow;
 }

 ul.utama a{
   color: #fff;
   text-decoration: none;
   line-height: 30px;
 }
 ul.sub{
  display: none;
 }
 ul.utama li:hover ul.sub{
  display: block;
  position: absolute;
 }
 ul.sub li{
  display: block;
  margin-top: 1px;
 }
 
 </style>
</head>
<?php
require_once('libraries/DBClass.php');
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>About - Laboratory Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	
	<div id="header">
		<a href="index.html" class="logo"><img src="images/logo.png" alt=""></a>
		<ul class="utama">
		<div class="container">
		<div class="main">
	      <form action="login.php" method="post">
			<label>Username :</label>
			<input id="name" name="username" placeholder="username" type="text">
			
			<label>Password :</label>
			<input id="password" name="password" placeholder="**********" type="password">
			
			<input type="submit" name="submit" id="submit" value="Login">
		  </form>
		</div>
   </div>
<hr/>

			<li>
				<a href="beranda.php">BERANDA</a>
			</li>
			<li>
				<a href="tentang.php">PROFIL</a>
			</li>
			
				<li><a href="even.php">EVEN</a></li>
			<li>
				<a>DOKTER</a>
				<ul class="sub">
				<li><a href="profil_dokter.php">PROFIL DOKTER</a></li>
				<li><a href="jadwal.php">JADWAL</a></li>
				</ul>
			</li>
			<li>
				<a href="layanan.php">LAYANAN</a>
				
			</li>
			<li>
				<a href="galeri.php">GALERI</a>
			</li>
			
		</ul>
	</div>
<body>
<hr/>
			
</tr>
		<div id="section">
		<div>
			<div>
				<h1>RUMAH SAKIT KITA</h1>
				<p>
					KESEHATAN ITU MAHAL
				</p>
			</div>
		</div>
	</div>
	
	<div id="featured">
	<?php require $content; ?>
	</div>
	<div id="footer">
		<div>
			<p>
				<span>2023 &copy; Illumelabs Diagnostic Center.</span><a href="#" >Terms of Service</a> | <a href="#" >Privacy Policy</a>
			</p>
			<ul>
				<li id="facebook">
					<a href="http://freewebsitetemplates.com/go/facebook/">facebook</a>
				</li>
				<li id="twitter">
					<a href="http://freewebsitetemplates.com/go/twitter/">twitter</a>
				</li>
				<li id="googleplus">
					<a href="http://freewebsitetemplates.com/go/googleplus/">googleplus</a>
				</li>
				<li id="rss">
					<a href="#" >rss</a>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>