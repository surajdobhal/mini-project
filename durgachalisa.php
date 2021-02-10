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
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/cal.css">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
  
</head>
<body style="overflow-x: hidden;">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
       <img src="image/logo.png" width="150" height="100" class="d-inline-block align-top m-0" alt="logo">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav justify-content-lg-end justify-content-md-start justify-content-sm-start " id="navbarNavDropdown" ;>
        <ul class="  navbar-nav pl-5 mx-1 " style="font-size: 1.5rem">
          <li class="nav-item ">
            <a class="nav-link fl" href="home.php">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="pandit.php">Book Pandit </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aarti.php">Aarti</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="chalisa.php">Chalisa <span class="sr-only">(current)</span></a>
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
            <a class="dropdown-item" onclcick="return confirm('Are you sure you want to logout your account')" href="logout.php">LOGOUT</a>
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
            <a class="dropdown-item" onclcick="return confirm('Are you sure you want to logout your account')" href="logout.php">LOGOUT</a>
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
        <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 mb-3 mx-auto">
        <div class="container-fluid bg-light border shadow my-lg-5 my-md-0 my-sm-0 my-xs-0">
            <h1 class="text-center display-4 pt-5 pb-3">DURGA MATA<br>(दुर्गा माता)</h1>
            
            <div class="mb-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2">
                दुर्गा माता पराशक्ति के रूप में पहचानी जाती है, हिंदू देवी का एक प्रमुख और लोकप्रिय रूप है। वह युद्ध की देवी हैं, पार्वती का योद्धा रूप, जिसकी पौराणिक कथाएं बुराईयों और शैतानी ताकतों का मुकाबला करने के आसपास हैं, जो शांति, समृद्धि और धर्म को बुराई पर अच्छाई की शक्ति का खतरा पैदा करती हैं। दुर्गा भी सुरक्षात्मक माँ देवी का एक भयंकर रूप है, जो अपने दैवीय प्रकोप को दुष्टों की मुक्ति के लिए दुष्टों के खिलाफ लाती है, और विनाश को सशक्त बनाने के लिए विनाश की ओर ले जाती है।

            </div>
        
            <div >
                <img src="image/durga.jpg" alt="" class="mx-auto d-block img-fluid" width="500" height="200">
            </div>
        <div class="pr-lg-5 pr-md-5">
            <a href="chalisa pdf/श्री दुर्गा चालीसा.pdf" class="btn btn-info float-right  py-2 px-4 my-5 mr-lg-5  download" role="button">
              <i class="fa fa-download text-light pr-3"></i>Download PDF</a>
            <br><br><br><br><br>
            <div class="text-center pb-4 container aarti"><br><br>
              <h1 class="text-lg-center text-md-center text-sm-left text-xs-left text-muted ">
श्री दुर्गा चालीसा</h1><br><br>

नमो नमो दुर्गे सुख करनी। नमो नमो दुर्गे दुःख हरनी॥<br>
निरंकार है ज्योति तुम्हारी। तिहूँ लोक फैली उजियारी॥<br>
शशि ललाट मुख महाविशाला। नेत्र लाल भृकुटि विकराला॥<br>
रूप मातु को अधिक सुहावे। दरश करत जन अति सुख पावे॥1॥<br><br>

तुम संसार शक्ति लै कीना। पालन हेतु अन्न धन दीना॥<br>
अन्नपूर्णा हुई जग पाला। तुम ही आदि सुन्दरी बाला॥<br>
प्रलयकाल सब नाशन हारी। तुम गौरी शिवशंकर प्यारी॥<br>
शिव योगी तुम्हरे गुण गावें। ब्रह्मा विष्णु तुम्हें नित ध्यावें॥2॥<br><br>

रूप सरस्वती को तुम धारा। दे सुबुद्धि ऋषि मुनिन उबारा॥<br>
धरयो रूप नरसिंह को अम्बा। परगट भई फाड़कर खम्बा॥<br>
रक्षा करि प्रह्लाद बचायो। हिरण्याक्ष को स्वर्ग पठायो॥<br>
लक्ष्मी रूप धरो जग माहीं। श्री नारायण अंग समाहीं॥3॥<br><br>

क्षीरसिन्धु में करत विलासा। दयासिन्धु दीजै मन आसा॥<br>
हिंगलाज में तुम्हीं भवानी। महिमा अमित न जात बखानी॥<br>
मातंगी अरु धूमावति माता। भुवनेश्वरी बगला सुख दाता॥<br>
श्री भैरव तारा जग तारिणी। छिन्न भाल भव दुःख निवारिणी॥4॥<br><br>

केहरि वाहन सोह भवानी। लांगुर वीर चलत अगवानी॥<br>
कर में खप्पर खड्ग विराजै ।जाको देख काल डर भाजै॥<br>
सोहै अस्त्र और त्रिशूला। जाते उठत शत्रु हिय शूला॥<br>
नगरकोट में तुम्हीं विराजत। तिहुँलोक में डंका बाजत॥5॥<br><br>

शुम्भ निशुम्भ दानव तुम मारे। रक्तबीज शंखन संहारे॥<br>
महिषासुर नृप अति अभिमानी। जेहि अघ भार मही अकुलानी॥<br>
रूप कराल कालिका धारा। सेन सहित तुम तिहि संहारा॥<br>
परी गाढ़ सन्तन र जब जब। भई सहाय मातु तुम तब तब॥6॥<br><br>

अमरपुरी अरु बासव लोका। तब महिमा सब रहें अशोका॥<br>
ज्वाला में है ज्योति तुम्हारी। तुम्हें सदा पूजें नरनारी॥<br>
प्रेम भक्ति से जो यश गावें। दुःख दारिद्र निकट नहिं आवें॥<br>
ध्यावे तुम्हें जो नर मन लाई। जन्ममरण ताकौ छुटि जाई॥7॥<br><br>

जोगी सुर मुनि कहत पुकारी।योग न हो बिन शक्ति तुम्हारी॥<br>
शंकर आचारज तप कीनो। काम अरु क्रोध जीति सब लीनो॥<br>
निशिदिन ध्यान धरो शंकर को। काहु काल नहिं सुमिरो तुमको॥<br>
शक्ति रूप का मरम न पायो। शक्ति गई तब मन पछितायो॥8॥<br><br>

शरणागत हुई कीर्ति बखानी। जय जय जय जगदम्ब भवानी॥<br>
भई प्रसन्न आदि जगदम्बा। दई शक्ति नहिं कीन विलम्बा॥<br>
मोको मातु कष्ट अति घेरो। तुम बिन कौन हरै दुःख मेरो॥<br>
आशा तृष्णा निपट सतावें। मोह मदादिक सब बिनशावें॥9॥<br><br>

शत्रु नाश कीजै महारानी। सुमिरौं इकचित तुम्हें भवानी॥<br>
करो कृपा हे मातु दयाला। ऋद्धिसिद्धि दै करहु निहाला॥<br>
जब लगि जिऊँ दया फल पाऊँ । तुम्हरो यश मैं सदा सुनाऊँ ॥<br>
श्री दुर्गा चालीसा जो कोई गावै। सब सुख भोग परमपद पावै॥10॥
                                                   


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