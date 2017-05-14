<?php
session_start();
include 'inc/connection.php'
?>
<?php
//cek apakah user sudah login
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    header("index.php");//
}

//cek level user
if($_SESSION['level']!="Administrator"){
    header("index.php");
}
?>
<?php

	$usr=$_GET['usr'];
	mysql_query("DELETE from tb_user where username='$usr'");
	header ("location:seeAdmin.php");
?>
