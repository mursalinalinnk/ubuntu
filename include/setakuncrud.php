<!-- proses.php -->
<?php

	include "../function/fungsi_user.php";
	// include "../koneksi.php";
	// $kode_kpok = $_POST['kode_kpok'];


	if (isset($_POST['update'])){
		updateuser(
			$_POST['kode_user'],
			$_POST['uname_user'],
			$_POST['pass_user'],
			$_POST['foto_user']);
		header("location:../user/index.php");
	}