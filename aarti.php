<?php
session_start();

?>
<!DOCTYPE html>
<php>
<head>
	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
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
        <ul class="  navbar-nav pl-5 mx-1 " style="font-size: 1.5rem">
          <li class="nav-item  ">
            <a class="nav-link fl" href="home.php">Home </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="pandit.php">Book Pandit </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="aarti.php">Aarti <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="chalisa.php">Chalisa</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="rashifal.php">Varshik Rashifal </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Hindu Calender
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="calender.php">Hindu Calender</a>
              <a class="dropdown-item" href="festival.php">Hindu Festival</a>
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
         <a class="dropdown-item" onclick="return confirm('Are you sure you want to update your account')" href="update.php">UPDATE</a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" onclick="return confirm('Are you sure you want to delete your account')" href="delete.php">DELETE</a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" onclcick="return confirm('Are you sure you want to logout your account')" href="logout.php">LOGOUT</a>
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
            <a class="dropdown-item" onclick="return confirm('Are you sure you want to logout your account')" href="logout.php">LOGOUT</a>
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
            <a class="dropdown-item" onclick="return confirm('Are you sure you want to logout your account')" href="logout.php">LOGOUT</a>
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

<section >
<div class="container-fluid bg-light border shadow my-lg-5 my-md-0 my-sm-0 my-xs-0">
  <h1 class="text-center display-4 pt-4 pb-3">AARTI (आरती)</h1>
  <div class="text-muted px-lg-5 px-md-5 px-sm-3 px-xs-2 "> आरती हिंदू उपासना की एक विधि है इसके अंतर्गत जलते हुए दीपक को अपने आराध्य के सामने एक विशेष विधि से अपने आराध्य का उच्चारण करके दाहिने हाथ की ओर से घुमाया जाता है आरती प्राय 1 दिन में 1 से 5 बार की जाती है इसे किसी भी प्रकार के शुभ कार्य की पूजा समाप्त करने के बाद किया जाता है आरती की थाल धातु का होना अनिवार्य होता है आरती मुख्यता पांच प्रकार से की जाती है जल से भरे संख से, दीपमाला से, धुले हुए वस्त्र से, आम और पीपल आदि के पत्तों से, साष्टांग शरीर के पांचों भाग ह्रदय, मस्तिष्क, दोनों कंधे, हाथ एवं घुटने से ( पंच प्राणों की प्रतीक) आरती मानव शरीर के पांच प्राणों की प्रतीक मानी जाती है|</div>
  <div class="clearfix">
  <div class="container-fluid m-auto p-5" >
  <div class="row">
    <div class=" col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
    <div class="clearfix">
      <table class=" contbod mb-5 shadow">   
       <tr>
        <td><a href="#"><img src="image/ganesh.jpg" height="200px" width="250px"></td></a>
       </tr>
       <tr>
      <td>
            <h2 class="text-center p-2 txxtac">श्री गणेश  आरती</h2> 
            <a href="ganeshaarti.php"><button  class="btn-primary mx-5 my-1 p-2 font-weight-bold">READ AARTI</button></a>
      </td>
            </tr>
  </table></div>
    </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
  <div class="clearfix">
    <table class="contbod mb-5 shadow">
    <tr>
      <td><a href="#"><img src="image/shiv.jpg" height="200px" width="250px"></td></a>
        </tr>
        <tr>
          <td>
            <h2 class=" text-center p-2 txxtac">भगवान शिव आरती</h2>
            <a href="shivjiaarti.php"><button  class="btn-primary mx-5 my-1 p-2 font-weight-bold">READ AARTI</button></a>
          </td>
      </tr>
  </table></div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
  <div class="clearfix">
    <table class="contbod mb-5 shadow">
    <tr >
      <td> <a href="#"></a><img src="image/lakshmi.jpg" height="200px" width="250px"></td></a>
        </tr>
        <tr>
          <td>
            <h2 class=" text-center p-2  txxtac">लक्ष्मी माता आरती</h2> 
            <a href="lakshmiaarti.php"><button  class="btn-primary mx-5 my-1 p-2 font-weight-bold">READ AARTI</button></a>
          </td>
      </tr>
  </table></div>
  </div>  
  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
  <div class="clearfix">
     <table class="contbod mb-5 shadow">
     <tr>
      <td><a href="#"><img src="image/saraswati.jpg" height="200px" width="250px"></td></a>
     </tr>
     <tr>
    <td>
          <h2 class="text-center px-1 py-2 txxtac">सरस्वती माता आरती</h2> 
          <a href="saraswatiaarti.php"><button  class="btn-primary mx-5 my-1 p-2 font-weight-bold">READ AARTI</button></a>
    </td>
          </tr>
