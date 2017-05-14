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



?>
<?php

	$idmk=$_GET['idmk'];
	mysql_query("DELETE from tb_courses where idmk='$idmk'");
	header ("location:seeCourses.php");
?>
