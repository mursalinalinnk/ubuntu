<?php


	include "../include/config.php";

			/////////////////////
		// set akun user
	/////////////////////
	function updateuser($kode_user, $uname_user, $pass_user, $foto_user){
		$sql="UPDATE tb_user SET  kode_user='$kode_user',uname_user='$uname_user',pass_user='$pass_user' ,foto_user='$foto_user'
		WHERE kode_user='$kode_user' ";
		$hasil=mysql_query($sql);
	}


			/////////////////////
		// kebutuhan pokok
	/////////////////////
	function tambahkpok($kode_kpok, $uname_userkpok, $nama_kpok, $jenis_kpok, $jumlah_kpok, $harga_kpok, $note_kpok){
		$sql="INSERT INTO tb_kpok(kode_kpok,uname_userkpok,nama_kpok,jenis_kpok,jumlah_kpok,harga_kpok,note_kpok)
				VALUES('$kode_kpok','$uname_userkpok','$nama_kpok','$jenis_kpok','$jumlah_kpok','$harga_kpok','$note_kpok')";
		$hasil=mysql_query($sql);
		return ($hasil);
	}

	function tampilkpok(){
		// nanti tambahlan berdasarkan kode user
		// $data=array();
		$sql="SELECT * FROM tb_kpok WHERE uname_userkpok = '$_SESSION[username]' ";
			$hasil=mysql_query($sql);
			while ($row=mysql_fetch_array($hasil)) {
			echo "
				<tbody>
					<tr>
						<td>$row[kode_kpok]</td>
						<td><strong>$row[nama_kpok]</strong></td>
						<td>$row[jenis_kpok]</td>
						<td>$row[jumlah_kpok]</td>
						<td>$row[harga_kpok]</td>
						<td>$row[note_kpok]</td>
					</tr>
				</tbody>
			";
			}
		return ($hasil);
	}

	function updatekpok($kode_kpok, $nama_kpok, $jenis_kpok, $jumlah_kpok, $harga_kpok, $note_kpok){
		$sql="UPDATE tb_kpok SET  nama_kpok='$nama_kpok', jenis_kpok='$jenis_kpok', jumlah_kpok='$jumlah_kpok', harga_kpok='$harga_kpok', note_kpok='$note_kpok'
		WHERE kode_kpok='$kode_kpok' ";
		$hasil=mysql_query($sql);
	}

	function hapuskpok($kode_kpok){
		$sql="DELETE FROM tb_kpok WHERE kode_kpok='$kode_kpok'";
		$hasil=mysql_query($sql) or die(mysql_error());
		return ($hasil);
	}


			/////////////////////
		// kebutuhan sekunder
	/////////////////////
	function tambahksek($kode_ksek, $uname_userksek,$nama_ksek, $jumlah_ksek, $harga_ksek, $note_ksek){
		$sql="INSERT INTO tb_ksek(kode_ksek,uname_userksek,nama_ksek,jumlah_ksek,harga_ksek,note_ksek)
				VALUES('$kode_ksek','$uname_userksek','$nama_ksek','$jumlah_ksek','$harga_ksek','$note_ksek')";
		$hasil=mysql_query($sql);
		return ($hasil);
	}

	
	function tampilksek(){
	// nanti tambahlan berdasarkan kode user
	// $data=array();
	$sql="SELECT * FROM tb_ksek WHERE uname_userksek = '$_SESSION[username]'";
	$hasil=mysql_query($sql);
	while ($row=mysql_fetch_array($hasil)) {
		echo "	
			<tbody>
				<tr>
					<td>$row[kode_ksek]</td>
					<td><strong>$row[nama_ksek]</strong></td>
					<td>$row[jumlah_ksek]</td>
					<td>$row[harga_ksek]</td>
					<td>$row[note_ksek]</td>
				</tr>
			</tbody>
		";
		}
	return ($hasil);
	}

	function updateksek($kode_ksek, $nama_ksek, $jenis_ksek, $jumlah_ksek, $harga_ksek, $note_ksek){
		$sql="UPDATE tb_ksek SET  nama_ksek='$nama_ksek', jenis_ksek='$jenis_ksek', jumlah_ksek='$jumlah_ksek', harga_ksek='$harga_ksek', note_ksek='$note_ksek'
		WHERE kode_ksek='$kode_ksek' ";
		$hasil=mysql_query($sql);
	}

	function hapusksek($kode_ksek){
		$sql="DELETE FROM tb_ksek WHERE kode_ksek='$kode_ksek'";
		$hasil=mysql_query($sql) or die(mysql_error());
		return ($hasil);
	}


			/////////////////////
		// pendapatan
	/////////////////////
	function tambahpend($kode_pend, $uname_userpend, $nama_pend, $jumlah_pend, $tanggal_pend){
		$sql="INSERT INTO tb_pend(kode_pend,uname_userpend,nama_pend,jumlah_pend,tanggal_pend)
				VALUES('$kode_pend', '$uname_userpend', '$nama_pend',' $jumlah_pend','$tanggal_pend')";
		$hasil=mysql_query($sql);
		return($hasil);
	}

	function tampilpend(){
		$sql="SELECT * FROM tb_pend WHERE uname_userpend = '$_SESSION[username]'";
		$hasil= mysql_query($sql);
		while($row=mysql_fetch_array($hasil)){
		echo "
		<tr>
			<td>$row[kode_pend]</td>
			<td>$row[nama_pend]</td>
			<td>$row[jumlah_pend]</td>
			<td>$row[tanggal_pend]</td>
		</tr>
		";
		}
		return($hasil);
	}


		function updatepend($kode_pend, $uname_userpend, $nama_pend, $jumlah_pend){
		$sql="UPDATE tb_pend SET  kode_pend='$kode_pend',uname_userpend='$uname_userpend',nama_pend='$nama_pend',jumlah_pend='$jumlah_pend'
		WHERE kode_pend ='$kode_pend' ";
		$hasil=mysql_query($sql);
	}

	function hapuspend($kode_pend){
		$sql="DELETE FROM tb_pend WHERE kode_pend='$kode_pend'";
		$hasil=mysql_query($sql) or die(mysql_error());
		return ($hasil);
	}



			/////////////////////
		// tabungan
	/////////////////////
	function tambahtab($kode_tab, $uname_usertab, $nama_tab, $jumlah_tab, $update_tab, $note_tab){
		$sql = "INSERT INTO tb_tab(kode_tab,uname_usertab,nama_tab,jumlah_tab,update_tab,note_tab) 
				VALUES('$kode_tab','$uname_usertab','$nama_tab','$jumlah_tab','$update_tab','$note_tab')";
		$hasil=mysql_query($sql);
		return($hasil);
	}

	function tampiltab(){
		$sql = "SELECT * FROM tb_tab WHERE uname_usertab = '$_SESSION[username]'";
		$hasil= mysql_query($sql);
		while ($row= mysql_fetch_array($hasil)) {
			echo "
			<tr>
			<td>$row[kode_tab]</td>
			<td>$row[nama_tab]</td>
			<td>$row[jumlah_tab]</td>
			<td>$row[update_tab]</td>
			<td>$row[note_tab]</td>
			</tr>
			";
		}
		return($hasil);
	}

	function hapustab($kode_tab){
		$sql="DELETE FROM tb_tab WHERE kode_tab='$kode_tab' ";
		$hasil = mysql_query($sql) or die(mysql_error());
		return($hasil);
	}


			/////////////////////
		// kategori kebutuhan
	/////////////////////

	function tampilkatkebopt(){
		$sql = "SELECT * FROM tb_katkeb WHERE uname_userkatkeb = '$_SESSION[username]'";
		$hasil = mysql_query($sql);
		while ( $row = mysql_fetch_array($hasil)){
			echo "

			<option>$row[nama_katkeb]</option>
			";
		}
	}

	function tampilkatkeb(){
		$sql = "SELECT * FROM tb_katkeb WHERE uname_userkatkeb = '$_SESSION[username]'";
		$hasil = mysql_query($sql);
		while ( $row = mysql_fetch_array($hasil)){
			echo "
			<tbody>
				<tr>
					<td>$row[kode_katkeb]</td>				
					<td>$row[nama_katkeb]</td>				
				</tr>
			</tbody>
			";
		}
	}

	function tambahkatkeb($kode_katkeb, $uname_userkatkeb, $nama_katkeb){
		$sql = "INSERT INTO tb_katkeb(kode_katkeb,uname_userkatkeb,nama_katkeb)
				VALUES ('$kode_katkeb','$uname_userkatkeb','$nama_katkeb')";
		$hasil =mysql_query($sql);
		return($hasil);
	}

	function updatekatkeb($kode_katkeb,$uname_userkatkeb,$nama_katkeb){
		$sql = "UPDATE tb_katkeb SET kode_katkeb='$kode_katkeb',uname_userkatkeb='$uname_userkatkeb',nama_katkeb='$nama_katkeb'
				WHERE kode_katkeb='$kode_katkeb'";
		$hasil = mysql_query($sql);
	}

	function hapuskatkeb($kode_katkeb){
		$sql = "DELETE FROM tb_katkeb WHERE kode_katkeb='$kode_katkeb'";
		$hasil = mysql_query($sql) or die(mysql_error());
	}




			/////////////////////
		// tweet
	/////////////////////

	function tambahtweet($kode_tweet, $uname_usertweet, $isi, $tgl_tweet, $foto_usertweet){
		$sql = "INSERT INTO tb_tweet(kode_tweet,uname_usertweet,isi,tgl_tweet,foto_usertweet)
				VALUES ('$kode_tweet','$uname_usertweet','$isi',NOW(),'$foto_usertweet')";
		$hasil =mysql_query($sql);
		return($hasil);
	}

	function tampiltweet(){
		$sql = "SELECT * FROM tb_tweet order by tgl_tweet desc";
		$hasil= mysql_query($sql);
		while ($row= mysql_fetch_array($hasil)) {
			//echo "<img class=\"img-rounded img-circle\" style=\"width 35px;height:35px \" src='../user/user_image/$uname_usertweet->foto_usertweet'>";
			echo "	
				<li>
					<div class=\"header\"> 
						<i class=\"fa fa-clock-o fa-fw\"></i><small class=\"pull-left text-muted \">$row[tgl_tweet]</small>
						<strong class=\"pull-right primary-font\">$row[uname_usertweet]</strong>
						<i class=\"fa fa-trash-o fa-md\"></i>
					</div>
					
			";

			echo "
					<p>$row[isi]</p>
				</li>	
			";
		}
		// $sql_usertweet = " SELECT * FROM tb_user WHERE uname_user->uname_usertweet";
		// $hasil= mysql_query($sql);
	}
?>