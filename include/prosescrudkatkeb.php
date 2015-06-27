<?php
	include "../function/fungsi_user.php";
	// include "../koneksi.php";
	// $kode_kpok = $_POST['kode_kpok'];

			//////////////////
	 	// pendapatan
	//////////////////
	if (isset($_POST['tambahkatkeb'])){
		tambahkatkeb(
			$_POST['kode_katkeb'],
			$_POST['uname_userkatkeb'],
			$_POST['nama_katkeb']);
		header("location:../user/cat.php");
	}
	elseif (isset($_POST['updatekatkeb'])){
		updatekatkeb(
			$_POST['kode_katkeb'],
			$_POST['uname_userkatkeb'],
			$_POST['nama_katkeb']);
	header("location:../user/cat.php");
	}
	elseif (isset($_POST['hapuskatkeb'])){
		hapuskatkeb($_POST['kode_katkeb']);
	header("location:../user/cat.php");
	}
?>