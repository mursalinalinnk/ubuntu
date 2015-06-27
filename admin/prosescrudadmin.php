<!-- proses.php -->
<?php



	include "fungsi_admin.php";


	// kuser
	if (isset($_POST['tambah'])){

		tambahuser(
			$_POST['kode_user'],
			$_POST['uname_user'],
			$_POST['pass_user'],
			$_POST['reg_user']);
		header("location:tambahuser.php");		
	}
	elseif (isset($_POST['update'])){
		updateuser(
			$_POST['kode_user'],
			$_POST['uname_user'],
			$_POST['pass_user']);
		header("location:tambahuser.php");
	}
	elseif (isset($_POST['hapus'])){
		hapususer($_POST['kode_user']);
	header("location:tambahuser.php");
	}

	?>