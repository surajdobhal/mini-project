<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/cal.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>
  <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
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
                <a class="nav-link" href="pandit.php">Book Pandit </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aarti.php">Aarti <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="chalisa.php">Chalisa</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="rashifal.php">Varshik Rashifal </a>
              </li>
              <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Hindu Calender <span class="sr-only">(current)</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item active" href="calender.php">Hindu Calender<span class="sr-only">(current)</span></a>
                  <a class="dropdown-item" href="festival.php">Hindu Festival</a>
                  <a class="dropdown-item" href="upwas.php">Hindu Upwas</a>
                </div>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="ebook.php">E-Book</a>
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
    <section class="bg-light">
    <div class="clearfix ">
<div class="container mt-3">

  <div class="month">      
    <ul>
  
      <a href="july.php" ><li class="prev">&#10094;</li></a>
      <a href="sept.php"><li class="next">&#10095;</li></a>
      <li>AUGUST<br>अगस्त  - 2020<br>POSH-MASH-2077 <span style="font-size:22px"></span></td>
  
    </ul>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead class="weekdays">
        <tr class="text-center text-decoration-bold"> 

          <th>SUNDAY <br>रविवार</th>
          <th>MONDAY<br>सोमवार</th>         
          <th>TUESDAY<br>मंगलवार</th>
          <th>WEDNESDAY<br>बुधवार</th>
          <th>THURSDAY<br>बृहस्पतिवार</th>
          <th>FRIDAY<br>शुक्रवार</th>
          <th>SATURDAY<br>शनिवार</th>
        

        </tr>
      </thead>
      <tbody class="days">
        <tr class="text-center">
  <td>विवाह मुहूर्त<br>ता. :- 3,7,<br>8,12,13,20</td>
  <td>विवाह मुहूर्त<br>ता. :- 21,22,<br>23,24,30,31</td>
  <td>पंचक <br>4 अगस्त से<br>9 अगस्त तक</td>
  
  <td></td>
  <td></td>         
  <td></td>
  <td>1<br>17 गते <br>श्रा.शु.त्रियोदशी </td>

        </tr>
      </tbody>
      <tbody class="days">
        <tr class="text-center">
          <td>2<br>18 गते <br>चतुर्दशी </td>
  <td>3<br>19 गते<br>पूर्णिमा</td>
  <td>4<br>20 गते<br>भा.क्र.प्रतिपदा</td>
  <td>5<br>21 गते<br>द्धितिया</td>
  <td>6<br>22 गते<br>तृतीया</td>
  <td>7<br>23 गते <br>चतुर्थी</td>
  <td>8<br>24 गते <br>पंचमी</td>
            
          </tr>
      </tbody>
    <tbody class="days">
        <tr class="text-center">
          <td>9<br>25 गते<br>सष्ठी <br></td>
  <td>10<br>26 गते<br>सष्ठी</td>
  <td>11<br>27 गते<br>अष्टमी</td>
  <td>12<br>28 गते <br>सप्तमी</td>
  <td>13<br>29गते <br>नवमी<br></td>
  <td>14<br>30गते<br>दशमी<br></td>
  <td>15<br>31गते <br>एकादशी</td>
          
        </tr>
    </tbody>
<tbody class="days">
    <tr class="text-center">
       <td>16<br>1गते<br>द्वादशी<br></td>
  <td>17<br>2 गते <br>त्रियोदशी<br></td>
  <td>18<br>3 गते<br><br>चतुर्दशी</td>
  <td>19<br>4 गते <br>अमावस्या/प्रतिपदा</td>
  <td>20<br>5 गते<br>भा.शु.द्धितिया</td>
  <td>21<br>6 गते <br>तृतीया<</td>
  <td>22<br>7 गते<br>चतुर्थी</td>
  
        
    </tr>
</tbody>
<tbody class="days">
  <tr class="text-center">
          <td>23<br>8 गते<br>पंचमी</td>
  <td>24<br>9 गते<br>सष्ठी</td>
  <td>25<br>10 गते<br>सप्तमी</td>
  <td>26<br>11 गते <br>अष्टमी</td>
  <td>27<br>12 गते <br>नवमी</td>
  <td>28<br>13 गते <br>दशमी</td>
  <td>29<br>14 गते<br>एकादशी</td>  
  </tr>
</tbody> 
<tbody class="days">
  <tr class="text-center">
  <td>30<br>15 गते <br>चतुर्थी</td>
  <td>31<br>16 गते <br>पंचमी</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
       
  </tr>
</tbody> 
</table>
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
            <p class="text-justify">The aim of your panditji website is to provide religious facility to the person who believes in Hinduism, our effort is to give complete convenience to those who believe in Hinduism, which they had previously recieved with difficulty. Through this website, we have a detailed description of complete types of Aarti, Chalisa, Anual Horoscope, Panchang, Hinduism books etc. you can easily download them. Most important, through our website you can invite pandit ji for any kind of auspicious work by inviting panditji for auspicious work to be done in your home.</p>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <h6 class="px-lg-5 pl-md-3 pl-xs-1 pl-sm-1">Categories</h6>
            <ul class="footer-links">
              <li><a href="pandit.php">Book Pandit</a></li>
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
            <h6 class="px-lg-1 pl-md-3 pl-xs-1 pl-sm-1">Quick Links</h6>
            <ul class="footer-links">
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
            <p class="copyright-text text-white">Copyright &copy; 2020 All Rights Reserved by 
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

</body>
</html>
