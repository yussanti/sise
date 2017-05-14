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

 
  $number = count($_POST["username"]);  
  $tambahtext = @$_POST['submit'];
   if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["username"][$i] != ''))  
           {  

                $username = mysqli_real_escape_string($connection, $_POST["username"][$i]);
                 $sql = "INSERT INTO tb_peserta (idmk, username) VALUES('$idmk','$username')";  
                mysqli_query($connection, $sql); 

           }  

      }  
       
 }  
 else  
 {  
      echo "Please Enter Name";  
 }  

 ?> 
