<?php
 session_start();
include('connection.php');
// define variables and set to empty values
$fnameErr =$lnameErr= $emailErr= $cityErr=$error= $saluErr="";
$fname=$lname=$email=$city=$salut= $mobile="";
$mobile=$add=$about=$exp=$age="";
$phoneEr=$print="";
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  if(empty($_POST['salut']))
    {
      $saluErr="Fill Salutation";
    }
     else{
    $salut=$_POST['salut'];
     }
     
  // check if name only contains letters and whitespace
    //fname
    if (!preg_match("/^[a-zA-Z ]*$/",$_POST['fname'])) {
      $fnameErr = "*Only letters and white space allowed";
    }
    else{
      $fname=$_POST['fname'];
    }
    //lname
    if (!preg_match("/^[a-zA-Z ]*$/",$_POST['lname'])) {
      $lnameErr = "*Only letters and white space allowed";
    }
    else{
      $lname=$_POST['lname'];
    }
    // check if e-mail address is well-formed
    /*if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      $emailErr = "*Invalid email format";
    }
     else{ 
         $email=$_POST["email"];
     }*/   
    //city
    if (!preg_match("/^[a-zA-Z ]*$/",$_POST['city'])) {
      $cityErr = "*Only letters and white space allowed";
    }
    else{
      $city=$_POST['city'];
    }
    //mobile verification
    if (empty($_POST['mobile']))
     {
      $Er = "*Invalid email format";
    }
     else{
       try{
      $phone=$_POST['mobile'];
      $mobile_check=$conn->prepare("SELECT Mobile from pandit_registration WHERE Mobile= :phone " );
       $mobile_check->execute([':phone'=>$phone]);
       
       if($mobile_check->rowCount() == 1)
       {
         $phoneEr = "* Soory this Mobile No. is already used!.. Please submit another number "; 
        }  
      else
      {
         $mobile=$_POST['mobile'];
      
      }
    }
    catch(PDOException $e)
    {
      //echo 'Error : '.$e->getmMessage();
    }
  }
  $email=$_SESSION[ 'email'];
$add=$_POST['add'];
    $about=$_POST['about'];
    $exp=$_POST['exp'];
    $age=$_POST['age'];

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if(empty($fname)||empty($city)||empty($mobile)||empty($email)||empty($add)||empty($exp)||empty($age))  
  {
     $error= "*Fill all Information  !..";
  }
  else{
   
    try{
   
		$images=$_FILES['img']['name'];
    $tmp_dir=$_FILES['img']['tmp_name'];
		$imageSize=$_FILES['img']['size'];

		$upload_dir='upload/';
		$imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION));
		$valid_extensions=array('jpeg', 'jpg', 'png');
    $picProfile=rand(1000, 1000000).".".$imgExt;
    
		move_uploaded_file($tmp_dir, $upload_dir.$picProfile);
		$sql="INSERT INTO  pandit_registration (Salutation,	F_name,	L_name,Email,	Mobile,	City,	Experience,	Age,	Address,	Image,	About	) 
    VALUES ( ?,?,?,?,?,?,?,?,?,?,?)";
    $stmt=$conn->prepare($sql);

		if($stmt->execute([$salut,$fname,$lname,$email,$mobile,$city,$exp,$age,$add,$picProfile,$about]))
		{
     session_start();
    $_SESSION['pfname']=$fname;
    $_SESSION['plname']=$lname;
    $_SESSION['email']=$email;
    header('Location:home.php');
    }
    else 
		{
       $print="*Network Issue !... Please fill registration form";
    }
  $conn->rollback();
  $conn = null;
}
catch(PDOException $e)
{
  echo "Connection failed: " . $e->getMessage();
}}
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title></title>
    <style>
    .submit{
      font-size:1.6rem;
    }
      .formtext
  {
    font-size:1.25rem;
  }
    }
    </style>
</head>

<body >

<?php 
 
  $emails=$_SESSION['email'];
  ?>
  <div class="clearfix">
    <div class="container border shadow rounded my-5 bg-light p-0">
    <div class="container bg-primary rounded py-1 ">
    <a href="home.php" class="text-muted float-right"><span style="font-size:3rem">&times;</span></a>
    <h1 class="text-center text-danger my-3 font-weight-bold">PANDIT REGISTRATION FORM</h1>
    <h3 class="text-center text-dark m-2 font-weight-bold">[ JOIN WITH US ]</h3>
    <div class="clearfix">
    <img src="image/logo.png" width="200" height="130" class="d-inline-block align-top mx-auto d-block m-3" alt="logo">
    </div>
    <div class="text-center text-light font-weight-bold">Please fill right information<br> This record check by our excutive team </div>
    </div>
     <div class="container">
     <div class="error text-danger text-center"> <?php echo $error;?></div>
     <div class="error text-danger text-center"> <?php echo $phoneEr;?></div>
     <div class="error text-danger text-center"> <?php echo $print;?></div>
     </div>    

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="p-4" method="POST" enctype="multipart/form-data">
        <div class="row">
    <div class="col-lg-2 col-md-3 col-xs-12 col-xs-10">
   
  <div class="input-field ">
    <select name="salut" class="text-white" required >
      <option value=""  >Salutation <span class="text-danger"> *</span></option>
      <option value="Pandit">Pandit</option>
      <option value="Acharya">Acharya</option>
      <option value="Shastri">Shastri</option>
      <option value="Vyas">Vyas</option>
    </select>
    <div class="error text-danger text-center"> <?php echo $saluErr ;?></div>
  </div>
  </div>
  

