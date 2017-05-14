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
	$email=$_POST["email"];
	$password=$_POST["password"];
	$name=$_POST["name"];
	$npm=$_POST["npm"];
	$major=$_POST["major"];
	
	 $role = @$_POST['q'];
	$usr=$_GET['usr'];
	
	
	
	
		mysql_query("UPDATE tb_user SET username='$usr', email ='$email', password ='$password', name='$name', npm='$npm', major='$major', level='$role',img='' where username='$usr'");
		

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