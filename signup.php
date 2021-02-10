
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
 $login_button = '<div class="text-center"> <a class="btn btn-danger border border-dark  px-4 roundbutton" href="'.$google_client->createAuthUrl().'" role:"button "><i class="fa fa-google mr-3 google" aria-hidden="true"></i><span class=" mb-5 googletext">SIGNUP WITH GOOGLE</span></a></div>';
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
<link rel="stylesheet" href="css/cal.css">
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
</head>
<body style="background-color:lightgrey">
<?php
include('connection.php');
// define variables and set to empty values
$nameErr = $emailErr =  $passErr= $emailEr="";
$name=$email=$pass=$create=$ere="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 // check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$_POST['name'])) {
   $nameErr = "Only letters and white space allowed";
}
else{
   $name=$_POST['name'];
}
// check if e-mail address is well-formed
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
  $emailErr = "*Invalid email format";
}
else{
  try{//user_signup
      $mail=$_POST['email'];
      $email_check=$conn->prepare("SELECT Email from user_signup WHERE Email= :email " );
      $email_check->execute([':email'=>$mail]);
      if($email_check->rowCount() == 1)
      {
        $emailEr = "* Soory this Email is already used!.. Please Login or use another Email"; 
      }  
      else
      {
         $email=$mail;
      }
    }
    catch(PDOException $e)
    {
      echo 'Error : '.$e->getmMessage();
    }
   }
//password
if (empty($_POST['pswd'])) {
    $passErr = "*Passwordr is required";
  } 
else {
    $pass=$_POST['pswd']; 
  }
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
if(empty($name) || empty($email) || empty($pass))
{
  $ere ="Fill NAME ,EMAIL and PASSWORD" ;
}

else{  
  echo "https://talabcafe.in/reservation_delete.php?date=".$date."&&time=".$time."&&table=".$table."&&id=".$reservation_id;
  try {
    // begin the transaction
    $conn->beginTransaction();
    // our SQL statements
   $token=bin2hex(random_bytes(15));
    $status="Inactive";
    $password=password_hash($pass,PASSWORD_BCRYPT);//
    $sql= "INSERT INTO user_signup (Name,Email,pass,Token,Status) VALUES (?, ?, ?,?,?)";
    $stm=$conn->prepare($sql);
    if( $stm->execute([$name, $email, $password, $token ,$status]))
    {
  try{

      $subject = "Aapkepanditji Account verification";
$body = "Hello $name ,
Welcome to AapkePanditji ! Before you can begin using your account, you need to activate it using the below link:
 http://localhost/aapkepanditji.com/activate.php?token=$token
Thank you 
";
$headers = "From: aapkepanditj@gmail.com";

if (mail($email, $subject, $body,$headers)) {
    $_SESSION['msgg']="Check your Mail to Activate ypur Account $email";
     header('Location: login.php'); 
  } 
else {
     echo "noo";
    }
  }
  catch(PDOException $e)
  {
    echo "error : " .$e->getmessage();
  }
    // commit the transaction
    $conn->commit();
   $create="ACCOUNT CREATED !.. <BR>Please go on Login Page.";  
   $conn->rollback();
       $conn = null;
}
  }
catch(PDOException $e)
    {
     
    }
  }
} 
?>
<!--end php-->
<div class="clearfix">    
<div class="modal-fade ">
     
   <div class="modal-dialog shadow "> 
      <div class="modal-content bg-info">
    <div class="modal-body">
    <a href="home.php" class="text-muted float-right"><span style="font-size:2rem">&times;</span></a>
        <a href="login.php" class="btn btn-dark shadow border   px-4 " role="button">LOGIN</a>
   <img src="image/logo.png" width="250" height="100" class="d-inline-block align-top mx-auto d-block px-5" alt="logo">   
</div>
    <div class="modal-body">
    <?php  
   if($login_button == '')
   {
    try{        
       $email2=$_SESSION['email'];
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
    catch(PDOExeception $e)
     {
       //echo "Error :".$e->getMessage();
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
                            <div class="error   float-center p-2 "> <?php echo $emailEr;?></div>
                            <div class=" text-muted  float-center p-2"> <?php echo $create;?></div>
</div>
                             
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="" method="POST">

<div class="form-group float-center">
    <label for="uname"></label>
     <input type="text" class="form-control form-control-lg shadow" id="uname" placeholder="Full Name..." autocomplete="off" name="name" required>
     <div class="error   float-right"> <?php echo $nameErr;?></div>
</div>
  
<div class="form-group float-center">
    <label for=email></label>
    <input type="email" class="form-control form-control-lg shadow" id="email" placeholder="Valid Email..." name="email" autocomplete="off" required>
    <div class="error  float-right "><?php echo $emailErr;?></div>
</div>
<div class="form-group float-center">
  <label for="pwd"></label>
  <input type="password" class="form-control form-control-lg shadow" id="pwd" placeholder=" Password..." autocomplete="off" name="pswd" required>
  <div class="error     float-right"> <?php echo $passErr;?></div>
</div>
<div class="form-group form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" name="remember" required> I accept the<a href="" class="text-danger">Terms of Use</a>and <a href="" class="text-danger">Privacy Policy</a>
    <div class="valid-feedback"></div>
    <div class="invalid-feedback">Check this checkbox to continue.</div>
  </label>
</div>
<button type="submit" class="btn btn-success shadow signup" name="submit" value="Submit">SignUp</button>
</form>
     <br>
     <h6 class="text-center my-3 text-dark text-decorotion-none">Already have an Account? <a href="login.php" class="text-danger">Login</a></h6>
   
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
      $f_name=$_SESSION['user_first_name'];
      $l_name=$_SESSION['user_last_name'];
      $id=$_SESSION['user_id'];
      $email=$_SESSION['email'];
    // begin the transaction
    $conn->beginTransaction();
    // our SQL statements
    $sql= "INSERT INTO signup_google (id,F_Name,L_Name,Email) VALUES (?,?,?,? )";
   $stmt=$conn->prepare($sql);
    $stmt->execute([$id,$f_name,$l_name,$email]);

    // commit the transaction
    $conn->commit();
    header('Location:home.php');  
  }
catch(PDOException $e)
    {
    // roll back the transaction if something failed
        $conn->rollback();
      }
      $conn = null;
      }
      include("connection.php");
$id=$_GET["id"];
$date=$_GET["date"];
$time=$_GET["time"];
$data_sql="SELECT Table_name FROM reservation_table WHERE Reservation_id=:id AND 	Date=:date";
$state=$conn->prepare($data_sql);
$state->execute(array(":id"=>$id,":date=>$date"));
while($fetch=$state->fetch(PDO :: FETCH_ASSOC))
{
    $table=$fetch["Table_name"];
}
echo $table;
$time_parts=str_replace(':', '_', $time);
$date_parts = explode(", ", $date);
$t_name=$date_parts[1]."_".$time_parts; 
$table_name=str_replace(' ', '_', $t_name);

$table_parts=explode(",", $table);
$name_parts=str_replace(' ', '_', $table_parts);
foreach($name_parts as $val)
{
    echo $val."<br>";
}
?>
