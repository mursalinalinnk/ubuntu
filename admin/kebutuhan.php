
<?php

session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login");//jika belum login jangan lanjut..
}
include "../include/config.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php  echo $site ['judul'];?></title>
</head>
<body>
<h2>kebutuhan page</h2>
<h4> ! this page is under construction</h4>
</body>
</html>