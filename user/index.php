<?php

session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login");//jika belum login jangan lanjut..
}

include "../include/config.php";
//cek apakah user sudah login

$sql_ngambil_user = mysql_query( "SELECT * FROM tb_user WHERE uname_user = '$_SESSION[username]' ");
$user=mysql_fetch_object($sql_ngambil_user);
//cek level user
// if($_SESSION['sebagai']!="mahasiswa"){ die("Anda bukan mahasiswa");}//jika bukan admin jangan lanjut

?>

<html>
<head>
<title><?php  echo $site ['judul'];?></title>
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"><!--font awesome-->
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"><!--bootstrap-->
		<link rel="stylesheet" type="text/css" href="../css/main.css">
		<!--<link rel="stylesheet" type="text/css" href="css/cerulean-bootstrap.min.css">bootstrap tema -->
<!-- 		// <script src="../js/jquery.min.js"></script> -->
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery-1.11.1.min.js"></script>

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

			/*tweet*/
			.chat li {
			  margin-bottom: 10px;
			  padding-bottom: 5px;
			  border-bottom: 1px dotted #999;
			}

			.chat {
			  margin: 0;
			  padding: 0;
			  list-style: none;
			}

			.chat li .chat-body p {
			  margin: 0;
			}

			.chat-panel .panel-body {
			  height: 500px;
			  overflow-y: scroll;
			}

			.panel-body {
			  padding: 15px;
			}

			.chat li.left .chat-body {
			  margin-left: 60px;
			}


			.btn-social-icon {
			  position: relative;
			   padding-left: 44px; 
			   text-align: left; 
			   white-space: nowrap; 
			   overflow: hidden; 
			   text-overflow: ellipsis; 
			  height: 34px;
			  width: 34px;
			  padding: 0;
			}

		
        </style>
</head>
<body>
<div class="container">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="navbar-header">
	<a class="navbar-brand" href="index.php">MY NEED <?php echo $user->uname_user;?></a>
	<a class="navbar-brand"><?php echo "<td><img class=\"img-rounded img-circle\" style=\"width 35px;height:35px \" src='user_image/$user->foto_user'></td>";?></a>

	</div>

	<ul class="nav navbar-nav navbar-right">			 
			<li><a href="pend.php">pendapatan dan tabungan</a></li>
			<li><a href="profiluser.php">data users</a></li>
			<li><a href="setakun.php">setting akun</a></li>
			<li><a href="../include/logout.php">logout</a></li>
	</ul>

