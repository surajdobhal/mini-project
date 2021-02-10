<?php
session_start();
/*if(isset($_SESSION['name'])||isset($_SESSION['user_email_address']))
{
  $now = time(); // Checking the time now when home page starts.

  if ($now > $_SESSION['expire']) {
       header('Location:logout.php');
    }
  }*/ 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" media="all" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/flaticon.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.navtext
{
  font-size:1.3rem;
}

html,
body,
header,
#intro {
    height: 100%;
}
#intro{
  background:linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url("image/hindu3 (1).jpg")no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  
}
.hero-text {
  font-size:2.5rem;
  text-align: left;
  position: absolute;
  top: 65%;
  left: 30%;
  transform: translate(-50%, -50%);
  color: #94cad2;
  font-weight: bold;
}
.hero-text a
{
  font-size:1.4rem;
}
.section-bg {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  padding: 5rem 0; }
.section-bg.style-1 {
    position: relative; }
.section-bg.style-1:before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: #183661;
      opacity: 0.8;
      z-index: 0; }
.section-bg.style-1 > .container {
      z-index: 2; }
.section-bg.style-1 .icon {
      font-size: 3.5rem;
      color: #51be78; }
.section-bg.style-1 h3 {
     /* font-size: 20px;*/
      color: #51be78;
      margin-bottom: 30px;
       }
.section-bg.style-1 h1{
          /*  color:#51be78;*/
        text-align:center;
        margin-bottom: 4rem;
        font-size:5rem;

      } 
  
.section-bg.style-1 p {
      color: #7697c6; }
@media screen and (max-width: 800px) {
  .section-bg .style-1 h1{
    font-size:3rem;
  }
}
@media screen and (min-width:1024px) {
  
 
}

@media screen and (max-width: 800px) {
  .hero-text {
    font-size:2rem;
    left: 40%;
  }
 
}

</style>
</head>
<body style="overflow-x: hidden; " class="" >
	<header>
  <div id="intro" >
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark strick-top" >
<div class="container">
   <img src="image/logo.png" width="150" height="100" class="d-inline-block align-top m-0" alt="logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse nav justify-content-lg-end justify-content-md-start justify-content-sm-start " id="navbarNavDropdown" ;>
    <ul class="  navbar-nav navtext pr-3" >
      <li class="nav-item active px-2 ">
        <a class="nav-link fl" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item px-2">
        <a class="nav-link" href="pandit.php">Book Pandit </a>
      </li>
      <li class="nav-item px-2">
        <a class="nav-link" href="aarti.php">Aarti</a>
      </li>
      <li class="nav-item px-2">
        <a class="nav-link" href="chalisa.php">Chalisa</a>
      </li>
      <li class="nav-item px-2">
        <a class="nav-link" href="rashifal.php">Varshik Rashifal </a>
      </li>
      <li class="nav-item dropdown px-2">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hindu Calender
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="calender.php">Hindu Calender</a>
          <a class="dropdown-item" href="festival.php">Hindu Festival</a>
          <a class="dropdown-item" href="upwas.php">Hindu Upwas</a>
        </div>
      </li>
      <li class="nav-item px-2">
        <a class="nav-link" href="ebook.php">E-Book </a>
      </li>
     
      <!--?php
      if(isset($_SESSION['name'])||isset($_SESSION['user_first_name']))
      {
       if(isset($_SESSION['pfname']) ||isset($_SESSION['plname'])) 
       {
      
        ?>
        <div class="btn-group dropdown">
       <button type="button" class="btn btn-info dropdown-toggle p-1  text-capitalize" style="font-size: 1.5rem;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <!?php echo $_SESSION['pfname']. " " .$_SESSION['plname'];?>
       </button>
       <div class="dropdown-menu">
          Dropdown menu links 
         
         <a class="dropdown-item" onclick="return confirm('Are you sure you want to update your profile?');" href="update.php">UPDATE</a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" onclick="return confirm('Are you sure you want to delete your account?');" href="delete.php">DELETE</a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" onclick="return confirm('Are you sure you want to logout your account?');" href="logout.php">LOGOUT</a>
       </div>
      </div>
      
      <!?php
      }
      elseif(isset($_SESSION['user_first_name'])&&empty($_SESSION['pfname']))
      {
        ?>
          <div class="btn-group dropdown">
           <button type="button" class="btn btn-info dropdown-toggle p-1  text-capitalize" style="font-size: 1.6rem;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <!?php echo $_SESSION['user_first_name']. " ".$_SESSION['user_last_name'];?> 
            </button>
            <div class="dropdown-menu">
              <!- Dropdown menu links -
             <a class="dropdown-item" href="panditregistration.php">PANDIT<BR> REGISTRATION</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" onclick="return confirm('Are you sure you want to logout your account?');" href="logout.php">LOGOUT</a>
            </div>
            </div>
          <!?php
      }
      else  
       {
        ?>
          <div class="btn-group dropdown">
           <button type="button" class="btn btn-info dropdown-toggle p-1  text-capitalize" style="font-size: 1.6rem;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <!?php echo $_SESSION['name']?> 
            </button>
            <div class="dropdown-menu">
              <!- Dropdown menu links --
             <a class="dropdown-item" href="panditregistration.php">PANDIT<BR> REGISTRATION</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" onclick="return confirm('Are you sure you want to logout your account?');" href="logout.php">LOGOUT</a>
            </div>
            </div>
          <!?php
        }
      }
else
{?>
  <li class="nav-item ">
  <a href="signup.php" class="btn btn-danger text-white nav-link p-2" role="button" style="font-size: 1.6rem;">Sign Up</a>
</li> 
<!?php
}    
?-->   
</ul>
</div>
</nav>
</div>
</div>


<div class="hero-text ">
    <p>"अग्रतः चतुरोवेदः पृष्ठनः सशरं धनुः।</p>
    <p>इंद ब्राहमिदंक्षांत शस्त्रादयिशरादपि॥"</p>
    <a href="pandit.php" class="btn btn-outline-light mx-lg-4 mb-3"  role="button">Book Pandit</a>
    <a href="registration.php" class="btn btn-outline-light mx-lg-4 mb-3  "  role="button">Pandit Registration</a>
    <div>
    
</div>
</header>
<!--pandit work-->
<section>
<div class="section-bg style-1" style="background-image: url('image/hindu3 (2).jpg');">
        <div class="container">
       
        <h1>HOW PANDIT'S BOOK</h1>
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-mortarboard"></span>
              <h3>STEP-1</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-school-material"></span>
              <h3>STEP-2</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-library"></span>
              <h3>STEP-3</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                Dolore, amet reprehenderit.</p>
            </div>
          </div>
        </div>
      </div>
</section>
<section >
<div class="clearfix"><br>
  <div class="container-fluid  rounded   mx-auto ">
    <h2 class=" display-4 text-center mt-3 text-danger">HOW PANDIT'S BOOK?</h2>
    <div class="row  m-lg-5 m-md-0">
   <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3 mx-auto ">	
   <div class="card-body  bg-dark text-white cardborder shadow">
        <h5 class="card-title text-center">STEP-1</h5>
        <div class="dropdown-divider border-white"></div>
        <p class="card-text pt-3 cardtext">First click on Book Pandit. Fill the requested information carefully.</p>
        <div class="dropdown-divider border-white"></div>
        <p class="card-text pt-3 cardtext">  सबसे पहले बुक पंडित पर क्लिक करें ।  पूछी गयी जानकारी को ध्यान पूर्वक भरें ।</p>
       <div class="text-center p-2 my-2"> <a href="pandit.php" class="btn btn-info ">BOOKING FORM</a></div>
      </div>
    </div>

   <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3 mx-auto">
   <div class="card-body  bg-dark text-white cardborder shadow">
        <h5 class="card-title text-center ">STEP-2</h5>
        <div class="dropdown-divider border-white "></div>
        <p class="card-text cardtext pt-3"> After filling the correct information, click on the Book Pandit</p>
        <div class="dropdown-divider border-white"></div>
        <p class="card-text cardtext pt-3">सही जानकारी भरने के बाद बुक पंडित पर क्लिक करें ।</p>
        <div class="text-center p-2 my-2"> <a href="pandit.php" class="btn btn-info ">BOOKING FORM</a></div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3 mx-auto">
   <div class="card-body  bg-dark text-white cardborder shadow">
        <h5 class="card-title text-center ">STEP-3</h5>
        <div class="dropdown-divider border-white "></div>
        <p class="card-text cardtext pt-1"> Pandit booking information will be given to you through Gmail and Panditji's mobile number and address will be given to you through Gmail or Sms.</p>
        <div class="dropdown-divider border-white"></div>
        <p class="card-text cardtext pt-1">पंडित बुकिंग की जानकारी आपको Gmail के माध्यम से दी जाएगी और पंडित जी के मोबाइल नंबर और पता आपको जीमेल या एसएमएस के माध्यम से दिया जाएगा।</p>
        
      </div>
    </div>

  </div>
 </div>
 </div>
</div>	
</section>

<!--pandit work end-->
<!--pandit registration-->
<section >
<div class="clearfix"><br>
  <div class="container-fluid  rounded   mx-auto ">
    <h2 class="  text-center my-3 text-muted">HOW PANDIT'S REGISTRATION?</h2>
    <div class="row  m-lg-5 m-md-0">
   <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3 mx-auto ">	
   <div class="card-body  bg-dark text-white cardborder shadow">
        <h5 class="card-title text-center">STEP-1</h5>
        <div class="dropdown-divider border-white"></div>
        <p class="card-text pt-3 cardtext">Login on आपकेपंडिजी.com. Click on the pandit registration.</p>
        <div class="dropdown-divider border-white"></div>
        <p class="card-text pt-3 cardtext">आपकेपंडिजी.com पर लॉगिन करें | पंडित रजिस्ट्रेशन पर क्लिक करे |</p>
       <div class="text-center p-2 my-2"> <a href="pandit.php" class="btn btn-info ">REGISTRATION FORM</a></div>
      </div>
    </div>

   <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3 mx-auto">
   <div class="card-body  bg-dark text-white cardborder shadow">
        <h5 class="card-title text-center ">STEP-2</h5>
        <div class="dropdown-divider border-white "></div>
        <p class="card-text cardtext pt-3">Follow the instructions and fill the information asked in the registration form. Click on register now . </p>
        <div class="dropdown-divider border-white"></div>
        <p class="card-text cardtext pt-3"> दिए गए निर्देशों का पालन करके रजिस्ट्रेशन फॉर्म में पूछी गयी जानकारी भरे । रजिस्टर  पर क्लिक  करे ।</p>
        <div class="text-center  "> <a href="pandit.php" class="btn btn-info ">REGISTRATION FORM</a></div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3 mx-auto">
   <div class="card-body  bg-dark text-white cardborder shadow">
        <h5 class="card-title text-center ">STEP-3</h5>
        <div class="dropdown-divider border-white "></div>
        <p class="card-text cardtext pt-1"> After the verification of your information, you will be given the information of Pandit registration on your given mail.</p>
        <div class="dropdown-divider border-white"></div>
        <p class="card-text cardtext pt-1"> पंडित बुकिंग की जानकारी आपको Gmail के माध्यम से दी जाएगी और पंडित जी के मोबाइल नंबर और पता आपको जीमेल या एसएमएस के माध्यम से दिया जाएगा।</p>
        
      </div>
    </div>

  </div>
 </div>
 </div>
</div>	

</section>

<!--pandit registration-->
<!-- aarti-->

<section>

<div class="clearfix m-lg-3 m-md-3 m-sm-0 m-xs-0">
  <div class="container-fluid border shadow rounded py-5  ">
    <h2 class="display-4 text-center ">AARTI (आरती)</h2><br>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
        <table class=" contbodh mb-5 mx-auto">   
          <tr>
           <td><a href="#"><img src="image/ganesh.jpg" height="250px" width="300px" class="img-fluid"></td></a>
          </tr>
          <tr>
         <td>
               <h2 class="text-center p-2 textach">श्री गणेश  आरती</h2> 
         </td>
               </tr>
     </table>
       </div>
     <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
       
       <table class="contbodh mb-5 mx-auto">
       <tr>
         <td><a href="#"><img src="image/shiv.jpg" height="250px" width="300px" class="img-fluid"></td></a>
           </tr>
           <tr>
             <td>
               <div class=" text-center p-2 textach">भगवान शिव आरती</div>
             </td>
         </tr>
     </table>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
     
       <table class="contbodh mb-5 mx-auto">
       <tr >
         <td> <a href="#"></a><img src="image/lakshmi.jpg" height="200px" width="300px" class="img-fluid"></td></a>
           </tr>
           <tr>
             <td>
               <h2 class=" text-center p-2  textach">लक्ष्मी माता आरती</h2> 
             </td>
         </tr>
     </table>
     </div>  
     <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 ">
       
        <table class="contbodh mb-5 mx-auto">
        <tr>
         <td><a href="#"><img src="image/jagdish.jpg" height="250px" width="300px"class="img-fluid"></td></a>
        </tr>
        <tr>
       <td>
             <h2 class="text-center p-2 textach">श्री जगदीश आरती</h2> 
       </td>
             </tr>
   </table>
     </div>
     </div>
     <div class="text-center">
      <a class="btn btn-dark   bttn mx-5 my-1 p-2 " href="aarti.html" role="button">SEE MORE <span >&#8594;</span></a>
    </div>
  </div></div></section>
  

<!--aarti end-->
<!--chalisa start-->

<div class="clearfix m-lg-3 m-md-3 m-sm-0 m-xs-0">
  <div class="container-fluid border shadow  py-5">
    <h2 class="display-4 text-center ">CHALISA (चालीसा)</h2><br>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
        <table class=" contbodh mb-5 mx-auto">   
          <tr>
           <td><a href="#"><img src="image/hanumanji.jpg" height="250px" width="300px"></td></a>
          </tr>
          <tr>
         <td>
               <h2 class="text-center p-2 textach">हनुमान चालीसा</h2> 
         </td>
               </tr>
     </table>
       </div>
     <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
       
       <table class="contbodh mb-5 mx-auto ">
       <tr>
         <td><a href="#"><img src="image/ganeshji.jpg" height="250px" width="300px"></td></a>
           </tr>
           <tr>
             <td>
               <div class=" text-center p-2 textach">श्री गणेश चालीसा</div>
             </td>
         </tr>
     </table>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
     
       <table class="contbodh mb-5 mx-auto">
       <tr >
         <td> <a href="#"></a><img src="image/shivji.jpg" height="250px" width="300px"></td></a>
           </tr>
           <tr>
             <td>
               <h2 class=" text-center p-2 textach">शिव चालीसा</h2> 
             </td>
         </tr>
     </table>
     </div>  
     <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 ">
       
        <table class="contbodh mb-5 mx-auto">
        <tr>
         <td><a href="#"><img src="image/lakshmi.jpg" height="250px" width="300px"></td></a>
        </tr>
        <tr>
       <td>
             <h2 class="text-center p-2 textach">लक्ष्मी माता चालीसा</h2> 
       </td>
             </tr>
   </table>
     </div>
     </div>
     <div class="text-center">
      <a class="btn btn-dark float bttn  my-1  p-2 " href="aarti.html" role="button">SEE MORE <span>&#8594;</span></a>
    </div>
  </div></div></section>




<!--chalisa end-->
<!--rashifal start-->
  <section>
    <div class="clearfix m-lg-3 m-md-3 m-sm-0 m-xs-0">
      <div class="container-fluid shadow border py-5 " ><br>
        <h2 class="display-4 text-center ">VARSHIK RASHIFAL</h2><br>
        <div class="row">
          <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
           <a href="mesh.html">
            <figure class="figure contborder mx-auto">
          <img src="image/rashi/mesh.jpg" class="figure-img img-fluid rounded " alt="A generic square placeholder image with rounded corners in a figure.">
          <figcaption class="figure-caption text-center text ">MESH <BR> [ मेष ]</figcaption>
        </figure></a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
        <a href="vrushabh.html">
        <figure class="figure contborder mx-auto">
          <img src="image/rashi/vrishabh.jpg " class="figure-img img-fluid rounded " alt="A generic square placeholder image with rounded corners in a figure.">
          <figcaption class="figure-caption text-center text">VRUSHABH<br> [ वृषभ ]</figcaption>
        </figure></a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
        <a href="mithun.html">
        <figure class="figure contborder mx-auto">
          <img src="image/rashi/mithun.jpg" class="figure-img img-fluid rounded " alt="A generic square placeholder image with rounded corners in a figure.">
          <figcaption class="figure-caption text-center text">MITHUN <br> [ मिथुन ]</figcaption>
        </figure></a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
        <a href="kark.html">
        <figure class="figure contborder mx-auto">
          <img src="image/rashi/kark.jpg" class="figure-img img-fluid rounded " alt="A generic square placeholder image with rounded corners in a figure.">
          <figcaption class="figure-caption text-center text">KARK <br> [ कर्क ]</figcaption>
        </figure></a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
        <a href="sinh.html">
        <figure class="figure contborder mx-auto">
          <img src="image/rashi/singh.jpg" class="figure-img img-fluid rounded " alt="A generic square placeholder image with rounded corners in a figure.">
          <figcaption class="figure-caption text-center text">SINH <br>[ सिंह ]</figcaption>
        </figure></a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
        <a href="kanya.html">
        <figure class="figure contborder mx-auto">
          <img src="image/rashi/kanya.jpg" class="figure-img img-fluid rounded " alt="A generic square placeholder image with rounded corners in a figure.">
          <figcaption class="figure-caption text-center text">KANYA <br>[ कन्या ]</figcaption>
        </figure></a>
      </div>
        </div>   
     
      <div class="text-center">
        <a class="btn btn-dark mb-1 mt-5 bttn p-2" href="rashifal.html" role="button">SEE MORE <span>&#8594;</span></a>
      </div> 
      </div>
    </div>
  <br>
  </section>
<!--rashifal end-->
<!--other feature start-->
    <section>
  <div class="clearfix">
    <div class="container-fluid py-5 m-auto">
      <h2 class="display-4 text-center p-3">OTHER FEATURE</h2>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <figure class="figure contborder pt-1 mx-auto">
        <img src="image/calendar.jpg" class="figure-img img-fluid rounded " alt="calender">
        <figcaption class="figure-caption text-center text mb-2 textoc">HINDU CALENDER</figcaption>
      </figure>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <figure class="figure contborder mx-auto">
        <img src="image/hindu3 (3).jpg" class="figure-img img-fluid rounded " alt="Festival">
        <figcaption class="figure-caption text-center text mb-2 textoc">HINDU FESTIVAL</figcaption>
      </figure>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <figure class="figure contborder mx-auto">
        <img src="image/hindu3 (3).jpg" class="figure-img img-fluid rounded " alt="upwas">
        <figcaption class="figure-caption text-center text mb-2 textoc" >HINDU UPWAS</figcaption>
      </figure>
    </div>
    
    </div>
</div></div>
</section>
<!--other feature end-->
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