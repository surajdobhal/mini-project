<?php
session_start();
include('connection.php');
if(isset($_GET['token']))
{
   $token=$_GET['token'];
   $update="UPDATE user_signup set Status='Active' where Token='$token'";
   $stmt=$conn-> prepare($update);
   if($stmt->execute())
   {
       if(isset($_SESSION['msgg']))
       {
           $_SESSION['msgg']="Account Verification Successfully ..."; 
           header('location:login.php');
        }
       else{
        $_SESSION['msgg']="You are Logged out."; 
        header('location:login.php');
       }

   // header('location:signup.php');
    }
}
?>