
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<style>
    .submit{
      font-size:1.6rem;
    }
    .msg{
      font-size: 1.5rem;
    }
    
    </style>
</head>
<body>
  <?php 
    $fnameErr =$lnameErr=$cityErr=$err=$msg=$print="";
    $fname=$lname=$city="";
   session_start();
   include('connection.php');
   $email=$_SESSION['email'];
   $sql="select * from pandit_registration where Email=? ";
   $stmm=$conn->prepare($sql);
   $stmm->execute([$email]);
   $res=$stmm->fetch(PDO::FETCH_ASSOC );
   if(isset($_POST['submit']))
   {

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
     //city
     if (!preg_match("/^[a-zA-Z ]*$/",$_POST['city'])) {
      $cityErr = "*Only letters and white space allowed";
    }
    else{
      $city=$_POST['city'];
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  if(empty($fname)||empty($lname)||empty($city))
{
  $err="Please Fill valid input !."; 
}
else  
{ 
    try{ 
      $emails=$_SESSION['email'];
     $salut=$_POST['salut'];
     
     $mobile=$_POST['mobile'];
     $about=$_POST['about'];
     
      $add=$_POST['add'];
    
      $exp=$_POST['exp'];
      $age=$_POST['age'];

      $images=$_FILES['img']['name'];
    $tmp_dir=$_FILES['img']['tmp_name'];
		$imageSize=$_FILES['img']['size'];

		$upload_dir='upload/';
		$imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION));
		$valid_extensions=array('jpeg', 'jpg', 'png');
    $picProfile=rand(1000, 1000000).".".$imgExt;
    
		move_uploaded_file($tmp_dir, $upload_dir.$picProfile);


      $sql="UPDATE pandit_registration SET Salutation='$salut' ,F_name='$fname' ,L_name='$lname',Mobile='$mobile',City='$city',Experience=$exp,Age=$age,Address='$add',Image='$picProfile',About='$about' WHERE Email='$emails'";
      $stmt=$conn->prepare($sql);
      
          if($stmt->execute())
          {
       echo "<script type>
       alert('UPDATED SUCCESSFULLY');
       </script>
       ";
      $_SESSION['pfname']=$fname;
      $_SESSION['plname']=$lname;
      $_SESSION['email']=$email;
      header('location:home.php'); 

      }
      else 
          {
         $print="*Network Issue !... Please fill registration form";
      }
    } 
  catch(PDOException $e)
  {

  }
  
}  
   }   
   ?>
 
<div class="clearfix">
    <div class="container border shadow rounded my-5 bg-light p-0">
    <div class="container bg-primary rounded py-1 ">
    <a href="home.php" class="text-dark text-decorotion-none float-right"><span style="font-size:3rem">&times;</span></a>
    <h1 class="text-center text-danger my-3 font-weight-bold">PANDIT UPDATION FORM</h1>
    <h3 class="text-center text- my-2 font-weight-bold">[ JOIN WITH US ]</h3>
    <div class="clearfix">
    <img src="image/logo.png" width="200" height="130" class="d-inline-block align-top mx-auto d-block m-3" alt="logo">
    </div>
    
    <div class="text-center text-white my-2 lead font-weight-bold ">Please fill right information<br> This record check by our excutive team </div>
     <div class="container">
     </div>  
     </div>  
<div class="container">
<div class="error text-danger text-center py-3"> <?php echo $err;?></div>

<div class="error text-danger text-center py-3"> <?php echo $print;?></div>


</div>
    <form action="" class="p-4" method="POST" enctype="multipart/form-data">
    

        <div class="row">
    <div class="col-lg-2 col-md-3 col-xs-12 col-xs-10">
   
  <div class="input-field ">
    <select name="salut" class="text-white">
      <option value="<?php echo $res['Salutation']; ?>"  ><?php echo $res['Salutation']; ?> </option>
      <option value="Pandit">Pandit</option>
      <option value="Acharya">Acharya</option>
      <option value="Shastri">Shastri</option>
      <option value="Vyas">Vyas</option>
    </select>
    
  </div>
  </div>
  

