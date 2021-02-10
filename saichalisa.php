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
            <h1 class="text-center display-4 pt-5 pb-3">SHRI SAI BABA<br>(श्री साँई बाबा)</h1>
            
            <div class="mb-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2">
                शिरडी के साईं बाबा, जिन्हें शिरडी साईं बाबा के नाम से भी जाना जाता है, एक भारतीय आध्यात्मिक गुरु थे, जिन्हें उनके भक्त संत और फकीर के रूप में मानते हैं। वह अपने जीवनकाल के दौरान अपने हिंदू और मुस्लिम दोनों भक्तों के प्रति श्रद्धा रखते हैं।

अपने जीवन से खातों के अनुसार, उन्होंने स्वयं की प्राप्ति के महत्व का प्रचार किया और विनाशकारी चीजों के प्रति प्रेम की आलोचना की। उनकी शिक्षाएं प्रेम, क्षमा, दूसरों की सहायता, दान, संतोष, आंतरिक शांति और भगवान और गुरु के प्रति समर्पण के नैतिक कोड पर केंद्रित हैं। उन्होंने सच्चे सतगुरु के सामने आत्मसमर्पण के महत्व पर बल दिया, जो दिव्य चेतना के मार्ग पर चल रहा है, शिष्य को आध्यात्मिक प्रशिक्षण के जंगल के माध्यम से ले जाएगा।



            </div>
        
            <div >
                <img src="image/sai.jpg" alt="" class="mx-auto d-block img-fluid" width="350" height="200">
            </div>
        <div class="pr-lg-5 pr-md-5">
            <a href="chalisa pdf/श्री साँई चालीसा.pdf" class="btn btn-info float-right  py-2 px-4 my-5 mr-lg-5  download" role="button">
              <i class="fa fa-download text-light pr-3"></i>Download PDF</a>
            <br><br><br><br><br>
            <div class="text-center pb-4 container aarti"><br><br>
              <h1 class="text-lg-center text-md-center text-sm-left text-xs-left text-muted ">
श्री साँई चालीसा</h1><br><br>

श्री साँई के चरणों में, अपना शीश नवाऊं मैं ।<br>
कैसे शिरडी साँई आए, सारा हाल सुनाऊ मैं ॥<br><br>

कौन है माता, पिता कौन है, यह न किसी ने भी जाना ।<br>
कहां जन्म साँई ने धारा, प्रश्न पहेली रहा बना ॥<br><br>

कोई कहे अयोध्या के, ये रामचन्द्र भगवान हैं ।<br>
कोई कहता साँई बाबा, पवन-पुत्र हनुमान हैं ॥<br><br>

कोई कहता मंगल मूर्ति, श्री गजानन हैं साँई ।<br>
कोई कहता गोकुल-मोहन, देवकी नन्द्न हैं साँई ॥<br><br>

शंकर समझ भक्त कई तो, बाबा को भजते रहते।<br>
कोई कह अवतार दत्त का, पूजा साँई की करते रहते ॥<br><br>

कुछ भी मानो उनको तुम, पर साँई हैं सच्चे भगवान।<br>
बड़े दयालु, दीनबन्धु, कितनों को दिया जीवनदान ॥<br><br>

कई बरस पहले की घटना, तुम्हें सुनाऊंगा मैं बात।<br>
किसी भाग्यशाली की शिरडी में, आई थी बारात ॥<br><br>

आया साथ उसी के था, बालक एक बहुत सुनदर।<br>
आया, आकर वहीं बद गया, पावन शिरडी किया नगर ॥<br><br>

कई दिनों तक रहा भटकता, भिक्षा मांगी उसने दर-दर।<br>
और दिखाई ऎसी लीला, जग में जो हो गई अमर ॥<br><br>

जैसे-जैसे उमर बढ़ी, बढ़ती ही वैसे गई शान।<br>
घर-घर होने लगा नगर में, साँई बाबा का गुणगान ॥<br><br>

दिगदिगन्त में लगा गूंजने, फिर तो साँई जी का नाम।<br>
दीन मुखी की रक्षा करना, यही रहा बाबा का काम ॥<br><br>

बाबा के चरणों जाकर, जो कहता मैं हूं निर्धन।<br>
दया उसी पर होती उनकी, खुल जाते द:ख के बंधन ॥<br><br>

कभी किसी ने मांगी भिक्षा, दो बाबा मुझ को संतान।<br>
एवं अस्तु तब कहकर साँई, देते थे उसको वरदान ॥<br><br>

स्वयं दु:खी बाबा हो जाते, दीन-दुखी जन का लख हाल।<br>
अंत:करन भी साँई का, सागर जैसा रहा विशाल ॥<br><br>

