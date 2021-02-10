<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
  

</head>
<body>
	<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <img src="image/logo.png" width="150" height="100" class="d-inline-block align-top m-0" alt="logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse nav justify-content-lg-end justify-content-md-start justify-content-sm-start " id="navbarNavDropdown" ;>
    <ul class="  navbar-nav mx-1 " style="font-size: 1.5rem">
      <li class="nav-item  ">
        <a class="nav-link fl" href="home.php">Home </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="pandit.php">Book Pandit </a>
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
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hindu Calender<span class="sr-only">(current)</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="calender.php">Hindu Calender</a>
          <a class="dropdown-item " href="festival.php">Hindu Festival</a>
          <a class="dropdown-item active" href="upwas.php">Hindu Upwas<span class="sr-only">(current)</span></a>
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
<section>
  <div class="container-fluid bg-light ">
    <h1 class="display-4 text-center pt-4">HINDU UPWAS <br>(हिन्दू उपवास)</h1><br>
    <div class="text-muted px-lg-5 px-md-5 px-sm-3 px-xs-2">भगवान की सरल भाषा में की जाने वाली प्रार्थना को चालीसा कहा जाता है इस देव की चालीसा का पाठ करने से व्यक्ति के जीवन में अद्भुत प्रभाव पड़ता है इसे इसे चालीसा इसलिए कहा जाता है क्योंकि इसमें 40 पंक्तियां होती हैं हिंदू सभ्यता में चालीसा का प्रचलन बहुत अत्यधिक है यहां हिंदू सभ्यता में लोकप्रिय हैं इसके पाठ करने के लिए किसी से नियम की आवश्यकता नहीं होती इसे श्रद्धा एवं स्वच्छता का पान करके इसका पाठ किया जा सकता है यह सरल भाषा में होती हैं जिसके कारण यहां हिंदू शब्द पैदा में इतनी लोकप्रिय हैं जिसकी रचना तुलसीदास जी ने की इसका उच्चारण करते समय शरीर में ऊर्जा का एहसास होता है बेसरते वहा सच्ची आस्था एवं लगने से पूर्ण की हो|</div>

    <div class="clearfix">
      <div class="container-fluid m-auto px-5 py-2" ><br>
        
        <div class="row ">
          <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
          <div class="clearfix">  
          <figure class="figure contborder2 mb-4 shadow">
             <a href="janu.php">
                <img src="image/month/january.png" class="figure-img img-fluid rounded " alt="A generic square placeholder image with rounded corners in a figure.">
          <figcaption class="figure-caption text-center txxtcl ">JANUARY</figcaption></a>
        </figure>
      </div></div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
      <div class="clearfix">  
      <figure class="figure contborder2 mb-4 shadow">
            <a href="febu.php">
            <img src="image/month/february.png" class="figure-img img-fluid rounded " alt="A generic square placeholder image with rounded corners in a figure.">
          <figcaption class="figure-caption text-center txxtcl">FEBRUARY</figcaption></a>
        </figure>
      </div></div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
      <div class="clearfix"> 
      <figure class="figure contborder2 mb-4 shadow">
            <a href="maru.php">
          <img src="image/month/march.png" class="figure-img img-fluid rounded " alt="A generic square placeholder image with rounded corners in a figure.">
          <figcaption class="figure-caption text-center txxtcl">MARCH</figcaption></a>
        </figure>
      </div></div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
      <div class="clearfix">  
      <figure class="figure contborder2 mb-4 shadow">
            <a href="apru.php">
          <img src="image/month/april.png" class="figure-img img-fluid rounded " alt="A generic square placeholder image with rounded corners in a figure.">
          <figcaption class="figure-caption text-center txxtcl">APRIL</figcaption></a>
        </figure>
      </div></div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
      <div class="clearfix">
      <figure class="figure contborder2 mb-4 shadow">
            <a href="mayu.php">
          <img src="image/month/may.png" class="figure-img img-fluid rounded " alt="A generic square placeholder image with rounded corners in a figure.">
          <figcaption class="figure-caption text-center txxtcl">MAY</figcaption></a>
        </figure>
      </div></div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
      <div class="clearfix">  
      <figure class="figure contborder2 mb-4 shadow">
            <a href="juneu.php">
          <img src="image/month/june.png" class="figure-img img-fluid rounded " alt="A generic square placeholder image with rounded corners in a figure.">
          <figcaption class="figure-caption text-center txxtcl">JUNE</figcaption></a>
        </figure>
      </div></div>
        </div>   
        <div class="row ">
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
            <div class="clearfix">
            <figure class="figure contborder2 mb-4 shadow">
            <a href="julyu.php">
            <img src="image/month/july.jpg" class="figure-img img-fluid rounded " alt="A generic square placeholder image with rounded corners in a figure.">
            <figcaption class="figure-caption text-center txxtcl ">JULY</figcaption></a>
          </figure>
        </div></div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
        <div class="clearfix">  
        <figure class="figure contborder2 mb-4 shadow">
            <a href="augu.php">
            <img src="image/month/august.png" class="figure-img img-fluid rounded " alt="A generic square placeholder image with rounded corners in a figure.">
            <figcaption class="figure-caption text-center txxtcl">AUGUST</figcaption></a>
          </figure>
        </div></div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
        <div class="clearfix">  
        <figure class="figure contborder2 mb-4 shadow">
            <a href="septu.php">
            <img src="image/month/september.png" class="figure-img img-fluid rounded " alt="A generic square placeholder image with rounded corners in a figure.">
            <figcaption class="figure-caption text-center txxtcl">SEPTEMBER</figcaption></a>
          </figure>
        </div></div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
        <div class="clearfix">  
        <figure class="figure contborder2 mb-4 shadow">
            <a href="octu.php">
            <img src="image/month/october.png" class="figure-img img-fluid rounded " alt="A generic square placeholder image with rounded corners in a figure.">
            <figcaption class="figure-caption text-center txxtcl">OCTOBER</figcaption></a>
          </figure>
        </div></div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
        <div class="clearfix">  
        <figure class="figure contborder2 mb-4 shadow">
            <a href="novu.php">
                <img src="image/month/november.png" class="figure-img img-fluid rounded " alt="A generic square placeholder image with rounded corners in a figure.">
            <figcaption class="figure-caption text-center txxtcl">NOVEMBER</figcaption></a>
          </figure>
        </div></div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
        <div class="clearfix">  
        <figure class="figure contborder2 mb-4 shadow">
            <a href="decu.php">
            <img src="image/month/december.png" class="figure-img img-fluid rounded " alt="A generic square placeholder image with rounded corners in a figure.">
            <figcaption class="figure-caption text-center txxtcl">DECEMBER</figcaption></a>
          </figure>
        </div></div>
          </div>
      </div>
    </div>
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