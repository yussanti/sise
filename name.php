 <?php
session_start();
include 'inc/connection.php'
?>
<?php
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login");//
} else if(!isset($_SESSION['username'])){
    die("Anda belum login");
} else if(!isset($_SESSION['username'])){
    die("Anda belum login");
}?>
       <?php  
  $idmk = @$_GET['idmk'];
 $idtest = @$_GET['idtest'];
 
  $number = count($_POST["soal"]);  
  $tambahtext = @$_POST['submit'];
   if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["soal"][$i] != ''))  
           {  

                $soal = mysqli_real_escape_string($connection, $_POST["soal"][$i]);
                $jawabankunci = mysqli_real_escape_string($connection, $_POST["jawabankunci"][$i]);
                $sql = "INSERT INTO tb_soaljawab (idmk, idtest, idsoal, soal, jawabankunci) VALUES('$idmk','$idtest','','$soal','$jawabankunci')";  
                mysqli_query($connection, $sql); 
           }  

      }  
       
 }  
 else  
 {  
      echo "Please Enter Name";  
 }  

 ?> 