<div class="col-lg-5 col-md-5 col-xs-12 col-xs-12">
<div class="input-field float-center">
    <label  for="fname" class="active">First Name <span class="text-danger"> *</span></label>
     <input type="text" class="form-control form-control-lg" id="fname" autocomplete="off" name="fname" required >
     <div class="error text-danger text-center"> <?php echo $fnameErr;?></div>
    </div>
    </div>
    <div class="col-lg-5 col-md-4 col-xs-12 col-xs-12">
    <div class="input-field float-center">
    <label for="lname" class="active">Last Name  </label>
     <input type="text" class="form-control form-control-lg" id="name" autocomplete="off" name="lname" >
     <div class="error text-danger text-center"> <?php echo $lnameErr;?></div>
    </div>
  </div>
  </div>
  
<div class="row">
<div class="col-lg-6 col-md-6 col-xs-12 col-xs-12">
<div class="input-field float-center">
    <label for="email">E-Mail <span class="text-danger">*</span></label>
    
    <input type="email" class="form-control form-control-lg" id="email" name="email"  value="<?php echo $emails;?>"autocomplete="off" required disabled="disabled">
    <div class="error text-danger text-center"> <?php echo $emailErr;?></div>  
  </div>
    </div>
    <div class="col-lg-6 col-md-6 col-xs-12 col-xs-12">
    <div class="input-field float-center">
    <label for=mobile>Mobile No. <span class="text-danger">*</span></label>
    <input type="tel" class="form-control form-control-lg"  id="mobile" name="mobile" autocomplete="off" required  pattern="[0-9]{10}">
    </div>
    </div>
    </div>

<div class="row">
<div class="col-lg-8 col-md-8 col-xs-12 col-xs-12">
    <div class="input-field float-center">
    <label for="add">Address <span class="text-danger">*</span></label>
    <input type="text" class="form-control form-control-lg" id="add" name="add" autocomplete="off" required >
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-xs-12 col-xs-12">
    <div class="input-field float-center">
    <label for=city>City <span class="text-danger">*</span></label>
    <input type="text" class="form-control form-control-lg" id="city" name="city" autocomplete="off" required >
    <div class="error text-danger text-center"> <?php echo $cityErr;?></div>  
  </div>
    </div>

    </div>
     
    <div class="row">
<div class="col-lg-8 col-md-8 col-xs-12 col-xs-12">
    <div class="input-field float-center">
    <label for="about">About</label>
    <input type="text" class="form-control form-control-lg" id="about" name="about" autocomplete="off" data-length="120" >
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-xs-12 col-xs-12">
    <div class="input-field float-center">
    <label for="exp">Experience <span class="text-danger">*</span></label>
    <input type="number" class="form-control form-control-lg" id="exp" name="exp" autocomplete="off" required >
    </div>
    </div>
    </div>

    <div class="row">
<div class="col-lg-8 col-md-8 col-xs-12 col-xs-12">
<div class="file-field input-field">
      <div class="btn  btn-danger">
        <span>Image</span>
        <input type="file"  name="img">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" name="" placeholder="Upload your Photo" autocomplete="off">
      </div>
    </div>

   
   </div>
    <div class="col-lg-4 col-md-4 col-xs-12 col-xs-12">
    <div class="input-field float-center">
    <label for="age">Age <span class="text-danger">*</span></label>
    <input type="number" class="form-control form-control-lg" id="age" name="age" autocomplete="off" required >
    </div>
    </div>
</div>
<p>
      <label>
        <input type="checkbox" class="filled-in"  required/>
        <span>I accept the<a href="">Terms of Use</a>and <a href="">Privacy Policy</a></span>
      </label>
    </p>
<button type="submit" class="btn-success p-2 rounded mx-auto d-block m-2 shadow submit"  name="submit" value="register">Rigister</button>


</form>
</div>
  </div>

</body>
</html>
<!--script-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/js/materialize.min.js"></script>         
<script>
(function($){
  $(function(){
    // Plugin initialization
    $('select').not('.disabled').formSelect();
  }); 
})(jQuery); // end of jQuery name space
</script>


