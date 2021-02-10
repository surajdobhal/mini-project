<?php
session_start();
?>
<!DOCTYPE  html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/cal.css">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
  
</head>
<body style="overflow-x:hidden;">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
              <li class="nav-item ">
                <a class="nav-link" href="aarti.php">Aarti </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="chalisa.php">Chalisa</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="rashifal.php">Varshik Rashifal <span class="sr-only">(current)</span></a>
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
        <div class="container-fluid border shadow my-lg-5 bg-light">
            <h1 class="text-center my-4"> DHANU [ धनु ]</h1>
            
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 textrashi">
             धनु राशि के लोग बहुत ही घुमक्कड़ किस्म के होते हैं। पिछली बातों पर बहस और नई चुनौतियों को आसानी से स्वीकार न कर पाना धनु राशि के जातकों की ख़ूबी होती है। हालांकि दोस्ती निभाने में धनु राशि के लोग बहुत वफादार होते हैं। साल धनु राशिफल 2020 आपके लिए नई कोशिश और बहुत मेहनत करने का साल है। इस साल शनि का गोचर राशि से दूसरे भाव में रहेगा, जिससे इस साल भी आप पर साढ़े साती का प्रभाव रहेगा।<br>
साल की शुरुआत आपके लिए नई जिम्मेदारियां लेकर आएगी, जिन्हें आप अपनी कुशल नीति और अच्छी समझ से पार कर लेंगे। इस साल आपको अपने स्वास्थ्य से काफी दिक्कत रहेगी। हालांकि पारिवारिक जीवन आपका अच्छा रहेगा। आप थोड़े कटु वाणी के व्यक्ति हैं इसलिए कोशिश करें कि सबसे साथ मधुर भाव से पेश आएं।
   

            </div>
        <br><br>
            <div >
                <img src="image/rashi/dhanu.jpg " alt="dhanu" class="mx-auto d-block img-fluid" width="450" height="300">
            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> आर्थिक जीवन  </h1><br>
                आर्थिक रूप से धनु राशि के जातक खुद को बहुत मजबूत और धनवान महसूस करेंगे। इस साल आपकी नौकरी में तरक्की होने की संभावना है। साल के मध्य में आपका प्रमोशन होना या सैलरी में वृद्धि होना तय है। नौकरी के अलावा भी इस साल आपको आय के अन्य स्रोत प्राप्त होंगे। परिवार के बेहतर भविष्य के लिए इस साल आपकी कई योजनाओं में पैसा निवेश करेंगे।<br>
यदि आप बिज़नेस करते हैं तो सितम्बर से अक्टूबर महीने के बीच में किसी को उधार देने से बचें। यह आपको हानि मिलने की ओर इशारा कर रहा है। ज़मीन या घर की ख़रीददारी के लिए मई से अगस्त का समय बहुत बेहतर है। किसी पुराने निवेश से या पुश्तैनी जायदाद में से भी इस साल आपको बड़ा हिस्सा मिल सकता है। इस साल आप दोस्तों के साथ किसी विदेश यात्रा पर जा सकते हैं जिसमें आप बहुत फ़िज़ूलख़र्ची करेंगे।


            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> करियर </h1><br>
                करियर के लिहाज से धनु राशि वालों के लिए यह साल ठीक ठाक रहेगा। कड़ी मेहनत के बाद आप अपनी मंज़िल के बहुत करीब पहुँचेंगे। आपकी शिक्षा और मेहनत में आपके परिवार वाले भी आपको सपोर्ट करेंगे। जो छात्र विदेश जाकर पढ़ाई करने का सपना देख रहे हैं, उनके लिए यह साल बहुत शुभ है। मई के बाद का समय आपके लिए कुछ चुनौतीपूर्ण ज़रूर हो सकता है लेकिन यह अस्थाई रहेगा।<br>
सितम्बर महीने में आपके जीवन में एक नया मोड़ आएगा। इसके बाद आप अपने करियर में बहुत तेजी से आगे बढ़ेंगे। यही वह वक्त होगा जब आपको एक से बढ़कर एक नौकरियों के आॅफर आएँगे। जो लोग अपना बिज़नेस करते हैं, उनके लिए भी यह साल कई सौगात लेकर आएगा। लेकिन अगर आप किसी के साथ पार्टनरशिप में बिज़नेस करते हैं तो इस साल आपको थोड़ा सा नुकसान होने की संभावना है।

            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> पारिवारिक जीवन </h1><br>
                धनु राशि के जातकों के लिए पारिवारिक रूप से यह साल मिला जुला रहेगा। भले ही आपके लिए इस वर्ष की शुरुआत अच्छी नहीं होगी लेकिन बाद में स्थिति सामान्य हो जाएगी। अप्रैल से लेकर जून के बीच में आप अपना नया घर या आॅफिस ख़रीद सकते हैं। यह घर आपके लिए शुभ साबित होगा। इसलिए आप इसमें मौके पर ही गृह प्रवेश भी कर सकते हैं।<br>
