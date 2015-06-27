<?php

session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login");//jika belum login jangan lanjut..
}

include "../function/fungsi_user.php";
//cek apakah user sudah login

$sql_ngambil_user = mysql_query( "SELECT * FROM tb_user WHERE uname_user = '$_SESSION[username]' ");
$user=mysql_fetch_object($sql_ngambil_user);
//cek level user
// if($_SESSION['sebagai']!="mahasiswa"){ die("Anda bukan mahasiswa");}//jika bukan admin jangan lanjut


?>


<h2>fuck</h2>