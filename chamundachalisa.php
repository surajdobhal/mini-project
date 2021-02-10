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
            <h1 class="text-center display-4 pt-5 pb-3 ">CHAMUNDA DEVI<br>(चामुण्डा देवी)</h1>
            
            <div class="mb-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2">
                चामुंडा  को चामुंडेश्वरी, चरचिका और रक्ता काली के रूप में भी जाना जाता है, जो चंडी, हिंदू देवी माँ दुर्गा और सात मातृकाओं (माँ देवी) में से एक है।

वह भी मुख्य योगिनियों में से एक हैं, जो चौंसठ या अस्सी-एक तांत्रिक देवी का समूह है, जो योद्धा देवी दुर्गा के परिचर हैं। नाम चंदा और मुंडा, दो राक्षसों का एक संयोजन है जिन्हें चामुंडा ने मार डाला। वह काली के साथ निकटता से जुड़ा हुआ है, जो पार्वती का एक और भयंकर पहलू है। देवी पार्वती, चंडी या दुर्गा के साथ उनकी पहचान है।


            </div>
        
            <div >
                <img src="image/chamunda.jpg" alt="" class="mx-auto d-block img-fluid" width="350" height="200">
            </div>
        <div class="pr-lg-5 pr-md-5">
            <a href="chalisa pdf/चामुण्डा देवी की चालीसा.pdf" class="btn btn-info float-right  py-2 px-4 my-5 mr-lg-5  download" role="button">
            	<i class="fa fa-download text-light pr-3"></i>Download PDF</a>
            <br><br><br><br><br>
            <div class="text-center pb-4 container aarti"><br><br>
            	<h1 class="text-lg-center text-md-center text-sm-left text-xs-left text-muted ">
चामुण्डा देवी की चालीसा</h1><br><br>

॥॥दोहा॥॥<br><br>

                   नीलवरण मा कालिका रहती सदा प्रचंड ।<br>
दस हाथो मई ससत्रा धार देती दुस्त को दांड्ड़  ।।<br><br>

मधु केटभ संहार कर करी धर्म की जीत ।<br>
मेरी भी बढ़ा हरो हो जो कर्म पुनीत  ।।<br><br>

 ॥चालीसा॥<br><br>

नमस्कार चामुंडा माता ।<br>
 तीनो लोक मई मई विख्याता ।।<br>
हिमाल्या मई पवितरा धाम है ।<br>
 महाशक्ति तुमको प्रडम है ।।1।।<br><br>

मार्कंडिए ऋषि ने धीयया ।<br>
 कैसे प्रगती भेद बताया ।।<br>
सूभ निसुभ दो डेतिए बलसाली । <br>
     तीनो लोक जो कर दिए खाली ।।2।।<br><br>

वायु अग्नि याँ कुबेर संग ।<br>
 सूर्या चंद्रा वरुण हुए तंग ।।<br>
अपमानित चर्नो मई आए ।<br>
      गिरिराज हिमआलये को लाए ।।3।।<br><br>

भद्रा-रॉंद्र्रा निट्टया धीयया ।<br>
 चेतन शक्ति करके बुलाया ।।<br>
क्रोधित होकर काली आई ।<br>
       जिसने अपनी लीला दिखाई ।।4।।<br><br>

चंदड़ मूंदड़ ओर सुंभ पतए ।<br>
 कामुक वेरी लड़ने आए ।।<br>
पहले सुग्गृीव दूत को मारा ।<br>
     भगा चंदड़ भी मारा मारा ।।5।।<br><br>


अरबो सैनिक लेकर आया ।<br>
 द्रहूँ लॉकंगन क्रोध दिखाया ।।<br>
जैसे ही दुस्त ललकारा ।<br>
       हा उ सबद्ड गुंजा के मारा ।।6।।<br><br>

सेना ने मचाई भगदड़ ।<br>
 फादा सिंग ने आया जो बाद ।।<br>
हत्टिया करने चंदड़-मूंदड़ आए ।<br>
 मदिरा पीकेर के घुर्रई ।।7।।<br><br>

चतुरंगी सेना संग लाए ।<br>
 उचे उचे सीविएर गिराई ।।<br>
तुमने क्रोधित रूप निकाला ।<br>
      प्रगती डाल गले मूंद माला ।।8।।<br><br>

चर्म की सॅडी चीते वाली ।<br>
 हड्डी ढ़ाचा था बलसाली ।।<br>
विकराल मुखी आँखे दिखलाई । <br>
     जिसे देख सृिस्टी घबराई ।।9।।<br><br>

चंदड़ मूंदड़ ने चकरा चलाया ।<br>
 ले तलवार हू साबद गूंजाया ।।<br>
पपियो का कर दिया निस्तरा ।<br>
       चंदड़ मूंदड़ दोनो को मारा ।।10।।<br><br>

हाथ मई मस्तक ले मुस्काई । <br>
पापी सेना फिर घबराई ।।<br>
सरस्वती मा तुम्हे पुकारा ।<br>
     पड़ा चामुंडा नाम तिहरा ।।11।।<br><br>

चंदड़ मूंदड़ की मिरतट्यु सुनकर ।<br>
 कालक मौर्या आए रात पर ।।<br>
अरब खराब युध के पाठ पर ।<br>
 झोक दिए सब चामुंडा पर ।।12।।<br><br>

उगर्र चंडिका प्रगती आकर । <br>
गीडदीयो की वाडी भरकर ।।<br>
काली ख़टवांग घुसो से मारा ।<br>
 ब्रह्माड्ड ने फेकि जल धारा ।।13।।<br><br>

माहेश्वरी ने त्रिशूल चलाया ।<br>
 मा वेश्दवी कक्करा घुमाया ।।<br>
कार्तिके के शक्ति आई ।<br>
   नार्सिंघई दित्तियो पे छाई ।।14।।<br><br>

चुन चुन सिंग सभी को खाया ।<br>
 हर दानव घायल घबराया ।।<br>
रक्टतबीज माया फेलाई ।<br>
   शक्ति उसने नई दिखाई ।।15।।<br><br>

रक्त्त गिरा जब धरती उपर ।<br>
 नया डेतिए प्रगता था वही पर ।।<br>
चाँदी मा अब शूल घुमाया ।<br>
     मारा उसको लहू चूसाया ।।16।।<br><br>

सूभ निसुभ अब डोडे आए ।<br>
 सततर सेना भरकर लाए ।।<br>
वाज्ररपात संग सूल चलाया । <br>
   सभी देवता कुछ घबराई ।।17।।<br><br>

ललकारा फिर घुसा मारा ।<br>
 ले त्रिसूल किया निस्तरा ।।<br>
सूभ निसुभ धरती पर सोए ।<br>
     डेतिए सभी देखकर रोए ।।18।।<br><br>

कहमुंडा मा ध्ृम बचाया ।<br>
 अपना सूभ मंदिर बनवाया ।।<br>
सभी देवता आके मानते ।<br>
       हनुमत भेराव चवर दुलते  ।।19।।<br><br>

आसवीं चेट नवराततरे अओ ।<br>
 धवजा नारियल भेट चाड़ौ ।।<br>
वांडर नदी सनन करऔ । <br>
  चामुंडा मा तुमको पियौ ।।20।।<br><br>


॥॥दोहा॥॥<br><br>

                  सरणागत को शक्ति दो हे जाग की आधार ।<br>
‘ओम’ ये नेया दोलती कर दो भाव से पार ।।
               

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