<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="navbar-header">
	<a class="navbar-brand" href="index.php">MY NEED <?php echo $user->uname_user;?></a>
	<a class="navbar-brand"><?php echo "<td><img class=\"img-rounded img-responsive img-circle\" style=\"width 35px;height:35px \" src='user_image/$user->foto_user'></td>";?></a>

	</div>

	<ul class="nav navbar-nav navbar-right">			 
			<li><a href="pend.php">pendapatan dan tabungan</a></li>
			<li><a href="profiluser.php">data users</a></li>
			<li><a href="setakun.php">setting akun</a></li>
			<li><a href="../include/logout.php">logout</a></li>
	</ul>

</nav>