</nav>

	<div class="row" style="margin-top:100px";>
	    <div class="col-md-12">
		    	<div class="col-md-3">
		        <div class="panel panel-red">
		            <div class="panel-heading">
		                <h3 class="panel-title">total kebutuhan pokok</h3>
		            </div>
		            <div class="panel-body">
		                 <?php	
							$sql="SELECT SUM(harga_kpok) AS total FROM tb_kpok WHERE uname_userkpok = '$_SESSION[username]'"; 
							$hasil = mysql_query($sql); 
							$r1=mysql_fetch_assoc($hasil); 
							echo $r1['total'];
						?>
		            </div>
		        </div>
		        </div>
		        <div class="col-md-3">
		        <div class="panel panel-green">
		            <div class="panel-heading">
		                <h3 class="panel-title">total kebutuhan sekunder</h3>
		            </div>
		            <div class="panel-body">
		                 <?php
			
							$sql="SELECT SUM(harga_ksek) AS total FROM tb_ksek WHERE uname_userksek = '$_SESSION[username]'"; 
							$hasil = mysql_query($sql); 
							$r=mysql_fetch_assoc($hasil); 
							echo $r['total'];
						?>
		            </div>
		        </div>
		        </div>
		        <div class="col-md-3">
			        <div class="panel panel-primary">
			            <div class="panel-heading">
			                <h3 class="panel-title">total pendapatan</h3>
			            </div>
			            <div class="panel-body">
			                <?php
				
								$sql="SELECT SUM(jumlah_pend) AS total FROM tb_pend WHERE uname_userpend = '$_SESSION[username]'"; 
								$hasil = mysql_query($sql); 
								$r2=mysql_fetch_assoc($hasil); 
								echo $r2['total'];
							?>
			            </div>
			        </div>
		        </div>  
		        <div class="col-md-3">
			        <div class="panel panel-primary">
			            <div class="panel-heading">
			                <h3 class="panel-title">total tabungan</h3>
			            </div>
			            <div class="panel-body">
			                <?php
				
								$sql="SELECT SUM(jumlah_tab) AS total FROM tb_tab WHERE uname_usertab = '$_SESSION[username]'"; 
								$hasil = mysql_query($sql); 
								$r2=mysql_fetch_assoc($hasil); 
								echo $r2['total'];
							?>
			            </div>
			        </div>
		        </div>   
		     <div class="col-md-3">
		        <div class="panel panel-yellow">
		            <div class="panel-heading">
		                <h3 class="panel-title">balance</h3>
		            </div>
		            <div class="panel-body">
		            	

		            </div>
		        </div>
		     </div>
		     <!-- /.col-md-3 -->

		     <!-- start accordion -->

		     <div class="col-md-9">
		     	<div class="panel-group" id="accordion">

				  <div class="panel panel-yellow">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion" >
				          dis ini GRAF IK
				        </a>
				      </h4>
				    </div>
				    <div id="collapseOne" class="panel-collapse collapse in">
				      <div class="panel-body">
				       	GAK ngerti cara bikin grafik. gak mmudeng mblas cuugggg....dari pada pusing mending di R.I.P dulu.they say FUCK YEAH..
				      </div>
				    </div>
				  </div>
				</div>
		     </div>
		     <!-- / start accordion -->
		     

	    </div>
	    <!-- /.col-sm-4 -->
    </div>

	<!-- TABEL -->
	<div class="row">
            <div class="col-lg-8">
                <h1 class="page-header">Tables</h1>
            </div>
            <div class="col-lg-4">
                <h1 class="page-header">Tweet</h1>
            </div>
                <!-- /.col-lg-9+3 -->
            </div>
            <!-- /.row -->
            <div class="row" >
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Daftar Kebutuhan Bulanan</h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                         <th style="border: 1px solid black"; >#</th>
										 <th style="border: 1px solid black";>nama</th>
										 <th style="border: 1px solid black";>jenis</th>
										 <th style="border: 1px solid black";>jumlah</th>
										 <th style="border: 1px solid black";>harga</th>
										 <th style="border: 1px solid black";>note</th>
                                        </tr>
                                    </thead>
                                    <?php
									include "../function/fungsi_user.php";
									tampilkpok();
									?>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>Cara menambahkan dan mengurangi kebutuhan pokok</h4>
                                <p>cukup isikan data seperti biasa lalu click tombol "action" yang di inginkan.khusus untuk menambah anda tidak perlu mengisi kode kebutuhan karna terisi secara otomatis</a>.</p>
                                <!-- <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a> -->
                            </div>

                            <div class="col-md-12">
	                            <form action="../include/prosescruduser.php" method="POST">
								<table>
									<div class="col-md-6">
										<div class="form-group">
											<label>#kode</label>
											<input type="text" class="form-control" name="kode_kpok" placeholder="hanya untuk hapus/update">
										</div>
										<div class="form-group">
											<!-- <label>tersembunyi kode kpok</label> -->
											<input type="hidden" class="form-control" name="uname_userkpok" value="<?php echo $user->uname_user;?>">
										</div>	
										<div class="form-group">
											<label>kategori</label><a href="cat.php"><button  type="button" class="btn pull-right btn-outline btn-primary btn-xs" ><i class="fa fa-plus fa-primary"></i></button></a>
											<select class="form-control" name="jenis_kpok">
												<option>--pilih kategori--</option>
												<?php tampilkatkebopt(); ?>
											</select>
										</div>

										<div class="form-group">
											<label>nama kebutuhan</label>
											<input type="text" class="form-control" type="text" name="nama_kpok" placeholder="spp">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>jumlah</label>
											<input type="text" class="form-control" type="text" name="jumlah_kpok" placeholder="1">
										</div>
										<div class="form-group">
											<label>harga</label>
											<input type="text" class="form-control" type="text" name="harga_kpok" placeholder="Rp.10.000">
										</div>
										<div class="form-group">
											<label>note</label>
											<textarea class="form-control" rows="3" name="note_kpok" ></textarea>
										</div>
									</div>
								</table>

								<br>
								<br>
								
							</div>
                        </div>
								<div class="panel-footer">
									<input type="submit" class="btn btn-sm btn-success" name="simpan" value="simpan">
									<input type="submit" class="btn btn-sm btn-success" name="update" value="ubah">
									<input type="submit" class="btn btn-sm btn-success" name="hapus" value="hapus">
									<input type="reset" class="btn btn-sm btn-success">
								</div>
						</form>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->


                    <div class="panel panel-default">
		               	<div class="panel-heading">
                            <h3>Daftar Kebutuhan sekunder</h3>
                        </div>
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
								<table class="table table-striped table-bordered table-hover";>
									<thead>
									<tr>
										<!-- <th style="border: 1px solid black"; >no</th> -->
										<th style="border: 1px solid black"; >#</th>
										<th style="border: 1px solid black";>nama</th>
										<th style="border: 1px solid black";>jumlah</th>
										<th style="border: 1px solid black";>harga</th>
										<th style="border: 1px solid black";>note</th>
									</tr>
									<?php
									tampilksek();
									?>
									</thead>
								</table>
							</div>

							<!-- /.table-responsive -->
                            <div class="well">
                                <h4>Cara menambahkan dan mengurangi kebutuhan pokok</h4>
                                <p>cukup isikan data seperti biasa lalu click tombol "action" yang di inginkan.khusus untuk menambah anda tidak perlu mengisi kode kebutuhan karna terisi secara otomatis</a>.</p>
                                <!-- <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a> -->
                            </div>

	                        <div class="col-md-12">
								<form action="../include/prosescruduser.php" method="POST">
								<table>
									<div class="col-md-6">
										<div class="form-group">
											<label>#kode</label>
											<input type="text" class="form-control" name="kode_ksek" placeholder="hanya untuk hapus/update">
										</div>
									
											<!-- <label>tersembunyi kode kpok</label> -->
											<input type="hidden" class="form-control" name="uname_userksek" value="<?php echo $user->uname_user;?>">
								
										<div class="form-group">
											<label>kebutuhan</label>
											<input type="text" class="form-control" name="nama_ksek" placeholder="beli tas baru">
										</div>
										<div class="form-group">
											<label>jumlah</label>
											<input type="text" class="form-control" name="jumlah_ksek" placeholder="1">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>harga</label>
											<input type="text" class="form-control" type="text" name="harga_ksek" placeholder="Rp.10.000">
										</div>
										<div class="form-group">
											<label>note</label>
											<textarea class="form-control" rows="5" name="note_ksek" ></textarea>
										</div>
									</div>									
								</table>
								
								
							</div>

						</div>
						<div class="panel-footer">
							<input type="submit" class="btn btn-sm btn-success" name="tambahksek" value="simpan">
							<!-- <input type="submit" class="btn btn-sm btn-success"name="updateksek" value="ubah"> -->
							<input type="submit"class="btn btn-sm btn-success" name="hapusksek" value="hapus">
							<input type="reset"class="btn btn-sm btn-success">
						</div>
						</form>
						<!-- panel body -->	
		            </div>
		            <!-- panel default -->
                </div>
                <!-- /.col-lg-9 -->


            <!-- tweet isi -->



        	    <!-- /.panel -->
        	    <div class="col-md-4">
                <div class="chat-panel panel panel-blue">
                    <div class="panel-heading">
                        <form action="../include/tweetcrud.php" method="POST">
							<div class="form-group">			
								<input type="hidden" name="kode_tweet">
								<input type="hidden" name="uname_usertweet" value="<?php echo $user->uname_user;?>">
								<textarea type="text" name="isi" rows="3" class="form-control" placeholder="bagaimana keuanganmu hari ini ..."></textarea>
								<input type="hidden" class="form-control" name="tgl_tweet" disabled="">
								<input type="hidden" name="foto_usertweet" value="<?php echo $user->foto_user;?>">
							</div>
							<span class="input-group-btn">
	                            <button class="btn btn-circle btn-twitter" type="submit" name="tweet" value="tweet" >
	                                <i class="fa fa-twitter"></i>
	                            </button>
	                            <?php echo "<img class=\"img-rounded img-circle pull-right\" style=\"width 35px;height:35px \" src='user_image/$user->foto_user'>"; ?>
	                        </span>
		
						</form>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                    
                        <ul class="chat">
                            <?php    
                            
				        	tampiltweet();
				        	?>
                        </ul>
                    </div>
                </div>
                </div>
                <!-- /.panel .chat-panel -->
            </div>
            <!-- /.row -->

    </div>
    <!-- end o table -->

</div>
</body>
</html>