</table></div>
  </div>
  </div>

  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
    <div class="clearfix">
      <table class="contbod mb-5 shadow">
        <tr>
          <td><a href="#"><img src="image/durga.jpg" height="200px" width="250px"></td></a>
            </tr>
            <tr>
              <td>
                <h2 class=" text-center p-2 txxtac">दुर्गा माता आरती</h2> 
                <a href="durgaaarti.php"><button  class="btn-primary mx-5 my-1 p-2 font-weight-bold">READ AARTI</button></a>
              </td>
          </tr>
      </table></div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
      <div class="clearfix">  
      <table class="contbod mb-5 shadow">
        <tr >
          <td><a href="#"><img src="image/parvati.jpg" height="200px" width="250px"></td></a>
            </tr>
            <tr>
              <td>
                <h2 class=" text-center p-2 txxtac">पार्वती माता  आरती</h2> 
                <a href="parwatiaarti.php"><button  class="btn-primary mx-5 my-1 p-2 font-weight-bold">READ AARTI</button></a>
              </td>
          </tr>
      </table></div>
      </div> 
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
      <div class="clearfix">
        <table class="contbod mb-5 shadow">
         <tr>
          <td><a href="#"><img src="image/ambe.jpg" height="200px" width="250px"></td></a>
         </tr>
         <tr>
        <td>
              <h2 class="text-center p-2 txxtac">अम्बे माता आरती</h2> 
              <a href="#"><button  class="btn-primary mx-5 my-1 p-2 font-weight-bold">READ AARTI</button></a>
            </td>
      </tr>
    </table>
</div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
    <div class="clearfix">
      <table class="contbod mb-5 shadow">
        <tr>
          <td><a href="#"><img src="image/gayatri.jpg" height="200px" width="250px"></td></a>
            </tr>
            <tr>
              <td>
                <h2 class=" text-center p-2 txxtac">	गायत्री माता आरती</h2> 
                <a href="gayatriaarti.php"><button  class="btn-primary mx-5 my-1 p-2 font-weight-bold">READ AARTI</button></a> 
              </td>
          </tr>
      </table>
      </div>
</div>
    </div>
    
      <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
      <div class="clearfix">
        <table class="contbod mb-5 shadow">
        <tr class="m-5">
          <td><a href="#"><img src="image/santoshi.jpg" height="200px" width="250px"></td></a>
            </tr>
            <tr>
              <td>
                <h2 class=" text-center p-2 txxtac"> संतोषी माता  आरती</h2> 
                <a href="santoshiaarti.php"><button  class="btn-primary mx-5 my-1 p-2 font-weight-bold">READ AARTI</button></a>
              </td>
          </tr>
      </table></div>
      </div>  
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
      <div class="clearfix">
        <table class="contbod mb-5 shadow">
         <tr>
          <td><a href="#"><img src="image/hanuman.jpg" height="200px" width="250px"></td></a>
         </tr>
         <tr>
        <td>
              <h2 class="text-center p-2 txxtac">  जय हनुमान आरती</h2> 
              <a href="hanumanaarti.php"><button  class="btn-primary mx-5 my-1 p-2 font-weight-bold">READ AARTI</button></a>
            </td>
              </tr>
    </table>
</div>
      </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
    <div class="clearfix">
      <table class="contbod mb-5 shadow">
      <tr>
        <td><a href="#"><img src="image/jagdish.jpg" height="200px" width="250px"></td></a>
          </tr>
          <tr>
            <td>
              <h2 class=" text-center p-2 txxtac">श्री जगदीश आरती</h2> 
              <a href="omjayjagdishaarti.php"><button  class="btn-primary mx-5 my-1 p-2 font-weight-bold">READ AARTI</button></a>
            </td>
        </tr>
    </table>
