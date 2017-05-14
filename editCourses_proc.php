<?php
session_start();
include 'inc/connection.php'
?>
<?php
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    header("Location: index.php");//
}

//cek level user
if($_SESSION['level']!="Administrator"){
    header("Location: index.php");

}?>
<?php
	$username=$_POST["username"];
	$courses=$_POST["courses"];
	$idmk=$_GET['idmk'];
	
	
	
	
		mysql_query("UPDATE tb_courses SET idmk='$idmk', courses ='$courses', username ='$username' where idmk='$idmk'");
		

			header ("location:seeCourses.php");
	
?>