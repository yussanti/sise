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
if($_SESSION['level']!="Dosen"){
    header("Location: index.php");

}?>
<?php
	

	$idmk=$_GET['idmk'];
	$idtest=$_GET['idtest'];
	$usr=$_GET['usr'];
	$idsoal=$_POST["idsoal"];
	$idjawaban=$_POST["idjawaban"];
	$nilai=$_POST["nilai"];
	
		mysql_query("UPDATE tb_nilai SET idmk='$idmk', idtest='$idtest', username ='$usr', idsoal ='$idsoal',idjawaban ='$idjawaban',nilai ='$nilai' WHERE username='$usr' ");
		

			header ("location:seeAnswer.php?usr=$usr");
	
?>