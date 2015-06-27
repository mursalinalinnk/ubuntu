<?php

session_start();
//cek apakah user sudah login
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login");//jika belum login jangan lanjut..
}
include "../function/fungsi_user.php";
$sql_ngambil_user = mysql_query( "SELECT * FROM tb_user WHERE uname_user = '$_SESSION[username]' ");
$user=mysql_fetch_object($sql_ngambil_user);

?>


<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"><!--font awesome-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"><!--bootstrap-->
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<!--<link rel="stylesheet" type="text/css" href="css/cerulean-bootstrap.min.css">bootstrap tema -->
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <style>
    	.navbar-right {
				margin-top: 5px;
		}

		.panel-red {
				border-color: #d9534f;
		}

		.panel-yellow {
				border-color: #f0ad4e;
		}

		.panel-yellow .panel-heading {
				border-color: #f0ad4e;
				color: #fff;
				background-color: #f0ad4e;
		}

		.panel-red .panel-heading {
		  border-color: #d9534f;
		  color: #fff;
		  background-color: #d9534f;
		}

		.panel-green {
		  border-color: #5cb85c;
		}

		.panel-green .panel-heading {
		  border-color: #5cb85c;
		  color: #fff;
		  background-color: #5cb85c;
		}
    </style>
</head>
<body>

</body>
</html>

<?php include"../template/nav.php";?>
<div class="container">
	<section class="col-md-12" style="margin-top:100px">

		<div class="row">
		 <div class="col-lg-6">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                <h3>Pendapatan</h3>
	            </div>
	           	
	            <div class="panel-body">
	                <div class="dataTable_wrapper">
	                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                        <thead>
	                            <tr>
	                             <th style="border: 1px solid black"; >#</th>
								 <th style="border: 1px solid black";>pendapatan</th>
								 <th style="border: 1px solid black";>jumlah</th>
								 <th style="border: 1px solid black";>tgl penerimaan</th>
	                            </tr>
	                        </thead>
	                        <?php
							tampilpend();
							?>
	                    </table>
	                </div>
	        	</div>
	    	</div>
		</div>


		<div class="col-md-6">
	        <form action="../include/prosescrudpend.php" method="POST">
			<table>
				<div class="form-group">
					<label>#kode</label>
					<input type="text" class="form-control" name="kode_katkeb" placeholder="hanya untuk hapus/update">
				</div>
				
					<!-- <label>kategori kebutuhan</label> -->
					<input type="hidden" name="uname_userpend" value="<?php echo $user->uname_user;?>">
				<div class="form-group">
					<label>kategori kebutuhan</label>
					<input type="text" class="form-control"  name="nama_pend" placeholder="gaji ngajar">
				</div>
				<div class="form-group">
					<label>jumlah</label>
					<input type="text" class="form-control"  name="jumlah_pend" placeholder="Rp.100.000">
				</div>
				<div class="form-group">
					<label>tanggal terima</label>
					<input type="date" class="form-control"  name="tanggal_pend">
				</div>
			</table>
					<input type="submit" class="btn btn-outline btn-primary" name="tambahpend" value="simpan">
					<input type="submit" class="btn btn-outline btn-primary" name="hapuspend" value="hapus">
			</form>
		</div>
		</div>
		<!-- /row -->

		<!-- tabungan -->
		<div class="row">
		<div class="col-lg-6">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                <h3>Tabungan</h3>
	            </div>
	           	
	            <div class="panel-body">
	                <div class="dataTable_wrapper">
	                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                        <thead>
	                            <tr>
	                             <th style="border: 1px solid black"; >#</th>
								 <th style="border: 1px solid black";>tabungan</th>
								 <th style="border: 1px solid black";>jumlah</th>
								 <th style="border: 1px solid black";>update</th>
								 <th style="border: 1px solid black";>note</th>
	                            </tr>
	                        </thead>
	                        <?php
							tampiltab();
							?>
	                    </table>
	                </div>
	        	</div>
	    	</div>
		</div>
		
<!-- tambah tabungan -->
		<div class="col-md-6">
	        <form action="../include/prosescrudpend.php" method="POST">
			<table>
				<div class="form-group">
					<label>#kode</label>
					<input type="text" class="form-control" name="kode_katkeb" placeholder="hanya untuk hapus/update">
				</div>
				
					<!-- <label>kategori kebutuhan</label> -->
					<input type="hidden" name="uname_usertab" value="<?php echo $user->uname_user;?>">
				<div class="form-group">
					<label>kategori kebutuhan</label>
					<input type="text" class="form-control"  name="nama_tab" placeholder="gaji ngajar">
				</div>
				<div class="form-group">
					<label>jumlah</label>
					<input type="text" class="form-control"  name="jumlah_tab" placeholder="Rp.100.000">
				</div>
				<div class="form-group">
					<label>tanggal terima</label>
					<input type="date" class="form-control"  name="update_tab">
				</div>
				<div class="form-group">
					<label>note</label>
					<textarea type="date" class="form-control"  name="note_tab"></textarea>
				</div>
			</table>
					<input type="submit" class="btn btn-outline btn-primary" name="tambahtab" value="simpan">
					<input type="submit" class="btn btn-outline btn-primary" name="hapustab" value="hapus">
			</form>
		</div>
		</div>
		<!-- /row -->




	</section>
</div>