</div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
    <div class="clearfix">
      <table class="contbod mb-5 shadow">
      <tr class="m-5">
        <td><a href="#"><img src="image/kunjbihari.jpg" height="200px" width="250px"></td></a>
          </tr>
          <tr>
            <td>
              <h2 class=" text-center p-2 txxtac">कुंज बिहारी आरती</h2> 
              <a href="kunjbihariaarti.php"><button  class="btn-primary mx-5 my-1 p-2 font-weight-bold">READ AARTI</button></a>    
            </td>
        </tr>
    </table></div>
    </div>
      </div>
      
          <div class="row">
          
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
            <div class="clearfix">
              <table class="contbod mb-5 shadow">
               <tr>
                <td><a href="#"><img src="image/kali.jpg" height="200px" width="250px"></td></a>
               </tr>
               <tr>
              <td>
                    <h2 class="text-center p-2 txxtac">काली माता आरती</h2> 
                    <a href="kaliaarti.php"><button  class="btn-primary mx-5 my-1 p-2 font-weight-bold">READ AARTI</button></a>
                  </td>
                    </tr>
          </table></div>
            </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="clearfix">
            <table class="contbod mb-5 shadow">
            <tr>
              <td><a href="#"><img src="image/ganga.jpg" height="200px" width="250px"></td></a>
                </tr>
                <tr>
                  <td>
                    <h2 class=" text-center p-2 txxtac">गंगा माता आरती</h2> 
                    <a href="gangaaarti.php"><button  class="btn-primary mx-5 my-1 p-2 font-weight-bold">READ AARTI</button></a>
                   
                  </td>
              </tr>
          </table></div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="clearfix">
            <table class="contbod mb-5 shadow">
            <tr class="m-5">
              <td><a href="#"><img src="image/tulsi.jpg" height="200px" width="250px"></td></a>
                </tr>
                <tr>
                  <td>
                    <h2 class=" text-center p-2 txxtac">	तुलसी माता आरती</h2> 
                    <a href="tulsiaarti.php"><button  class="btn-primary mx-5 my-1 p-2 font-weight-bold">READ AARTI</button></a>
                  </td>
              </tr>
          </table></div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
          <div class="clearfix">
            <table class="contbod mb-5 shadow">
             <tr>
              <td><a href="#"><img src="image/vashnu.jpg" height="200px" width="250px"></td></a>
             </tr>
             <tr>
            <td>
                  <h2 class="text-center p-2 txxtac">मां वैष्णो देवी आरती</h2> 
                  <a href="vaishnoaarti.php"><button  class="btn-primary mx-5 my-1 p-2 font-weight-bold">READ AARTI</button></a>
            </td>
                  </tr>
        </table>
</div>
          </div>  
          </div>
          
            <div class="row">
            
              
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="clearfix">
              <table class="contbod mb-5 shadow">
              <tr>
                <td><a href="#"><img src="image/yamuna 2.jpg" height="200px" width="250px"></td></a>
                  </tr>
                  <tr>
                    <td>
                      <h2 class=" text-center p-2 txxtac">यमुना माता <br>आरती</h2> 
                      <a href="yamunaaarti.php"><button  class="btn-primary mx-5 my-1 p-2 font-weight-bold">READ AARTI</button></a>
                    </td>
                </tr>
            </table></div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="clearfix">
              <table class="contbod mb-5 shadow">
              <tr class="m-5">
                <td><a href="#"><img src="image/anupurna.jpg" height="200px" width="250px"></td></a>
                  </tr>
                  <tr>
                    <td>
                      <h2 class=" text-center p-2 txxtac">अन्नपूर्णा माता<br> आरती</h2> 
                      <a href="annapurnaaarti.php"><button  class="btn-primary mx-5 my-1 p-2 font-weight-bold">READ AARTI</button></a>
                    </td>
                </tr>
            </table></div>
            </div>  
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
            <div class="clearfix">
              <table class="contbod mb-5 shadow">
               <tr>
                <td><a href="#"><img src="image/satyanarayan.jpg" height="200px" width="250px"></td></a>
               </tr>
               <tr>
              <td>
                    <h2 class="text-center p-2 txxtac">श्री सत्यनारायण <br> आरती</h2> 
                    <a href="satyanarayanaarti.php"><button  class="btn-primary mx-5 my-1 p-2 font-weight-bold">READ AARTI</button></a>
              </td>
                    </tr>
              </tr>
          </table></div>
            </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <div class="clearfix">
            <table class="contbod mb-5 shadow ">
            <tr>
              <td><a href="#"><img src="image/ramayan.jpg" height="200px" width="250px"></td></a>
                </tr>
                <tr>
                  <td>
                    <h2 class=" text-center p-2 txxtac">श्री रामायण <br> आरती</h2> 
                    <a href="ramayanaarti.php"><button  class="btn-primary mx-5 my-1 p-2 font-weight-bold">READ AARTI</button></a>
                  </td>
              </tr>
          </table></div>
          </div>
            </div>
              
              <div class="row">
              
               
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="clearfix">
                <table class="contbod mb-5 shadow">
                <tr class="m-5">
                  <td><a href="#"><img src="image/bhairav.jpg" height="200px" width="250px"></td></a>
                    </tr>
                    <tr>
                      <td>
                        <h2 class=" text-center p-2 txxtac"> श्री भैरव  आरती</h2> 
                        <a href="bhairavaarti.php"><button  class="btn-primary mx-5 my-1 p-2 font-weight-bold">READ AARTI</button></a>
                      </td>
                  </tr>
              </table></div>
              </div> 
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="clearfix">
                <table class="contbod mb-5 shadow">
                <tr class="m-5">
                  <td><a href="#"><img src="image/badrinath.jpg" height="200px" width="250px"></td></a>
                    </tr>
                    <tr>
                      <td>
                        <h2 class=" text-center p-2 txxtac"> श्री बद्रीनाथ आरती</h2> 
                        <a href="badrinathaarti.php"><button  class="btn-primary mx-5 my-1 p-2 font-weight-bold">READ AARTI</button></a>
                      </td>
                  </tr>
              </table>
</div>
              </div>  
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