
<?php

session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login");//jika belum login jangan lanjut..
}
include "../include/config.php";

$sql_ngambil_user = mysql_query( "SELECT * FROM tb_user WHERE uname_user = '$_SESSION[username]' ");
$user=mysql_fetch_object($sql_ngambil_user);

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php  echo $site ['judul'];?></title>
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"><!--font awesome-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"><!--bootstrap-->
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<!--<link rel="stylesheet" type="text/css" href="css/cerulean-bootstrap.min.css">bootstrap tema -->
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>

<?php include"../template/nav.php";?>


<div class="container">
	<div class="row" style="margin-top:100px">
		<div class="col-md-9">
		
		<h2>setting akun</h2>
		<form action="../include/setakuncrud.php" method="POST" class="form-group">
			<table>
				<tr>
					<td><input type="hidden" name="kode_user" value="<?php echo $user->kode_user;?>"></td>
				</tr>
				<tr>
					<td>change name</td>
					<td>:</td>
					<td><input type="text" class="form-control" name="uname_user"  value="<?php echo $user->uname_user;?>"></td>
				</tr>
				<tr>
					<td>change password</td>
					<td>:</td>
					<td><input type="text" class="form-control" name="pass_user"  value="<?php echo $user->pass_user;?>"  placeholder=""></td>
				</tr>
				<tr>
					<td>change picture</td>
					<td>:</td>
					<td><input type="file" name="foto_user"  value=""></td>
				</tr>
			</table>
			<input type="submit" class="btn btn-outline btn-success" name="update" value="simpan">
		</form>
		</div>

		<div class="col-md-3">
			<div class="panel panel-default">
				<div class="panel-body">
				<center>
				<?php echo "<img class=\"img-rounded img-responsive\"  src='user_image/$user->foto_user'>";?>
				</center>
				</div>
				<div class="panel-footer"><h3><?php echo $user->uname_user;?></h3></div>
			</div>
		</div>
	</div>
</div>


</body>
</html>