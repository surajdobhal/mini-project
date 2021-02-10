<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aapkepanditji";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $email=$_POST['email'];
        $pass=$_POST['pswd'];
         if(empty($email) || empty($pass))  
         {  
              $message = '<label>All fields are required</label>';  
         }  
         else  
         {  
              $stm=$conn->prepare("select * from user_signup where Email=:email");
              $stm->execute (array(":email"=>$email));
              $ft=$stm->fetch(PDO::FETCH_ASSOC);
              if($stm->rowcount()>0)
              {
                 if($pass==$ft['pass']) 
                 {
                    header('Location:home.php');
                 }
                 else
                 {
                     echo "your passward is incorrect";
                     
                 }
              }
         }
     
               

?>