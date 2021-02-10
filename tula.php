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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
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
            <h1 class="text-center my-4"> TULA [ तुला ]</h1>
            
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 textrashi">
             तुला राशि के जातक बहुत ही मनमौजी किस्म के होते हैं। किस्मत आपका हद से ज्यादा साथ देती है। ज्यादा मेहनत न करने के बावजूद आपको अक्सर अच्छे फल मिलते हैं। अगर साल 2020 के राशिफल की बात करें तो इस साल भी यह सिलसिला आपके साथ कायम रहेगा। इस साल आप खूब तरक्की करेंगे। चाहे नौकरी हो या व्यवसाय हर क्षेत्र में यह साल आपके लिए सौगात लेकर आएगा। विवाहित लोगों का जीवन इस साल उतार चढ़ाव से भरा रहेगा।<br>
इस साल आपको कई खट्टे मीठे अनुभव प्राप्त होने वाले हैं। मार्च के महीने में गुरु के मकर राशि में परिवर्तन से आप नया घर ख़रीद सकते हैं या किसी पुरानी ज़मीन से भी आपको लाभ मिल सकता है। सितम्बर के बाद राहु का नवम भाव में गोचर करने से आपकी किस्मत आपका पूरा साथ देगी। अचानक पैतृक सम्पत्ति के बिकने के भी योग बन सकते हैं। सेहत के लिहाज से यह साल आपके लिए अच्छा रहेगा।
   

            </div>
        <br><br>
            <div >
                <img src="image/rashi/tula.jpg " alt="tula" class="mx-auto d-block img-fluid" width="450" height="300">
            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> आर्थिक जीवन  </h1><br>
                आर्थिक रूप से तुला राशि वाले साल 2020 खुद को मिडिल क्लॉस जैसा महसूस करेंगे। अर्थात् पैसा जैसे आएगा वैसे ही चले भी जाएगा। नौकरी में आप अच्छा काम करेंगे जिस वजह से आपका प्रमोशन हो सकता है। ऐसे में आपकी सैलरी बढ़ेगी लेकिन नए नए खर्चें भी होंगे। बेवज़ह के ख़र्चों से बाद में मानसिक परेशानी भी हो सकती है। साल के मध्य में आप निवेश न करें, अन्यथा नुकसान और निराशा ही हाथ लगेगी। यदि आपका कोई करीबी आपसे उधार मांगे तो न दें। वापिस मिलने की उम्मीद बहुत कम है।<br>
वाहन या घर के ऊपर मई से सितम्बर में धन का अधिक खर्च न करें। इस साल आप अपने परिवार के साथ किसी यात्रा पर जा सकते हैं, जिस दौरान खूब खर्च होगा। परिवार के किसी व्यक्ति का स्वास्थ्य भी बिगड़ सकता है। जिसके खर्चें का बोझ आपके कंधों पर ही आएगा। इसलिए साल की शुरुआत से ही अपना हाथ टाइट रखें।


            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> करियर </h1><br>
                साल 2020 में तुला राशि के लोगों का करियर परवान चढ़ेगा। नौकरी के कई नए आॅफर आपको प्राप्त होंगे। हालांकि जिस तरह आपकी किस्मत आपको आगे बढ़ाने में हर वक्त आपका साथ देती है उस लिहाज़ से यह साल थोड़ा चुनौतीपूर्ण रहेगा। अपने लक्ष्य को पाने के लिए आपको अधिक मेहनत और संघर्ष करने की आवश्यकता होगी।<br>
आप अपने कार्य के अलावा भी अपना समय बहुत नष्ट करते हो जिस वज़ह से भी कार्य- क्षेत्र में आपको नुकसान हो सकता है। आॅफिस में जून से लेकर सिंतबर तक का समय आपके लिए बहुत अच्छा रहेगा। इस समय आपके काम की तारीफ होगी और आपको प्रमोशन मिलने की भी उम्मीद है। जो लोग अपना बिज़नेस करते हैं, उन्हें भी अच्छे परिणाम मिलने की उम्मीद है। साल के अंतिम कुछ महीनों में नौकरी को लेकर बहुत ही सावधानी रखने की ज़रुरत है।

            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> पारिवारिक जीवन </h1><br>
                तुला राशि के जातकों को इस साल अपनी पारिवारिक स्थिति पर अधिक ध्यान देने की जरूरत है। परिवार में विवाद का माहौल बन सकता है। कहीं न कहीं आपकी कटु वाणी भी इसका मुख्य कारण बनेगी। इसलिए जरूरी है कि आप संयम से काम लें और मधुर वाणी का चुनाव करें। हालांकि साल के मध्य में स्थिति सामान्य होगी और परिवार में खुशी का माहौल बनेगा। इसी दौरान आप अपने छोटे भाई बहनों के साथ भी अच्छा वक्त बिताएगा।<br>
पैसों की तनातनी की वजह से यदि घर में निराशा और कलेश रहता है तो वह इस साल नहीं होगा। पिता की सेहत में पहले से सुधार होगा। और वो इस साल आपके बिज़नेस में भी आपका सपोर्ट करेंगे। परिवार के सभी सदस्यों के साथ विदेश यात्रा पर जा सकते हैं। यह यात्रा आपके परिवार को एक नया मोड़ देगी जिससे सब लोगों के बीच में अच्छे संबंध स्थापित होंगे।


              </div>  
              <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> स्वास्थ्य जीवन </h1><br>
                तुला राशि के जातकों को इस साल कई स्वास्थ्य समस्याओं का सामना करना पड़ सकता है। साल की शुरुआत में ही आप इंफेक्शन या एलर्जी की चपेट में आ सकते हैं। इसे नज़रअंदाज़ करने के बजाय जल्दी डॉक्टर से सलाह लें। बाहर का खाना खाने के चलते इस साल आप पेट के रोगों से परेशान रहेंगे। इसलिए बेहतर होगा कि घर का ही खाना खाएं और नियमित योग और व्यायाम करें।<br>
