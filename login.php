<?php
include('confi.php');
$login_button = '';
if(isset($_GET["code"]))
{
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
 if(!isset($token['error']))
 {
  
  $google_client->setAccessToken($token['access_token']);
  $_SESSION['access_token'] = $token['access_token'];
  $google_service = new Google_Service_Oauth2($google_client);
  $data = $google_service->userinfo->get();
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }
  if(!empty($data['family_name']))
  {
    $_SESSION['user_last_name'] = $data['family_name'];
  }
  if(!empty($data['email']))
  {
   $_SESSION['email'] = $data['email'];
  }
  if(!empty($data['id']))
  {
    $_SESSION['user_id']=$data['id'];
  }   
}
}
  
if(!isset($_SESSION['access_token']))
{
 $login_button = '<div class="text-center"> <a class="btn btn-danger border border-dark  px-4 roundbutton" href="'.$google_client->createAuthUrl().'" role:"button "><i class="fa fa-google mr-3 google" aria-hidden="true"></i><span class=" mb-5 googletext">LOGIN WITH GOOGLE</span></a></div>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/cal.css">
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">

</head>
<body style="background-color:lightgrey">

<?php
include('connection.php');
// define variables and set to empty values
 $emailErr =  $passErr= $emailEr=$passEr="";
$email=$pass=$ere="";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $emailErr = " * Invalid email format";
  }
   else{ 
       $email=$_POST["email"];;
   }   
//password
if (empty($_POST['pswd'])) {
    $passErr = " * Passwordr is required";
  } else {
    $pass=$_POST['pswd']; 
  }
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
 
if(empty($email)|| empty($pass))
{
    $ere="FILL EMAIL AND PASSWORD";
}
else
{
try{
  $conn->beginTransaction();  
  $sql="select Email,pass,Name from user_signup where Email=:email And Status='Active'";
  $stm=$conn->prepare($sql);
  if($stm->execute (array(":email"=>$email)))
  {
  $ft=$stm->fetch(PDO::FETCH_ASSOC);
  if($stm->rowCount()>0)
  {
    $pass_check=password_verify($pass,$ft['pass']);
     if($pass_check) 
     {
      //$_SESSION['start'] = time(); // Taking now logged in time.
      // Ending a session in 30 minutes from the starting time.
      //$_SESSION['expire'] = $_SESSION['start'] + (1 * 60);
       //pandit exit

       $query="select * from pandit_registration where Email=:email";
       $stmt=$conn->prepare($query);
       $stmt->execute(array(":email"=>$email));
       $result=$stmt->fetch(PDO::FETCH_ASSOC);
       if($stmt->rowCount()>0)
       {
          $_SESSION["email"]=$result['Email'] ;      
          $_SESSION['pfname']=$result['F_name'];
          $_SESSION['plname']=$result['L_name'];
          $_SESSION['name']=$ft['Name'];
          header('Location:home.php');
        }
        else
        {
          session_start();
          $_SESSION["email"]=$ft['Email'];
           $_SESSION["name"]=$ft['Name'];
        header('Location:home.php');
        }
      }
     else
     {
         $passEr =" * Your Passward is Incorrect";   
     }
  }
  else
  {
    $emailEr=" * This Email is not exist!... <br> Please create a Account.";
  }
}
else
{

}
  $res1 = $conn->commit(); 
}
catch(PDOException $e)
    {
      $conn->rollBack();
    //echo "Error : ".$e->getMessage();
    }
}
}
?>
<div class="clearfix">    
<div class="modal-fade ">
<div class="modal-dialog shadow "> 
<div class="modal-content bg-info">
<div class="modal-body">
<a href="home.php" class="text-muted float-right"><span style="font-size:2rem">&times;</span></a>
<a href="signup.php" class="btn btn-dark border border-white shadow px-4 " role="button">SIGNUP</a>
<img src="image/logo.png" width="250" height="100" class="d-inline-block align-top mx-auto d-block px-5" alt="logo">   
</div>
    <div class="modal-body">
    <?php  
   if($login_button == '')
{ 
  try{        
     $email2=$_SESSION['user_email_address'];
     $query="select F_name ,L_name from pandit_registration where Email=:email ";
      $stmtt=$conn->prepare($query);
      $stmtt->execute(array(":email"=>$email2)); 
      $resultt=$stmtt->fetch(PDO::FETCH_ASSOC);
      if($stmtt->rowCount()>0)
      {
      
         $_SESSION["pfname"]=$resultt['F_name'];
         $_SESSION["plname"]=$resultt['L_name'];         
        header('Location: home.php');
      }
      else{
      header('Location: home.php'); 
   }
}
catch(PDOException $E)
{
  //echo "Error : " .$e->getMessage();
}
}
   else
    {
     echo '<div >'.$login_button . '</div>';
    }
    ?>      
<div class="or-container">
<div class="line-separator"></div>
<div class="or-label">OR</div>
<div class="line-separator"></div>
</div>
<div class="container text-center border-transparent">
<div class="   float-center p-2 text-white bg-dark">
<?php
if(isset($_SESSION['msgg']))
{
  echo $_SESSION['msgg'];
}
else
{
  echo $_SESSION['msgg']="You are Logged Out. Please Login Again.";
}
?>
</div>
<div class="error   float-center p-2 text-danger"> <?php echo $emailEr;?></div>
<div class="error   float-center p-2 text-danger"> <?php echo $passEr;?></div>
<div class="error   float-center p-2 text-danger"> <?php echo $ere;?></div>
</div>

   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="" method="POST">
  
     <div class="form-group float-center ">
         <label for=email></label>
       <input type="email" class="form-control form-control-lg shadow" id="email" placeholder=" Email..." name="email" autocomplete="off" required>
       <div class="error  float-right "><?php echo $emailErr;?></div>
     </div>
    <div class="form-group float-center">
       <label for="pwd"></label>
       <input type="password" class="form-control form-control-lg shadow" id="pwd" placeholder=" Password..." autocomplete="off" name="pswd" required>
       <div class="error  float-right "><?php echo $passErr;?></div>
     </div>

     <button type="submit" class="btn btn-success shadow signup">Login</button>
     </form>
     <br>
     <h6 class="text-center my-3 text-dark text-decorotion-none">If you have not Account ? <a href="signup.php" class="text-danger">Signup</a></h6>
   
    </div>

  </div>
</div></div>
</div></div>
</body>
</html>


<?php
 if($login_button == '')
 {
try {
  include('connection.php');
    $f_name= $_SESSION['user_first_name'];
     $l_name=$_SESSION['user_last_name'];
     $id=$_SESSION['user_id'];
     $email2=$_SESSION['email'];
    // begin the transaction
    $conn->beginTransaction();
    // our SQL statements
    $sql= "INSERT INTO signup_google (id,F_Name,L_Name,Email) VALUES (?,?,?,?)";
    $stmt=$conn->prepare($sql);
    $stmt->execute([$id,$f_name,$l_name,$email2]);
     header('Location:home.php');
    $conn->commit();
    $conn->rollback();  
     $conn = null;
  }
catch(PDOException $e)
    {
      echo 'Error : '.$e->getMessage();
     }
 }
?>
