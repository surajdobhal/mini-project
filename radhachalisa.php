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
            <h1 class="text-center display-4 pt-5 pb-3">SHRI RADHA<br>(श्री राधा)</h1>
            
            <div class="mb-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2">
                राधा, जिसे राधिका, माधवी, केशवी, रासेश्वरी और राधारानी भी कहा जाता है, हिंदू धर्म में लोकप्रिय देवी हैं, विशेष रूप से गौड़ीय वैष्णववाद परंपरा में और प्रेम, कोमलता, दया और भक्ति की देवी के रूप में पूजा की जाती है। वह भगवान कृष्ण की सनातन परंपरा है और उनके साथ उनके अनन्त निवास गोलोक धाम में निवास करती है। यह माना जाता है कि वह भगवान विष्णु की पत्नी देवी महालक्ष्मी का अवतार हैं, क्योंकि कृष्ण स्वयं विष्णु के अवतार हैं। वह कृष्ण की आंतरिक शक्ति या ह्लादिनी शक्ति (आनंदित ऊर्जा) है। शास्त्रों के अनुसार, वह बृज गोपियों (दूध देने वाली) की प्रमुख थीं, जो कृष्ण के प्रति सर्वोच्च भक्ति के लिए जानी जाती हैं। वह श्री कृष्ण (भक्ति देवी) के प्रति परम भक्ति (पूर्ण भक्ति) की पहचान है और कृष्ण के प्रति निस्वार्थ प्रेम और सेवा के प्रतीक के रूप में प्रतिष्ठित हैं। उन्हें कुछ लोग स्वयं भगवान कृष्ण का स्त्री रूप भी मानते हैं। हर साल राधारानी के जन्मदिन को राधाष्टमी के रूप में मनाया जाता है।



            </div>
        
            <div >
                <img src="image/radha.jpg" alt="" class="mx-auto d-block img-fluid" width="300" height="200">
            </div>
        <div class="pr-lg-5 pr-md-5">
            <a href="chalisa pdf/श्री राधा चालीसा.pdf" class="btn btn-info float-right  py-2 px-4 my-5 mr-lg-5  download" role="button">
              <i class="fa fa-download text-light pr-3"></i>Download PDF</a>
            <br><br><br><br><br>
            <div class="text-center pb-4 container aarti"><br><br>
            <h1 class="text-lg-center text-md-center text-sm-left text-xs-left text-muted ">
श्री राधा चालीसा</h1><br><br>

॥॥दोहा॥॥<br><br>

                       श्री राधे वुषभानुजा , भक्तनि प्राणाधार ।<br>
वृन्दाविपिन विहारिणी , प्रानावौ बारम्बार ।।<br>
जैसो तैसो रावरौ, कृष्ण प्रिय सुखधाम ।<br>
चरण शरण निज दीजिये सुन्दर सुखद ललाम ।।<br><br>

॥चालीसा॥<br><br>

               जय वृषभानु कुँवरी श्री श्यामा, कीरति नंदिनी शोभा धामा ।।<br>
नित्य बिहारिनी रस विस्तारिणी, अमित मोद मंगल दातारा ।।1।।<br><br>

राम विलासिनी रस विस्तारिणी, सहचरी सुभग यूथ मन भावनी ।।<br>
करुणा सागर हिय उमंगिनी, ललितादिक सखियन की संगिनी ।।2।।<br><br>

दिनकर कन्या कुल विहारिनी, कृष्ण प्राण प्रिय हिय हुलसावनी ।।<br>
नित्य श्याम तुमररौ गुण गावै,राधा राधा कही हरशावै ।।3।।<br><br>

मुरली में नित नाम उचारें, तुम कारण लीला वपु धारें ।।<br>
प्रेम स्वरूपिणी अति सुकुमारी, श्याम प्रिया वृषभानु दुलारी ।।4।।<br><br>

नवल किशोरी अति छवि धामा, द्दुति लधु लगै कोटि रति कामा ।।<br>
गोरांगी शशि निंदक वंदना, सुभग चपल अनियारे नयना ।।5।।<br><br>

जावक युत युग पंकज चरना, नुपुर धुनी प्रीतम मन हरना ।।<br>
संतत सहचरी सेवा करहिं, महा मोद मंगल मन भरहीं ।।6।।<br><br>

रसिकन जीवन प्राण अधारा, राधा नाम सकल सुख सारा ।।<br>
अगम अगोचर नित्य स्वरूपा, ध्यान धरत निशिदिन ब्रज भूपा ।।7।।<br><br>

उपजेउ जासु अंश गुण खानी, कोटिन उमा राम ब्रह्मिनी ।।<br>
नित्य धाम गोलोक विहारिन , जन रक्षक दुःख दोष नसावनि ।।8।।<br><br>

शिव अज मुनि सनकादिक नारद, पार न पाँई शेष शारद ।।<br>
राधा शुभ गुण रूप उजारी, निरखि प्रसन होत बनवारी ।।9।।<br><br>


ब्रज जीवन धन राधा रानी, महिमा अमित न जाय बखानी ।।<br>
प्रीतम संग दे ई गलबाँही , बिहरत नित वृन्दावन माँहि ।।10।।<br><br>

राधा कृष्ण कृष्ण कहैं राधा, एक रूप दोउ प्रीति अगाधा ।।<br>
श्री राधा मोहन मन हरनी, जन सुख दायक प्रफुलित बदनी ।।11।।<br><br>

कोटिक रूप धरे नंद नंदा, दर्श करन हित गोकुल चंदा ।।<br>
रास केलि करी तुहे रिझावें, मन करो जब अति दुःख पावें ।।12।।<br><br>

प्रफुलित होत दर्श जब पावें, विविध भांति नित विनय सुनावे ।।<br>
वृन्दारण्य विहारिनी श्यामा, नाम लेत पूरण सब कामा ।।13।।<br><br>

कोटिन यज्ञ तपस्या करहु, विविध नेम व्रतहिय में धरहु ।।<br>
तऊ न श्याम भक्तहिं अहनावें, जब लगी राधा नाम न गावें ।।14।।<br><br>

व्रिन्दाविपिन स्वामिनी राधा, लीला वपु तब अमित अगाधा ।।<br>
स्वयं कृष्ण पावै नहीं पारा, और तुम्हैं को जानन हारा ।।15।।<br><br>


श्री राधा रस प्रीति अभेदा, सादर गान करत नित वेदा ।।<br>
राधा त्यागी कृष्ण को भाजिहैं, ते सपनेहूं जग जलधि न तरिहैं ।।16।।<br><br>

कीरति हूँवारी लडिकी राधा, सुमिरत सकल मिटहिं भव बाधा ।।<br>
नाम अमंगल मूल नसावन, त्रिविध ताप हर हरी मनभावना ।।17।।<br><br>

राधा नाम परम सुखदाई, भजतहीं कृपा करहिं यदुराई ।।<br>
यशुमति नंदन पीछे फिरेहै, जी कोऊ राधा नाम सुमिरिहै ।।18।।<br><br>

रास विहारिनी श्यामा प्यारी, करहु कृपा बरसाने वारी ।।<br>
वृन्दावन है शरण तिहारी, जय जय जय वृषभानु दुलारी ।।19।।<br><br>


॥॥दोहा॥॥<br><br>

                                      श्री राधा सर्वेश्वरी , रसिकेश्वर धनश्याम ।<br>
करहूँ निरंतर बास मै, श्री वृन्दावन धाम ।।


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