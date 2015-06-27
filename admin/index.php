<?php

session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login");//jika belum login jangan lanjut..
}
//cek level user
// if($_SESSION['sebagai']!="mahasiswa"){ die("Anda bukan mahasiswa");}//jika bukan admin jangan lanjut
include "../include/config.php";
//cek apakah user sudah login

$sql_ngambil_user = mysql_query( "SELECT * FROM tb_admin WHERE uname_admin = '$_SESSION[username]' ");
$user=mysql_fetch_object($sql_ngambil_user);
//cek level user
// if($_SESSION['sebagai']!="mahasiswa"){ die("Anda bukan mahasiswa");}//jika bukan admin jangan lanjut

?>

<html>
<head>
<title>admin</title>
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"><!--font awesome-->
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"><!--bootstrap-->
		<link rel="stylesheet" type="text/css" href="../css/main.css">
		<!--<link rel="stylesheet" type="text/css" href="css/cerulean-bootstrap.min.css">bootstrap tema -->
		<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>

        <style>
        	.navbar-right {
  				margin-top: 5px;
			}

			.panel-red {
  				border-color: #d9534f;
			}

			.panel-yellow {
  				border-color: #f0ad4e;
			}

			.panel-yellow .panel-heading {
  				border-color: #f0ad4e;
  				color: #fff;
  				background-color: #f0ad4e;
			}

			.panel-red .panel-heading {
			  border-color: #d9534f;
			  color: #fff;
			  background-color: #d9534f;
			}

			.panel-green {
			  border-color: #5cb85c;
			}

			.panel-green .panel-heading {
			  border-color: #5cb85c;
			  color: #fff;
			  background-color: #5cb85c;
			}
        </style>
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="navbar-header">
	<a class="navbar-brand" href="index.php">WEB MASTER <?php echo $user->uname_admin;?></a>
	<a class="navbar-brand"><?php echo "<td><img class=\"img-rounded img-circle\" style=\"width 35px;height:35px \" src='images/$user->foto_admin'></td>";?></a>

	</div>

	<ul class="nav navbar-nav navbar-right">			 
			<li><a href="tambahuser.php">lihat user</a></li>
			<li><a href="kebutuhan.php">kebutuhan</a></li>
			<li><a href="../include/logout.php">logout</a></li>
	</ul>

</nav>


</body>
</html>