इस साल कन्या राशि का कोई जातक आपके स्वास्थ्य को बिगाड़ने में अहम भूमिका निभाएगा। इस साल आप अगर लंबी यात्रा पर जाते हैं तो खाना किसी साफ स्थान पर ही लें। माँस, मदिरा से इस साल दूरी बनाएँगे तो अच्छा रहेगा।

           </div>
           <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
            <h1 class="text-danger "> शिक्षा</h1><br>
            शिक्षा के क्षेत्र में तुला राशि के जातकों को बहुत संघर्ष करना पड़ेगा। अपने लक्ष्य तक पहुंचने के लिए आपको कड़ी मेहनत करनी होगी। बता दें कि यदि आप दसवीं और बारहवीं के छात्र हैं तो इस साल निराशा आपके हाथ लग सकती है। लेकिन आप अपने संघर्ष को जारी रखेंगे और मेहनत करते रहेंगे तो थोड़ी सफलता मिल ही जाएगी। इस वर्ष लापरवाही की वज़ह से पढ़ाई में विघ्न भी आ सकता है या आपका कोई क़रीबी मित्र पढ़ाई में बाधा डाल सकता है।<br>
सरकारी नौकरी की तैयारी करने वाले छात्रों को साल के मध्य में खराब रिजल्ट मिलने की वजह से मानसिक तनाव हो सकता है। खेलकूद, मीडिया, वकील और डॉक्टर के क्षेत्र से जुड़े लोगों को इस साल सकारात्मक रिजल्ट मिलेंगे। जो लोग विदेश जाकर पढ़ने का विचार बना रहे हैं उनके लिए भी यह साल शुभ है।


       </div>
       <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
        <h1 class="text-danger "> प्रेम जीवन </h1><br>
        तुला राशि के जातकों के लिए साल 2020 में प्रेम जीवन के आधार पर उन्हें मिला जुला परिणाम मिल सकता है। इस वर्ष विशेष रूप से आपके पार्टनर के साथ आपका एक भावनात्मक संबंध स्थापित होगा जो आपके लिए भविष्य में काफी लाभदायक साबित हो सकता है। इसके अलावा यदि आप इस साल अपने प्रेमी के साथ शादी के बंधन में बंधना चाहते हैं तो ये आपके लिए उत्तम समय है। आपस में मतभेद की स्थिति ना उत्पन्न हो इसके लिए समय समय पर अपने प्रेमी की तारीफ भी करते रहें। वैसे लोग जो विवाहित हैं उन्हें अपनी वाणी पर संयम बनाये रखना चाहिए और जीवनसाथी से कोई भी ऐसी बात ना कहें जिससे उन्हें तकलीफ पहुंचे। रिश्ते की मर्यादा बनाएं रखने के लिए बहुत आवश्यक है की आप एक दूसरे का सम्मान करें।
   </div>
   <div class="mt-5   mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
    <h1 class="text-danger ">वैवाहिक जीवन</h1><br>
    इस साल आप अपनी वैवाहिक लाइफ को बहुत अच्छी तरह इन्ज्वॉय करेंगे। अपने जीवनसाथी के साथ आप क्वॉलिटी वक्त बिताएंगे और उनके प्रति आकर्षण महसूस करेंगे। तुला राशि के शादीशुदा कपल के बीच लड़ाई की असली वजह कोई तीसरा व्यक्ति होता है। लेकिन इस साल आप इसे बदलेंगे और अपने रिश्ते पर ध्यान केंद्रित करेंगे।<br>
साल के मध्य में बच्चों की ओर से कुछ दुखद समाचार मिलने की संभावना है। यह पढ़ाई या स्वास्थ्य किसी से भी संबंधित हो सकता है। अविवाहित लोगों का यह साल काफी संघर्ष पूर्ण रहेगा। इस साल आपकी शादी होने में कई तरह की बाधा आ सकती है। हालांकि इस साल आप ऐसे व्यक्ति से टकराएंगे जिसके बारे में आप अपनी जिंदगी बिताने के बारे में सोच सकते हैं।

    </div>
      <div class="mt-3  m-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
          <h4 class="text-dark">साल 2020 में तुला राशि के जातक जीवन के विभिन्न आयामों में आने वाली समस्याओं से बचने के लिए ये सभी प्रभावकारी उपाय कर सकते हैं:
        </h4>
        <ul>
            <li>जहां तक संभव हो गरीबों की मदद करें और शनिवार के दिन मंदिर में जाकर काले चने को प्रसाद स्वरुप बांटें।
            </li>
            <li>इस साल किसी के साथ भी बुरा बर्ताव ना करें विशेष रूप से अपने सहकर्मियों से।
            </li>
            <li>चीटियों के सामने आटा डालें।</li>
            <li>इस वर्ष आपके लिए बेहतर होगा की आप किसी उच्च क़्वालिटी का हीरा या फिर ओपल धारण करें।</li>
            <li>कुछ वक़्त गाय की सेवा में भी बिताएं और छोटी कन्याओं के पैर छू कर आशीर्वाद लें</li>
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