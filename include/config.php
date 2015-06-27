<?php

// gunakan carabaru.tinggalkan cara lama
// $koneksi = mysql_connect("localhost","root","") or die(mysql_error());
// mysql_select_db("db_myneed",$koneksi) or die(mysql_error());
$db['host'] =	"localhost";
$db['user'] =	"root";
$db['pass'] =	"";
$db['name'] =	"db_myneed";

// menyatukan semua variable menjadi sebuah koneksi
 $koneksi=mysql_connect($db['host'],$db['user'],$db['pass']);

// memilih database yang akan di gunakan
mysql_select_db($db['name']);

$site['judul'] = "MyNeed";
$site['root'] = "http://localhost/jproject/myneed/index.php";

//user yang sedang aktif
// $sql_ngambil_user = mysql_query( "SELECT * FROM tb_user WHERE uname_user = '$_SESSION[username]' ");
// $user=mysql_fetch_object($sql_ngambil_user);

?>