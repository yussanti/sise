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
	

	$idmk=$_POST['idmk'];
	$idtest=$_POST['idtest'];
	$usr=$_GET['usr'];
	$idsoal=$_POST["idsoal"];
	$idjawaban=$_GET["idjawaban"];
	$nilai=$_POST["nilai"];
	
		mysql_query("UPDATE tb_nilai SET idmk='$idmk', idtest='$idtest', username ='$usr', idsoal ='$idsoal',idjawaban ='$idjawaban',nilai ='$nilai' WHERE idjawaban='$idjawaban' ");
	
	$nilaitotal=0;
    $i=1;
    $query2= mysql_query("SELECT * FROM tb_nilai where idmk='$idmk' and idtest='$idtest' and username='$usr'");
    $jumlah2 = mysql_num_rows($query2);
    while($baris2=mysql_fetch_array($query2)) {
        $nilaitotal=$nilaitotal+$baris2['nilai'];
        $i++;
        } 
        $nilaitotal=$nilaitotal/$jumlah2; //hasil total nilai yang didapat dari penjumlahan semua nilai dari ujian, dibagi dengan jumlah soal
        $nilaitotal=round($nilaitotal, 2);
        
        mysql_query("UPDATE tb_totalnilai SET idmk='$idmk', idtest='$idtest', username ='$usr', total_nilai= '$nilaitotal' where username ='$usr'");
	
	header ("location:seeAnswer.php?usr=$usr");
	
?>