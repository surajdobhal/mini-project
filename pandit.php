<?php
session_start();

include('connection.php');
$email=$pandit=$pooja="";
$emailErr=$panditErr=$poojaErr="";
$error=$msg=$msgg="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  $emailErr = "*Invalid email format";
}
 else{ 
     $email=$_POST['email'];;
 }
 if (!preg_match("/^[a-zA-Z ]*$/",$_POST['pandit'])) {
  $panditErr = "*Only letters and white space allowed";
}
else{
  $pandit=$_POST['pandit'];
}

if (!preg_match("/^[a-zA-Z ]*$/",$_POST['pooja'])) {
  $poojaErr = "*Only letters and white space allowed";
}
else{
  $pooja=$_POST['pooja'];
}
if(empty($_POST['date'])||empty($email)||empty($_POST['mobile'])||empty($_POST['add'])||empty($pooja))
{
  $error= "*Fill all Information  !..";
}
else
{
try{
  $date=$_POST['date'];
  $mobile=$_POST['mobile'];
  $add=$_POST['add'];
$sql="INSERT INTO booking_pandit(Mobile,Date,Email,Address,Pandit_Name,Pooja_name) VALUES (?,?,?,?,?,?)";
$stmt=$conn->prepare($sql);
if($stmt->execute([ $mobile,$date, $email,$add,$pandit,$pooja]))
{
   $msg= "Booking Successfully !...<br> We will mail Pandit Number in 1-2 days ";
}
else
{
   $msggg="Booking Unsuccessfully !... <br> Please fill booking form again";
}
}
catch(PDOException $e)
{
  echo 'Connection Falied :' .$e->getMessage();
}
}
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
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
   <img src="image/logo.png" width="150" height="100" class="d-inline-block align-top m-0" alt="logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse nav justify-content-lg-end justify-content-md-start justify-content-sm-start " id="navbarNavDropdown" ;>
    <ul class="  navbar-nav  mx-1 " style="font-size: 1.5rem">
      <li class="nav-item  ">
        <a class="nav-link fl" href="home.php">Home </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link active" href="pandit.php">Book Pandit <span class="sr-only">(current)</span> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aarti.php">Aarti</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="chalisa.php">Chalisa</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="rashifal.php">Varshik Rashifal </a>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hindu Calender
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="calender.php">Hindu Calender</a>
          <a class="dropdown-item " href="festival.php">Hindu Festival</a>
          <a class="dropdown-item" href="upwas.php">Hindu Upwas</a>
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="ebook.php">E-Book </a>
      </li>
      
      <?php
      if(isset($_SESSION['name'])||isset($_SESSION['user_first_name']))
      {
       if(isset($_SESSION['pfname']) ||isset($_SESSION['plname'])) 
       {
      
        ?>
        <div class="btn-group dropdown">
       <button type="button" class="btn btn-info dropdown-toggle p-1  text-capitalize" style="font-size: 1.5rem;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <?php echo $_SESSION['pfname']. " " .$_SESSION['plname'];?>
       </button>
       <div class="dropdown-menu">
         <!-- Dropdown menu links -->
         
         <a class="dropdown-item" onclick="return confirm('Are you sure you want to update your profile?');" href="update.php">UPDATE</a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" onclick="return confirm('Are you sure you want to delete your account?');" href="delete.php">DELETE</a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" onclick="return confirm('Are you sure you want to logout your account?');" href="logout.php">LOGOUT</a>
       </div>
      </div>
      
      <?php
      }
      elseif(isset($_SESSION['user_first_name'])&&empty($_SESSION['pfname']))
      {
        ?>
          <div class="btn-group dropdown">
           <button type="button" class="btn btn-info dropdown-toggle p-2  text-capitalize" style="font-size: 1.6rem;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $_SESSION['user_first_name']. " ".$_SESSION['user_last_name'];?> 
            </button>
            <div class="dropdown-menu">
              <!-- Dropdown menu links -->
             <a class="dropdown-item" href="panditregistration.php">PANDIT<BR> REGISTRATION</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" onclick="return confirm('Are you sure you want to logout your account?');" href="logout.php">LOGOUT</a>
            </div>
            </div>
          <?php
      }
      else  
       {
        ?>
          <div class="btn-group dropdown">
           <button type="button" class="btn btn-info dropdown-toggle p-1  text-capitalize" style="font-size: 1.6rem;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $_SESSION['name']?> 
            </button>
            <div class="dropdown-menu">
              <!-- Dropdown menu links -->
             <a class="dropdown-item" href="panditregistration.php">PANDIT<BR> REGISTRATION</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" onclick="return confirm('Are you sure you want to logout your account?');" href="logout.php">LOGOUT</a>
            </div>
            </div>
          <?php
        }
      }
