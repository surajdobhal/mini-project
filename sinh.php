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
            <h1 class="text-center my-4"> SINH [ सिंह ]</h1>
            
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 textrashi">
              सिंह राशि 2020 वाले बहुत ही सिंपल, संजीदे और मासूम स्वभाव के लोग होते हैं। आप न ही किसी से बिना मतलब के पंगे लेते हैं और न ही दूसरों के काम में टांग अड़ाते हैं। आपकी ये खूबी आपको खूब सपोर्ट भी करती है। आपका जीवन हमेशा चुनौतियों से भरा रहता है और अपनी सूझबूझ से उन चुनौतियों को पार भी कर देते हैं। हालांकि साल 2020 भी कुछ इसी तरह चैलेंज से भरा रहने वाला है। इस साल आप काम का काफी बोझ महसूस करेंगे। साल की शुरुआत में घर की सजावट पर धन खर्च हो सकता है। इस साल आप अपना खुद का घर भी ले सकते हैं। कड़ी मेहनत करने के बाद आप अपने लक्ष्य को प्राप्त करेंगे। मार्च के महीने मे गुरु का मकर राशि मे गोचर होने से नौकरी मे मनचाहा पद मिल सकता है या आपका प्रमोशन भी हो सकता है। जबकि मई के माह से शनि व गुरु दोनों के वक्री होने से बच्चों से जुड़ी कोई समस्या परेशान कर सकती है। यह प्रभाव आपकी शिक्षा पर भी देखने को मिलेगा। साल के मध्य में एक ओर जहां आपके खर्चे बढ़ेंगे वहीं आपकी आमदनी भी अच्छी होगी। इस साल अपने किसी बचपन के दोस्त के साथ मिलकर बिज़नेस शुरू कर सकते हैं। खुशी की बात यह है कि यह बिज़नेस आपको काफी फायदा भी देगा। सितम्बर माह से राहु का कर्म भाव में गोचर करने से अपने कार्य मे कुछ भ्रम सा महसूस होगा, लेकिन एक वक्त के बाद सब सही हो जाएगा।  

            </div>
        <br><br>
            <div >
                <img src="image/rashi/sinh.jpg " alt="sinh" class="mx-auto d-block img-fluid" width="450" height="300">
            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> आर्थिक जीवन  </h1><br>
                सिंह राशि वाले अक्सर अपनी आर्थिक स्थिति खराब होने का रोना रोते हैं। लेकिन साल 2020 में आपकी आर्थिक स्थिति न सिर्फ पहले से बेहतर होगी बल्कि इस साल आपके पास आय के कई नए स्त्रोत आएँगे। अधिक पैसा कमाने के बाद आप अपने सुकून के लिए उसे किसी धार्मिक कार्य में खर्च करेंगे। ऐसे भी योग बन रहे हैं कि इस साल आप अपने घर में कोई मांगलिक कार्य को संपन्न करा सकते हैं। पैतृक सम्पत्ति से भी इस साल आपको लाभ अवश्य प्राप्त होगा। साल के मध्य मे किसी भी कार्य मे निवेश न करें, यह वक्त आपके लिए थोड़ा संवेदनशील है। इस वर्ष धन के लेन-देन से जितना हो सके, बचें। शेयर मार्किट में अच्छा लाभ मिलने की आशा है। नवंबर के महीने से अचानक धन लाभ की आशा बन रही है, लेकिन किसी महिला के साथ निवेश करने से बचें।

            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> करियर </h1><br>
                साल 2020 में सिंह राशि के जातकों को अपने करियर में आगे बढ़ने के कई बेहतरीन अवसर मिलेंगे। एक ओर जहां नौकरी में आपकी तरक्की होना तय है वहीं दूसरी ओर आपको अन्य कंपनियों से भी इस साल कई आॅफर आएँगे। जो लोग लंबे समय से नौकरी न मिलने का रोना रो रहे हैं उन्हें भी इस साल नई सौगात मिलने वाली है। लेकिन उपलब्धि मिलने के कारण आपका अहंकार आपकी तबाही का कारण बनेगा। सिंह राशि वाले अक्सर नई चीजों को लेकर व्याकुल रहते हैं। इस पर थोड़ा कंट्रोल रखें। यह नया बदलाव आपको साल की शुरुआत में ही दिख जाएगा। मार्च-अप्रैल में आप कई जगह निवेश करेंगे। लेकिन इससे पहले कोई नुकसान हो किसी जानकार की सलाह ज़रूर ले लें। अप्रैल के बाद किसी कार्य में निवेश न करें, न ही साझेदारी में काम की शुरुआत करें। सितंबर महीने में आप आॅफिस के काम के सिलसिले मे विदेश जा सकते हैं।
            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> पारिवारिक जीवन </h1><br>
                2020 में सिंह राशि वालों के साल की शुरुआत बहुत ज्यादा ख़र्चों से भरी होगी। एक ओर जहां अपने परिवार के सदस्यों के साथ लगाव महसूस करेंगे वहीं दूसरी ओर खर्चें बढ़ने से रिश्तों में कड़वाहट आ सकती है। इस मामले में आपका जीवनसाथी भी पीछे नहीं रहेगा। हालांकि कुछ समय बाद यह स्थिति सामान्य हो जाएगी। परिवार में किसी सदस्य के साथ वाद-विवाद हो सकता है जिस वजह से आप मानसिक तनाव का शिकार हो सकते हैं। यह मानसिक तनाव आपको किसी गंभीर बीमारी का शिकार बना सकता है। बड़े भाई-बहनों के साथ मतभेद करने से बचें नहीं तो स्थिति कोई बड़ा रूप ले सकती है। साल के अंतिम कुछ महीनों में यानि कि अक्टूबर और नवंबर के महीने में आपके घर कोई नया मेहमान आ सकता है। यह नया मेहमान आपके परिवार के माहौल को हर्षोल्लास में बदल देगा। इस साल आप अपने जीवनसाथी और बच्चों से कोई उम्मीद न ही रखें तो बेहतर होगा।

              </div>  
              <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> स्वास्थ्य जीवन </h1><br>
                इस साल सिंह राशि के जातक किसी बीमारी से जूझ सकते हैं। ऐसा भी हो सकता है कि कोई पुराना रोग फिर से कोई नया रूप लेकर आपको परेशान करे। आॅफिस और घर के तनाव के चलते इस साल आप मानसिक रूप से काफी परेशान रहेंगे। जीवनसाथी और बच्चों के स्वास्थ्य में भी कमी आ सकती है। यदि इस साल आपको शरीर के किसी भी हिस्से में तकलीफ़ होती है तो कोई घरेलू नुस्खा या अन्य उपाय अपनाने के बजाय डॉक्टर से परामर्श लें। सितम्बर के बाद वाहन को बहुत ही सावधानी से चलाएं और किसी भी वाद-विवाद से बचें क्योंकि यह समय आपके लिए ठीक नहीं है। यदि किसी लंबी यात्रा पर जाते हैं तो अपनी सुरक्षा के इंतज़ाम पुख्ता कर लें। जून या जुलाई के महीने में आपके पिता का स्वास्थ्य का बिगड़ सकता है।
           </div>
           <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
            <h1 class="text-danger "> शिक्षा</h1><br>
            शिक्षा के क्षेत्र में इस साल आप बहुत अच्छा काम करेंगे। सिंह राशि वालों को इस वर्ष शिक्षा के साथ नई खोज और शोध में कुछ नया सीखने को मिलेगा। आपका आत्मविश्वास पूर्ण रुप से बना रहेगा और आप अपने जूनियर को भी सिखाने की कोशिश करोगे, वह आप से संतुष्ट होने के साथ आपकी प्रशंसा भी करेंगे। सरकारी नौकरी की तैयारी करने वाले छात्रों के लिए भी यह वर्ष बहुत अच्छा है। अपने किसी क़रीबी पुरुष मित्र से सावधान रहें, वह पढ़ाई से आपका मोह भंग करा सकता है। जो छात्र विदेश जाकर पढ़ाई करने का सपना देखते हैं उनका यह सपना इस साल साकार हो सकता है। बल्कि आप न सिर्फ विदेश जाकर पढ़ेंगे बल्कि आपकी वहीं नौकरी भी लग सकती है। अपने ज़रुरी और काम के नोट्स को किसी को न दें। लोग आपका फायदा उठा सकते हैं।

       </div>
       <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
        <h1 class="text-danger "> प्रेम जीवन </h1><br>
        ये साल सिंह राशि के जातकों के लिए प्रेम के दृष्टिकोण से काफी अच्छा व्यतीत होने वाला है। इस समय आप अपने पार्टनर के साथ कहीं बाहर घूमने जा सकते हैं और साथ में अच्छा वक़्त गुजार सकते हैं। इस साल आपसी मतभेदों को दूर कर आप एक दूसरे के काफी करीब आएंगे और भावनात्मक स्तर पर एक दूसरे के साथ पहले से ज्यादा जुड़ाव अनुभव करेंगे। अगर आप सिंगल हैं तो इस साल आपके जीवन में प्यार जरूर आएगा। यदि आप किसी से प्यार करते है तो संभव है कि साल के अंत तक आपकी शादी तय हो जाए। विवाहित लोगों को इस साल एक दूसरे के साथ अच्छा रोमांस भरा पल बीतने का मौका मिल सकता है।
   </div>
   <div class="mt-5   mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
    <h1 class="text-danger "> वैवाहिक जीवन </h1><br>
    साल 2020 में वैवाहिक दृष्टिकोण से देखा जाए तो सिंह राशि के जातकों के लिए ये साल ख़ासा उतार चढ़ाव वाला सिद्ध हो सकता है। जीवनसाथी के साथ जहां एक तरफ वाद विवाद की स्थिति बनेगी वहीं दूसरी तरफ आपस में प्रेम का संचार भी होगा। इस साल की शुरुआत में जीवनसाथी के साथ विदेश यात्रा पर भी जाना हो सकता है। मार्च के अंत में संभव है कि किसी आपसी तनाव की वजह से आपस में मतभेद उत्पन्न हो सकता है। अब संतान सुख की बात करें तो इस साल सिंह राशि के जातकों को बच्चों के ऊपर अधिक धन का व्यय करना होगा। इस वजह से मानसिक तनाव का शिकार हो सकते हैं। इसके अलावा साल के मध्य में बच्चों की सेहत का ख़ास ख्याल रखें। प्रतियोगिता परीक्षा की तैयारी कर रहे बच्चों को इस वर्ष के अंत तक मनचाहा फल प्राप्त होगा। इसके साथ ही विदेश जाकर पढ़ने की इच्छा रखने वाले या फिर किसी कॉलेज में दाखिला लेने वाले बच्चों को भी इस दिशा में सफलता प्राप्त होगी।
    </div>
      <div class="mt-3  m-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
          <h4 class="text-dark">सिंह राशि 2020 के जातक इस साल जीवन के विभिन्न क्षेत्रों में आने वाली परेशानियों का सामना करने के लिए ये उपाय कर सकते हैं:
        </h4>
        <ul>
            <li>नियमित रूप से सूर्य निकलने से पहले उठ जाएँ और उगते हुए सूर्य का दर्शन करना आपके लिए लाभकारी होगा।
            </li>
            <li>इसके अलावा स्नान करने के बाद किसी तांबें के बर्तन में जल, लाल फूल और सिन्दूर मिलाकर सूर्य भगवान को अर्घ दें।
            </li>
            <li>नियमित रूप से आदित्य ह्रदय श्रोत का पाठ करें।</li>
            
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