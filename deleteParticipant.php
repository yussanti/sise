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
	$usr = $_GET['usr'];
	mysql_query("DELETE from tb_peserta where username='$usr'");
	header ("location: seeParticipant.php?idmk=$idmk");
?>