<div class="col-lg-5 col-md-5 col-xs-12 col-xs-12">
<div class="input-field float-center">
    <label  for="fname" class="active">First Name <span class="text-danger"> *</span></label>
     <input type="text" class="form-control form-control-lg" id="fname" autocomplete="off" name="fname" value="<?php echo $res['F_name'];?>" required >
     <div class="error text-danger text-center"> <?php echo $fnameErr;?></div>
     </div>
    </div>
    <div class="col-lg-5 col-md-4 col-xs-12 col-xs-12">
    <div class="input-field float-center">
    <label for="lname" class="active">Last Name  </label>
     <input type="text" class="form-control form-control-lg" id="name" autocomplete="off" name="lname" value="<?php echo $res['L_name'];?>" >
     <div class="error text-danger text-center"> <?php echo $lnameErr;?></div>
        </div>
  </div>
  </div>
<div class="row">
<div class="col-lg-6 col-md-6 col-xs-12 col-xs-12">
<div class="input-field float-center">
    <label for="email">E-Mail <span class="text-danger">*</span></label>
    <input type="email" class="form-control form-control-lg" id="email" name="email" value="<?php echo $res['Email'];?>" autocomplete="off" disabled="disabled">
    <div class="error text-info text-right">E-Mail are not Update</div>
  </div>
    </div>
    <div class="col-lg-6 col-md-6 col-xs-12 col-xs-12">
    <div class="input-field float-center">
    <label for=mobile>Mobile No. <span class="text-danger">*</span></label>
    <input type="tel" class="form-control form-control-lg"  id="mobile" name="mobile" value="<?php echo $res['Mobile'];?>" autocomplete="off" required  pattern="[0-9]{10}">
    </div>
    </div>
    </div>

<div class="row">
<div class="col-lg-8 col-md-8 col-xs-12 col-xs-12">
    <div class="input-field float-center">
    <label for="add">Address <span class="text-danger">*</span></label>
    <input type="text" class="form-control form-control-lg" id="add" name="add" value="<?php echo $res['Address'];?>" autocomplete="off" required >
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-xs-12 col-xs-12">
    <div class="input-field float-center">
    <label for=city>City <span class="text-danger">*</span></label>
    <input type="text" class="form-control form-control-lg" id="city" name="city" value="<?php echo $res['City'];?>" autocomplete="off" required >
    <div class="error text-danger text-center"> <?php echo $cityErr;?></div>
  </div>
    </div>

    </div>
     
    <div class="row">
<div class="col-lg-8 col-md-8 col-xs-12 col-xs-12">
    <div class="input-field float-center">
    <label for="about">About</label>
    <input type="text" class="form-control form-control-lg" id="about" name="about" autocomplete="off" value="<?php echo $res['About'];?>" data-length="120" >
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-xs-12 col-xs-12">
    <div class="input-field float-center">
    <label for="exp">Experience <span class="text-danger">*</span></label>
    <input type="number" class="form-control form-control-lg" id="exp" name="exp" autocomplete="off" value="<?php echo $res['Experience'];?>" required >
    </div>
    </div>
    </div>

    <div class="row">
<div class="col-lg-8 col-md-8 col-xs-12 col-xs-12">
<div class="file-field input-field">
      <div class="btn  btn-danger">
        <span>Image</span>
        <input type="file"  name="img" value="<?php echo $res['Image'];?>">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" name="" value="<?php echo $res['Image'];?>" placeholder="Upload your Photo" autocomplete="off">
      </div>
    </div>

   
   </div>
    <div class="col-lg-4 col-md-4 col-xs-12 col-xs-12">
    <div class="input-field float-center">
    <label for="age">Age <span class="text-danger">*</span></label>
    <input type="number" class="form-control form-control-lg" id="age" name="age" value="<?php echo $res['Age'];?>" autocomplete="off" required >
    </div>
    </div>
</div>
<p>
      <label>
        <input type="checkbox" class="filled-in"  required/>
        <span>I accept the<a href="">Terms of Use</a>and <a href="">Privacy Policy</a></span>
      </label>
    </p>
<button type="submit" class="btn-success p-2 mx-auto d-block m-2  rounded submit"  name="submit" value="submit">Update</button>


</form>
</div>
  </div>


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

 

</body>
</html>