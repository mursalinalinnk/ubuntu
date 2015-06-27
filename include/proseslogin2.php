<?php


 
session_start();
include "config.php";

//menggunakan metode isset

if (isset($_POST['login'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sebagai=$_POST['sebagai'];

	// $cek_user = mysql_query("SELECT * FROM tb_mahasiswa WHERE uname_mahasiswa='$username' AND pass_mahasiswa='$password'");
	if ($sebagai == 'admin') {
		$cek_user=mysql_query("SELECT * FROM tb_admin WHERE uname_admin='$username' and pass_admin='$password'");
		if (mysql_num_rows($cek_user)==1) {
			$hasil = mysql_fetch_array($cek_user);
			// simpan session user
			$_SESSION['username']= $_POST['username'];
			header("location:../admin/index.php");
		}else{
			echo "ada yang salah";
		}
	}
	if ($sebagai == 'user') {
		$cek_user=mysql_query("SELECT * FROM tb_user WHERE uname_user='$username' and pass_user='$password'");
		if (mysql_num_rows($cek_user)==1) {
			$hasil = mysql_fetch_array($cek_user);
			// simpan session user
			$_SESSION['username']= $_POST['username'];
			header("location:../user/index.php");
		}else{
			echo "ada yang salah";
		}
	}
	if ($sebagai == 'guest') {
			header("location:../guest/indexguest.php");
		
	}
}

?>