इस साल माता पिता के साथ आप क्वॉलिटी वक्त बिताएंगे। छोटे मोटे विवाद को छोड़कर जीवनसाथी के साथ भी यह वर्ष अच्छा रहेगा। बच्चों की ओर से कुछ ऐसा समाचार मिलेगा जिसके चलते आप बहुत खुश होंगे। ज़मीन मामले को लेकर बड़े भाई के साथ विवाद हो सकता है। इसलिए जरूरी है कि आप अपनी वाणी पर संयम रखें। घर में कोई धार्मिक उत्सव भी हो सकता है। इस समय में आपसी रिश्ते भी मधुर होंगे।


              </div>  
              <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> स्वास्थ्य जीवन </h1><br>
                साल 2020 में धनु राशि के जातकों का स्वास्थ्य उतार चढ़ाव से भरा रहने वाला है। साल के कुछ महीने आप अच्छा महसूस करेंगे जबकि कुछ महीनों में आपके खूब डॉक्टर के चक्कर लगेंगे। साल के मध्य कुछ महीनों में आप पेट की समस्या के शिकार हो सकते हैं। इसके अतिरिक्त जून माह के बाद रक्त संबंधित कोई परेशानी आ सकती है। इसलिए नियमित अपना चेक अप कराते रहें। इस वर्ष आपके अधिक यात्रा करने के योग बन रहे हैं। इस दौरान अपनी सेहत को किसी भी कीमत पर नज़रअंदाज़ न करें।
           </div>
           <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
            <h1 class="text-danger "> शिक्षा</h1><br>
            शिक्षा के क्षेत्र में इस साल आपके सितारे बहुत बुलंद हैं। आमतौर पर धनु राशि के लोग पढ़ाई से पीछा छुड़ाने का प्रयास करते हैं लेकिन इस साल बिल्कुल इसके विपरीत होगा। आप पढ़ाई के प्रति खिंचाव महसूस करेंगे। बैंक, फॉइनेंस और अध्यापन की शिक्षा करने वाले छात्रों का समय उत्तम रहेगा और शिक्षा के लिए धन से जुड़ी समस्या का भी समाधान हो जाएगा। विदेश में पढ़ाई करने के लिए आप पैसों की वजह से मार खा रहे हैं लेकिन इस साल इसका भी समाधान निकल जाएगा।<br>
मई के माह से आपका कोई परिणाम ऐसा भी आएगा जो आपके अनुरूप नहीं होगा लेकिन आप अपनी मेहनत और हिम्मत जारी रखें। बेहतर परिणाम निश्चित मिलेंगे। सितम्बर के बाद राहु का प्रतियोगिता भाव में गोचर करने से आपके हाथ बहुत बड़ी सफलता लगेगी और यहीं से आपको अपने जीवन की नई राह भी मिलेगी। स्कूल और कॉलेज स्तर की पढ़ाई करने वालों के लिए भी यह साल कई सौगात लेकर आएगा।


       </div>
       <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
        <h1 class="text-danger "> प्रेम जीवन </h1><br>
        साल 2020 धनु राशि वालों के लिए प्रेम जीवन के लिहाज से निराशाजनक रहेगा। साल के शुरुआत में पार्टनर के साथ किसी बात को लेकर लड़ाई हो सकती है। हालाँकि साल के मध्य में काफी मतभेदों के वाबजूद भी आपका आपसी रिश्ता टूटेगा नहीं और आप एक बार फिर से साथ आ सकते हैं। अगर आप सिंगल हैं तो इस समय आपके जीवन में प्यार का आगमन होगा, कार्यस्थल पर आपको कोई पसंद आ सकता है। विवाह योग्य जातक अपने मनचाहे साथी के साथ विवाह बंधन में बंध सकते हैं। प्रेम विवाह को इच्छुक जातकों के लिए साल के अंत में परिवार वालों के साथ इस विषय में बात करके के लिए उत्तम समय है।
   </div>
   <div class="mt-5   mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
    <h1 class="text-danger "> वैवाहिक जीवन </h1><br>
    धनु राशिफल 2020 के अनुसार वैवाहिक जीवन के आधार पर देखा जाए तो इस साल आपके विवाह भाव में राहु के विराजमान होने की वजह से जीवनसाथी के साथ मतभेद हो सकता है और रिश्ते में खटास आ सकती है। इस वक़्त आपको आपसी ताल मेल बनाकर चलने की काफी आवश्यकता है। इस दौरान खर्चे बढ़ने की वजह से इसका असर आपके वैवाहिक जीवन पर भी पड़ेगा। जुलाई के माह में अपने जीवनसाथी के सेहत का ख़ास ख्याल रखें। जहां तक संतान सुख की बात है तो इस साल बच्चों को लेकर आपके खर्च आय से अधिक होगा जिस वजह से मानसिक तनाव के शिकार हो सकते हैं। प्रतियोगिता परीक्षा की तैयारी कर रहे छात्रों को इस वर्ष अच्छे परिणाम हासिल हो सकते हैं। उच्च शिक्षा प्राप्ति के लिए विदेश जाने वाले छात्रों को इस दिशा में कामयाबी मिल सकती है। साल के अंत में छोटे बच्चों का दाखिला उनके पसंदीदा स्कूल में होने की संभावना है।
    </div>
      <div class="mt-3  m-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
          <h4 class="text-dark">धनु राशि के जातक इस साल जीवन के सभी क्षेत्रों में आने वाली समस्याओं के समाधान के लिए ये उपाय करें:
        </h4>
        <ul>
            <li>नियमित रूप से हर शनिवार को छाया पात्र का दान करें।
            </li>
            <li>किसी मंदिर या गुरुद्वारे में जाकर साफ़ सफाई का काम करें।
            </li>
            <li>मछलियों और चीटियों के लिए खाना डालें।</li>
            <li>रोजाना नील शनि श्रोत का पाठ करें।</li>
            <li>इसके अलावा रोजाना सूर्य को तांबें के बर्तन में पानी और सिंदूर मिलाकर अर्घ दें।</li>
        </ul>
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