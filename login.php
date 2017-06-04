<?php


include "inc/connection.php";
if(isset($_POST['submit']))
{               
    $username   = $_POST['username'];
    $password   = $_POST['password'];
                    
    $query = mysqli_query($connection, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($query) == 0)
    {
        $error = "Username or Password is invalid";
    }
    else
    {
        $row = mysqli_fetch_assoc($query);
        $_SESSION['username']=$row['username'];
        $_SESSION['level'] = $row['level'];
        
        if($row['level'] == "Administrator")
        {
            
            header("Location: dashboardAdm.php");
        }
        else if($row['level'] =="Dosen")
        {
            header("Location: dashboardLect.php");
        }
        else if($row['level'] == "Mahasiswa")
        {
            
            header("Location: dashboardStud.php");
        }
        else
        {
            $error = "Failed Login";
          
        }
    }
}           
?>