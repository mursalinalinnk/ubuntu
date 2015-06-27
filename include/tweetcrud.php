
<?php

	include "../function/fungsi_user.php";


	if (isset($_POST['tweet'])){
		tambahtweet(
			$_POST['kode_tweet'],
			$_POST['uname_usertweet'],
			$_POST['isi'],
			$_POST['foto_usertweet']);
		header("location:../user/index.php");
	}
	elseif (isset($_POST['hapus'])){
		hapustweet($_POST['kode_tweet']);
		header("location:../user/index.php");
	}
?>