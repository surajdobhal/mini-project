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
            <h1 class="text-center display-4 pt-5 pb-3">SHANI DEV<br>(शनि देव)</h1>
            
            <div class="mb-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2">
                शनि, शनि ग्रह को संदर्भित करता है, और हिंदू ज्योतिष में नवग्रह के रूप में जानी जाने वाली नौ स्वर्गीय वस्तुओं में से एक है। पुराणों में शनि एक पुरुष देवता भी हैं, जिनकी प्रतिमा में एक तलवार या डंडा (राजदंड) लेकर एक सुंदर आकृति है, और एक कौवा बैठा है। वह हिंदू धर्म में न्याय के देवता हैं और अपने विचारों, भाषण और कर्मों के आधार पर सभी को परिणाम देते हैं। वह आध्यात्मिक तपस्या, तपस्या, अनुशासन और कड़ी मेहनत का भी प्रतीक है। उनकी पत्नी देवी मंदा हैं।



            </div>
        
            <div >
                <img src="image/shani.jpg" alt="" class="mx-auto d-block img-fluid" width="350" height="200">
            </div>
        <div class="pr-lg-5 pr-md-5">
            <a href="chalisa pdf/श्री शनि चालीसा.pdf" class="btn btn-info float-right  py-2 px-4 my-5 mr-lg-5  download" role="button">
              <i class="fa fa-download text-light pr-3"></i>Download PDF</a>
            <br><br><br><br><br>
            <div class="text-center pb-4 container aarti"><br><br>
              <h1 class="text-lg-center text-md-center text-sm-left text-xs-left text-muted ">
श्री शनि चालीसा</h1><br><br>

॥॥दोहा॥॥<br><br>


जय गणेश गिरिजा सुवन, मंगल करण कृपाल।<br>
दीनन के दुख दूर करि, कीजै नाथ निहाल॥<br>
जय जय श्री शनिदेव प्रभु, सुनहु विनय महाराज।<br>
करहु कृपा हे रवि तनय, राखहु जन की लाज॥<br><br>

॥चालीसा॥<br><br>

जयति जयति शनिदेव दयाला। करत सदा भक्तन प्रतिपाला॥<br>
चारि भुजा, तनु श्याम विराजै। माथे रतन मुकुट छबि छाजै॥<br>
परम विशाल मनोहर भाला। टेढ़ी दृष्टि भृकुटि विकराला॥<br>
कुण्डल श्रवण चमाचम चमके। हिय माल मुक्तन मणि दमके॥1॥<br><br>

कर में गदा त्रिशूल कुठारा। पल बिच करैं अरिहिं संहारा॥<br>
पिंगल, कृष्ो, छाया नन्दन। यम, कोणस्थ, रौद्र, दुखभंजन॥<br>
सौरी, मन्द, शनी, दश नामा। भानु पुत्र पूजहिं सब कामा॥<br>
जा पर प्रभु प्रसन्न ह्वैं जाहीं। रंकहुँ राव करैं क्षण माहीं॥2॥<br><br>


पर्वतहू तृण होई निहारत। तृणहू को पर्वत करि डारत॥<br>
राज मिलत बन रामहिं दीन्हयो। कैकेइहुँ की मति हरि लीन्हयो॥<br>
बनहूँ में मृग कपट दिखाई। मातु जानकी गई चुराई॥<br>
लखनहिं शक्ति विकल करिडारा। मचिगा दल में हाहाकारा॥3॥<br><br>

रावण की गतिमति बौराई। रामचन्द्र सों बैर बढ़ाई॥<br>
दियो कीट करि कंचन लंका। बजि बजरंग बीर की डंका॥<br>
नृप विक्रम पर तुहि पगु धारा। चित्र मयूर निगलि गै हारा॥<br>
हार नौलखा लाग्यो चोरी। हाथ पैर डरवाय तोरी॥4॥<br><br>

भारी दशा निकृष्ट दिखायो। तेलिहिं घर कोल्हू चलवायो॥<br>
विनय राग दीपक महं कीन्हयों। तब प्रसन्न प्रभु ह्वै सुख दीन्हयों॥<br>
हरिश्चन्द्र नृप नारि बिकानी। आपहुं भरे डोम घर पानी॥<br>
तैसे नल पर दशा सिरानी। भूंजीमीन कूद गई पानी॥5॥<br><br>

श्री शंकरहिं गह्यो जब जाई। पारवती को सती कराई॥<br>
तनिक विलोकत ही करि रीसा। नभ उड़ि गयो गौरिसुत सीसा॥<br>
पाण्डव पर भै दशा तुम्हारी। बची द्रौपदी होति उघारी॥<br>
कौरव के भी गति मति मारयो। युद्ध महाभारत करि डारयो॥6॥<br><br>

रवि कहँ मुख महँ धरि तत्काला। लेकर कूदि परयो पाताला॥<br>
शेष देवलखि विनती लाई। रवि को मुख ते दियो छुड़ाई॥<br>
वाहन प्रभु के सात सजाना। जग दिग्गज गर्दभ मृग स्वाना॥<br>
जम्बुक सिंह आदि नख धारी।सो फल ज्योतिष कहत पुकारी॥7॥<br><br>

गज वाहन लक्ष्मी गृह आवैं। हय ते सुख सम्पति उपजावैं॥<br>
गर्दभ हानि करै बहु काजा। सिंह सिद्धकर राज समाजा॥<br>
जम्बुक बुद्धि नष्ट कर डारै। मृग दे कष्ट प्राण संहारै॥<br>
जब आवहिं प्रभु स्वान सवारी। चोरी आदि होय डर भारी॥8॥<br><br>

तैसहि चारि चरण यह नामा। स्वर्ण लौह चाँदी अरु तामा॥<br>
लौह चरण पर जब प्रभु आवैं। धन जन सम्पत्ति नष्ट करावैं॥<br>
समता ताम्र रजत शुभकारी। स्वर्ण सर्व सर्व सुख मंगल भारी॥<br>
जो यह शनि चरित्र नित गावै। कबहुं न दशा निकृष्ट सतावै॥9॥<br><br>

अद्भुत नाथ दिखावैं लीला। करैं शत्रु के नशि बलि ढीला॥<br>
जो पण्डित सुयोग्य बुलवाई। विधिवत शनि ग्रह शांति कराई॥<br>
पीपल जल शनि दिवस चढ़ावत। दीप दान दै बहु सुख पावत॥<br>
कहत राम सुन्दर प्रभु दासा। शनि सुमिरत सुख होत प्रकाशा॥10॥<br><br>

॥॥दोहा॥॥<br><br>


पाठ शनिश्चर देव को, की हों भक्त तैयार।<br>
करत पाठ चालीस दिन, हो भवसागर पार॥


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