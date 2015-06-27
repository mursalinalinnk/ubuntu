<?php
// <!-- 1 fungsi crud -->

include "../include/config.php";

function tambahuser($kode_user, $uname_user, $pass_user ,$reg_user){
	$sql="INSERT INTO tb_user(kode_user,uname_user,pass_user,reg_user)
			VALUES ('$kode_user', '$uname_user', '$pass_user' ,now())";
	$hasil=mysql_query($sql);
	return($hasil);
}

function tampiluser(){
	$sql="SELECT * FROM tb_user";
	$hasil=mysql_query($sql) or die(mysql_error());
	while ($row=mysql_fetch_array($hasil)) {
		echo "
		<tbody>
			<tr>
			<td>$row[kode_user]</td>
			<td>$row[uname_user]</td>
			<td>$row[pass_user]</td>
			<td>$row[reg_user]</td>
			</tr>
		</tbody>
		";
	}
		return ($hasil);
}	
function updateuser($kode_user, $uname_user, $pass_user){
		$sql="UPDATE tb_user SET  kode_user='$kode_user',uname_user='$uname_user',pass_user='$pass_user'
		WHERE kode_user='$kode_user' ";
		$hasil=mysql_query($sql);
	}

	function hapususer($kode_user){
		$sql="DELETE FROM tb_user WHERE kode_user='$kode_user'";
		$hasil=mysql_query($sql) or die(mysql_error());
		return ($hasil);
	}

?>
