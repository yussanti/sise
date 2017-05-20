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
	 $role = @$_POST['q'];
	
	mysql_query("DELETE from tb_user where username='$usr'");
		
		if ($role=="Administrator") {
			header ("location:seeAdmin.php");
		}
		else if ($role=="Dosen") {
			header ("location:seeLecturer.php");
		}
		else if ($role=="Mahasiswa") {
			header ("location:seeStudent.php");
		}
?>
