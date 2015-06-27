<!-- proses.php -->
<?php

	include "../function/fungsi_user.php";
	// include "../koneksi.php";
	// $kode_kpok = $_POST['kode_kpok'];

			//////////////////
	 	// pendapatan
	//////////////////
	if (isset($_POST['tambahpend'])){
		tambahpend(
			$_POST['kode_pend'],
			$_POST['uname_userpend'],
			$_POST['nama_pend'],
			$_POST['jumlah_pend'],
			$_POST['tanggal_pend']);
		header("location:../user/pend.php");
	}
	elseif (isset($_POST['updatepend'])){
		updatepend(
			$_POST['kode_pend'],
			$_POST['uname_userpend'],
			$_POST['nama_pend'],
			$_POST['jumlah_pend'],
			$_POST['tanggal_pend']);
		header("location:../user/pend.php");
	}
	elseif (isset($_POST['hapuspend'])){
		hapuspend($_POST['kode_pend']);
	header("location:../user/pend.php");
	}



			//////////////////
		// tabungan
	//////////////////

	if (isset($_POST['tambahtab'])){
		tambahtab(
			$_POST['kode_tab'],
			$_POST['uname_usertab'],
			$_POST['nama_tab'],
			$_POST['jumlah_tab'],
			$_POST['update_tab'],
			$_POST['note_tab']);
		header("location:../user/pend.php");
	}
	elseif (isset($_POST['updatetab'])){
		updatetab(
			$_POST['kode_tab'],
			$_POST['uname_usertab'],
			$_POST['nama_tab'],
			$_POST['jumlah_tab'],
			$_POST['update_tab'],
			$_POST['note_tab']);
		header("location:../user/pend.php");
	}
	elseif (isset($_POST['hapustab'])){
		hapusksek($_POST['kode_tab']);
	header("location:../user/pend.php");
	}


	?>