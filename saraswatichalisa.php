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
            <h1 class="text-center display-4 pt-5 pb-3">SARASWATI MATA<br>(सरस्वती माता)</h1>
            
            <div class="mb-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2">
                 सरस्वती - ज्ञान, संगीत, कला, ज्ञान और सीखने की हिंदू देवी है। वह सरस्वती, लक्ष्मी और पार्वती की त्रिमूर्ति (त्रिदेवी) का एक हिस्सा है। तीनों रूप क्रमशः ब्रह्मा, विष्णु और शिव की त्रिमूर्ति को ब्रह्माण्ड बनाने, बनाए रखने और पुन: उत्पन्न करने में मदद करते हैं।<br>

देवी के रूप में सरस्वती का सबसे पहला ज्ञात उल्लेख ऋग्वेद में है। वह वैदिक काल से देवी के रूप में हिंदू परंपराओं के आधुनिक काल से महत्वपूर्ण रही हैं। कुछ हिंदू उनके सम्मान में वसंत पंचमी (वसंत के पांचवें दिन, और सरस्वती पूजा और भारत के कई हिस्सों में सरस्वती जयंती के रूप में भी जाना जाता है) का त्योहार मनाते हैं, और छोटे बच्चों की मदद करना सीखते हैं। उस दिन वर्णमाला के अक्षर। देवी को पश्चिम और मध्य भारत के जैन धर्म के विश्वासियों द्वारा भी माना जाता है, साथ ही साथ कुछ बौद्ध संप्रदाय भी हैं।

            </div>
        
            <div >
                <img src="image/saraswati.jpg" alt="" class="mx-auto d-block img-fluid" width="350" height="200">
            </div>
        <div class="pr-lg-5 pr-md-5">
            <a href="chalisa pdf/श्री सरस्वती चालीसा.pdf" class="btn btn-info float-right  py-2 px-4 my-5 mr-lg-5  download" role="button">
              <i class="fa fa-download text-light pr-3"></i>Download PDF</a>
            <br><br><br><br><br>
            <div class="text-center py-5 container aarti"><br><br>
               <h1 class="text-lg-center text-md-center text-sm-left text-xs-left text-muted ">
श्री सरस्वती चालीसा</h1><br><br>


॥॥दोहा॥॥<br><br>

जनक जननि पद्मरज, निज मस्तक पर धरि।<br>
बन्दौं मातु सरस्वती, बुद्धि बल दे दातारि॥<br>
पूर्ण जगत में व्याप्त तव, महिमा अमित अनंतु।<br>
दुष्जनों के पाप को, मातु तु ही अब हन्तु॥<br><br>

॥चालीसा॥<br><br>

जय श्री सकल बुद्धि बलरासी।जय सर्वज्ञ अमर अविनाशी॥<br>
जय जय जय वीणाकर धारी।करती सदा सुहंस सवारी॥1<br><br>

रूप चतुर्भुज धारी माता।सकल विश्व अन्दर विख्याता॥<br>
जग में पाप बुद्धि जब होती।तब ही धर्म की फीकी ज्योति॥2<br><br>

तब ही मातु का निज अवतारी।पाप हीन करती महतारी॥<br>
वाल्मीकिजी थे हत्यारा।तव प्रसाद जानै संसारा॥3<br><br>

रामचरित जो रचे बनाई।आदि कवि की पदवी पाई॥<br>
कालिदास जो भये विख्याता।तेरी कृपा दृष्टि से माता॥4<br><br>

तुलसी सूर आदि विद्वाना।भये और जो ज्ञानी नाना॥<br>
तिन्ह न और रहेउ अवलम्बा।केव कृपा आपकी अम्बा॥5<br><br>

करहु कृपा सोइ मातु भवानी।दुखित दीन निज दासहि जानी॥<br>
पुत्र करहिं अपराध बहूता।तेहि न धरई चित माता॥6<br><br>

राखु लाज जननि अब मेरी।विनय करउं भांति बहु तेरी॥<br>
मैं अनाथ तेरी अवलंबा।कृपा करउ जय जय जगदंबा॥7<br><br>

मधुकैटभ जो अति बलवाना।बाहुयुद्ध विष्णु से ठाना॥<br>
समर हजार पाँच में घोरा।फिर भी मुख उनसे नहीं मोरा॥8<br><br>

मातु सहाय कीन्ह तेहि काला।बुद्धि विपरीत भई खलहाला॥<br>
तेहि ते मृत्यु भई खल केरी।पुरवहु मातु मनोरथ मेरी॥9<br><br>

चंड मुण्ड जो थे विख्याता।क्षण महु संहारे उन माता॥<br>
रक्त बीज से समरथ पापी।सुरमुनि हदय धरा सब काँपी॥10<br><br>

काटेउ सिर जिमि कदली खम्बा।बारबार बिन वउं जगदंबा॥<br>
जगप्रसिद्ध जो शुंभनिशुंभा।क्षण में बाँधे ताहि तू अम्बा॥11<br><br>

भरतमातु बुद्धि फेरेऊ जाई।रामचन्द्र बनवास कराई॥<br>
एहिविधि रावण वध तू कीन्हा।सुर नरमुनि सबको सुख दीन्हा॥12<br><br>

को समरथ तव यश गुन गाना।निगम अनादि अनंत बखाना॥<br>
विष्णु रुद्र जस कहिन मारी।जिनकी हो तुम रक्षाकारी॥13<br><br>

रक्त दन्तिका और शताक्षी।नाम अपार है दानव भक्षी॥<br>
दुर्गम काज धरा पर कीन्हा।दुर्गा नाम सकल जग लीन्हा॥14<br><br>

दुर्ग आदि हरनी तू माता।कृपा करहु जब जब सुखदाता॥<br>
नृप कोपित को मारन चाहे।कानन में घेरे मृग नाहे॥15<br><br>

सागर मध्य पोत के भंजे।अति तूफान नहिं कोऊ संगे॥<br>
भूत प्रेत बाधा या दुःख में।हो दरिद्र अथवा संकट में॥16<br><br>

नाम जपे मंगल सब होई।संशय इसमें करई न कोई॥<br>
पुत्रहीन जो आतुर भाई।सबै छांड़ि पूजें एहि भाई॥17<br><br>

करै पाठ नित यह चालीसा।होय पुत्र सुन्दर गुण ईशा॥<br>
धूपादिक नैवेद्य चढ़ावै।संकट रहित अवश्य हो जावै॥18<br><br>

भक्ति मातु की करैं हमेशा। निकट न आवै ताहि कलेशा॥<br>
बंदी पाठ करें सत बारा। बंदी पाश दूर हो सारा॥19<br><br>

रामसागर बाँधि हेतु भवानी।कीजै कृपा दास निज जानी।20<br><br>


॥॥दोहा॥॥<br><br>

मातु सूर्य कान्ति तव, अन्धकार मम रूप।<br>
डूबन से रक्षा करहु परूँ न मैं भव कूप॥<br>
बलबुद्धि विद्या देहु मोहि, सुनहु सरस्वती मातु।<br>
राम सागर अधम को आश्रय तू ही देदातु॥



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