भक्त एक मद्रासी आया, घर का बहुत बड़ा धनवान।<br>
माल खजाना बेहद उसका, केवल नहीं रही संतान ॥<br><br>

लगा मनाने साँईनाथ को, बाबा मुझ पर दया करो।<br>
झंझा से झंकृत नैया को, तुम ही मेरी पार करो ॥<br><br>

कुलदीपक के अभाव में, व्यर्थ है दौलत की माया।<br>
आज भिखारी बनकर बाबा, शरण तुम्हारी मैं आया ॥<br><br>

दे दे मुझको पुत्र दान, मैं ऋणी रहूंगा जीवन भर।<br>
और किसी की आश न मुझको, सिर्फ भरोसा है तुम पर ॥<br><br>

अनुनय-विनय बहुत की उसने, चरणों में धर के शीश।<br>
तब प्रसन्न होकर बाबा ने, दिया भक्त को यह आशीष ॥<br><br>

अल्ला भला करेगा तेरा, पुत्र जन्म हो तेरे घर।<br>
कृपा रहे तुम पर उसकी, और तेरे उस बालक पर ॥<br><br>

अब तक नहीं किसी ने पाया, साँई की कृपा का पार।<br>
पुत्र रतन दे मद्रासी को, धन्य किया उसका संसार ॥<br><br>

तन-मन से जो भजे उसी का, जग में होता है उद्धार।<br>
सांच को आंच नहीं है कोई, सदा झूठ की होती हार ॥<br><br>

मैं हूं सदा सहारे उसके, सदा रहूंगा उसका दास।<br>
साँई जैसा प्रभु मिला है, इतनी की कम है क्या आद ॥<br><br>

मेरा भी दिन था इक ऎसा, मिलती नहीं मुझे थी रोटी।<br>
तन पर कपड़ा दूर रहा था, शेष रही नन्ही सी लंगोटी ॥<br><br>

सरिता सन्मुख होने पर भी, मैं प्यासा का प्यासा था।<br>
दुर्दिन मेरा मेरे ऊपर, दावाग्नि बरसाता था ॥<br><br>

धरती के अतिरिक्त जगत में, मेरा कुछ अवलम्ब न था।<br>
बिना भिखारी में दुनिया में, दर-दर ठोकर खाता था ॥<br><br>

ऐसे में इक मित्र मिला जो, परम भक्त साँई का था।<br>
जंजालों से मुक्त, मगर इस, जगती में वह मुझसा था ॥<br><br>

बाबा के दर्शन के खातिर, मिल दोनों ने किया विचार।<br>
साँई जैसे दयामूर्ति के दर्शन को हो गए तैयार ॥<br><br>

पावन शिरडी नगर में जाकर, देखी मतवाली मूर्ति।<br>
धन्य जन्म हो गया कि हमने, दु:ख सारा काफूर हो गया।<br>
संकट सारे मिटे और विपदाओं का अंत हो गया ॥<br><br>

मान और सम्मान मिला, भिक्षा में हमको बाबा से।<br>
प्रतिबिंबित हो उठे जगत में, हम साँई की आभा से ॥<br><br>

बाबा ने सम्मान दिया है, मान दिया इस जीवन में।<br>
इसका ही सम्बल ले, मैं हंसता जाऊंगा जीवन में<br><br>

साँई की लीला का मेरे, मन पर ऎसा असर हुआ<br>
”काशीराम” बाबा का भक्त, इस शिरडी में रहता था।<br>
मैं साँई का साँई मेरा, वह दुनिया से कहता था ॥<br><br>

सींकर स्वयं वस्त्र बेचता, ग्राम नगर बाजारों में।<br>
झंकृत उसकी हृदतंत्री थी, साँई की झनकारों में ॥<br><br>

स्तब्ध निशा थी, थे सोये, रजनी आंचल में चांद सितारे।<br>
नहीं सूझता रहा हाथ, को हाथ तिमिर के मारे ॥<br><br>

वस्त्र बेचकर लौट रहा था, हाय! हाट से काशी।<br>
विचित्र बड़ा संयोग कि उस दिन, आता था वह एकाकी ॥<br><br>

घेर राह में खड़े हो गए, उसे कुटिल अन्यायी।<br>
मारो काटो लूटो इसको, ही ध्वनि पड़ी सुनाई ॥<br><br>

लूट पीटकर उसे वहां से, कुटिल गये चम्पत हो।<br>
आघातों से मर्माहत हो, उसने दी थी संज्ञा खो<br>
बहुत देर तक पड़ा रहा वह, वहीं उसी हालत में ॥


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