else
{?>
  <li class="nav-item ">
  <a href="signup.php" class="btn btn-danger text-white nav-link p-2" role="button" style="font-size: 1.6rem;">Sign Up</a>
</li> 
<?php
}    
?>    
    </ul>
  </div>
</nav>
</header>

<?php
include('connection.php');
try
{
  $query="SELECT * FROM pandit_registration ";
  $stmt=$conn->prepare($query);
  $stmt->execute();
 ?>
<section class="bg-white">
  <div class="clearfix">
<div class="row">
<div class="col-lg-7 col-md-12 col-xs-12 col-sm-12  my-sm-0 my-xs-0 my-md-0 my-lg-3 mx-lg-4 mx-md-0 mx-xs-0 mx-sm-0 ">
<div class="container-fluid  bordered shadow p-3 bg-dark">
<h1 class="text-center text-danger my-3"> BOOK PANDIT FORM</h1>
    <h4 class="text-center text-info m-2">[ONLINE PANDIT BOOKING]</h4>
    <img src="image/logo.png" width="250" height="150" class="d-inline-block align-top mx-auto d-block m-3" alt="logo">

       <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="" method="POST">
         <div class="container">
         <div class="error text-danger text-center"> <?php echo $error;?></div>
         <div class="error text-danger text-center"> <?php echo $msg;?></div>
         <div class="error text-danger text-center"> <?php echo $msgg;?></div>
         </div>
         <div class="col-lg-8 col-md-10 col-xs-12 col-sm-12 mx-auto ">
       <div class="form-field float-center pt-5">
    <label  for="pooja" class="text-white formtext">POOJA NAME  <span class="text-danger"> *</span></label>
     <input type="text" class="form-control form-control-lg" id="pooja" autocomplete="off" name="pooja" required >
     <div class="error text-danger float-right"> <?php echo $poojaErr;?></div>
    </div>
</div>
<div class="col-lg-8 col-md-10 col-xs-12 col-sm-12 mx-auto ">
       <div class="form-field float-center pt-5">
    <label  for="mobile" class="text-white formtext"> MOBILE NO. <span class="text-danger"> *</span></label>
     <input type="tel" class="form-control form-control-lg" id="mobile" autocomplete="off" name="mobile" required  pattern="[0-9]{10}">
     
     
    </div>
</div>
    <div class="col-lg-8 col-md-10 col-xs-12 col-sm-12 mx-auto ">
       <div class="form-field float-center pt-5">
    <label  for="email" class="text-white formtext">E-MAIL <span class="text-danger"> *</span></label>
     <input type="email" class="form-control form-control-lg" id="email" autocomplete="off" name="email" value="<?php echo $_SESSION['email']; ?>"
     disabled="disabled" required >
     <div class="error text-danger float-right"> <?php echo $emailErr;?></div>
    </div>
</div>
<div class="col-lg-8 col-md-10 col-xs-12 col-sm-12 mx-auto ">
       <div class="form-field float-center pt-5">
    <label  for="add" class="text-white formtext">FULL PERMANENT ADDRESS  <span class="text-danger"> *</span></label>
     <input type="text" class="form-control form-control-lg" id="add" autocomplete="off" name="add" required >
     
    </div>
</div>
<div class="col-lg-8 col-md-10 col-xs-12 col-sm-12 mx-auto ">
       <div class="form-field float-center pt-5">
    <label  for="pandit" class="text-white formtext">PANDIT NAME </label>
     <input type="text" class="form-control form-control-lg" id="pandit" autocomplete="off" name="pandit"  >
     <span class="text-muted float-right"> This is not compulsary? </span>
     <div class="error text-danger float-right"> <?php echo $panditErr;?></div>
    </div>
</div>
<?php
$today = date("Y-m-d");
?>
<div class="col-lg-8 col-md-10 col-xs-12 col-sm-12 mx-auto ">
       <div class="form-field float-center pt-5">
    <label  for="date" class="text-white formtext">DATE  <span class="text-danger"> *</span></label>
     <input type="date" class="form-control form-control-lg" id="date" autocomplete="off" name="date" min=" <?php echo $today; ?>" required >

    </div>
</div>
   
<button type="submit" class="btn btn-primary mx-auto d-block m-5 p-2 " style="font-size:1.8rem">BOOK</button>
</form> 
        
</div>
</div>
<div class="col-lg-4 col-md-12 col-xs-12 col-sm-12  my-3">
<div class="container  p-3  ">
 <h1 class="text-center text-secondary "> SEARCH PANDIT'S</h1>
 <?php
while( $result=$stmt->fetch(PDO :: FETCH_ASSOC))
{
?>

<div class="clearfix">
<div class="card mx-auto my-3 " style="width:330px ; ">
    <img  src="upload/<?php echo $result['Image'] ;?>" alt="" class="card-img-top img-fluid" style="width:100%" >
    <div class="card-body text-muted">
      <h4 class="card-title text-capitalize"><?php echo $result['Salutation']." ".$result['F_name']. " ".$result['L_name'];?> </h4>
      <h6 class="card-text"><?php echo $result['Experience'];?> Years Experience </h6>
      <h6 class="card-text"> <?php echo $result['City'];?></h6>
     
    </div>
  </div>
</div>
<?php
}?>
</div>
</div>
</div>
<?php
//$conn->rollback();
  $conn = null;

}
catch(PDOExeption $e)
{
    echo 'Error : '.$e->getmMessage();
}?>
</div>
</section>
<!-- Site footer -->
<footer class="site-footer">
    <div class="container-fluid px-lg-5 px-md-3 px-xs-2 px-sm-2">
      <div class="row">
        <div class=" col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <h6>About</h6>
          <p class="text-justify">The aim of your Panditji website is to provide religious facility to the person who believes in Hinduism, our effort is to give complete convenience to those who believe in Hinduism, which they had previously received with difficulty. Through this website, we have a detailed description of complete types of Aarti, Chalisa, annual horoscope, Panchang Hinduism books etc., you can easily download them. Most important, through our website you can invite Pandit ji for any kind of auspicious work by inviting Panditji for auspicious work to be done in your home</p>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
          <h6 class="pl-lg-5 pl-md-3 pl-xs-1 pl-sm-1">Categories</h6>
          <ul class=" pl-lg-5 pl-md-3  pl-sm-0 pl-xs-0 footer-links">
            <li><a href="pandit.php" >Book Pandit</a></li>
            <li><a href="panditregistration.php">Pandit Registration</a></li>
            <li><a href="aarti.php">Aarti</a></li>
            <li><a href="chalisa.php">Chalisa</a></li>
            <li><a href="rashifal.php">Varshik Rashifal</a></li>
            <li><a href="ebook.php">E-Book</a></li>
            <li><a href="calender.php">Hindu Calender</a></li>
            <li><a href="festival.php">Hindu Festival</a></li>
            <li><a href="upwas.php">Hindu Upwas</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <h6 class="pl-lg-1 pl-md-3 pl-xs-1 pl-sm-1">Quick Links</h6>
          <ul class="footer-links pl-lg-1 pl-md-3 pl-xs-0 pl-sm-0">
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="policy.php">Privacy Policy</a></li>
            <li><a href="sitemap.php">Sitemap</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text  text-white">Copyright &copy; 2020 All Rights Reserved by 
       <a href="#" class="text-white">AAPKEPANDITJI</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="instagram"href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            
        </div>
      </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>
</html>