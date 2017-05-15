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
	
	$query1 = mysql_query("SELECT * FROM tb_nilai where idmk='$idmk' AND idtest='$idtest' AND username
		='$usr'");
    $jumlah = mysql_num_rows($query1);
    while($baris1=mysql_fetch_array($query1)) {
	
		mysql_query("UPDATE tb_nilai SET idmk='$idmk', idtest='$idtest', username ='$usr', idsoal ='$idsoal',idjawaban ='$idjawaban',nilai ='$nilai' WHERE username='$usr' ");
		
}
			header ("location:seeAnswer.php?usr=$usr");
	
?>