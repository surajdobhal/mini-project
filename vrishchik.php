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

  <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 mb-3 mx-auto">
        <div class="container-fluid border shadow my-lg-5 bg-light">
            <h1 class="text-center my-4"> VRISHCHIK [ वृश्चिक ]</h1>
            
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 textrashi">
             वृश्चिक राशि के जातक दिल के बहुत अच्छे और स्वभाव के बहुत सच्चे होते हैं। बड़ों का आदर करना और छोटों का प्यार देना इनकी रग रग में होता है। यदि बात करें साल 2020 की तो यह साल आपके लिए उचित है। इस साल आपको हर तरफ से अच्छे समाचार सुनने को मिलेंगे। परिवार के सदस्यों के साथ आप अच्छा वक्त बिताएंगे और बदले में आपको खूब प्यार भी मिलेगा। अपने करियर और शिक्षा के क्षेत्र में भी आप बहुत तेजी से आगे बढ़ेंगे।<br>
इस वर्ष की शुरुआत में राशि का स्वामी मंगल आपकी ही वृश्चिक राशि में गोचर करेगा, जिससे आपका आत्मबल मज़बूत बना रहेगा और आप खुद भी चुस्ती से सभी काम करेंगे। हालांकि साल का मध्य थोड़ा चुनौतीपूर्ण रहेगा। लेकिन आप अपनी सूझबूझ से स्थितियों पर काबू पा लेंगे। किसी प्रतियोगिता या खेल की तैयारी कर रहे हैं तो वहां से भी सफलता आपके कदम चूमेगी।
   

            </div>
        <br><br>
            <div >
                <img src="image/rashi/vrishchik.jpg " alt="vrishchik" class="mx-auto d-block img-fluid" width="450" height="300">
            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> आर्थिक जीवन  </h1><br>
                आर्थिक रूप से वृश्चिक राशि 2020 वालों के साल की शुरुआत भारी भरकम ख़र्चों के साथ होगी। इस वक्त आपकी जेब पर काफी भार पड़ेगा। आप घर, गाड़ी या बड़ा फर्नीचर जैसी चीजें ख़रीद सकते हैं। साल के मध्य में स्थिति सामान्य हो जाएगी। आॅफिस में पैसा बढ़ने के साथ ही आय के नए स्त्रोत भी विकसित होंगे। इस वक्त आप अपने परिवार समेत किसी यात्रा पर जा सकते हैं।<br>
इस साल बच्चों के एडमिशन और पढ़ाई पर भी भारी खर्च होगा। सिंतबर और अक्टूबर महीने में बहुत सोच समझकर कदम उठाएं। कहीं से अचानक धन आने से आप ज़मीन में भी निवेश कर सकते है, लेकिन बेहतर होगा कि इससे पहले आप किसी जानकार की सलाह लें। शेयर मार्किट में धन निवेश करने के लिए सितम्बर से समय बेहतर रहेगा। इस साल आपको कर्ज से भी मुक्ति मिलेगी।


            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> करियर </h1><br>
                वृश्चिक राशि 2020 वालों के ग्रहों की दिशा आपके करियर को आगे बढ़ाने में मदद करेगी। इस साल आप अपनी पुरानी नौकरी बदलकर कोई दूसरी जगह ज्वॉइन कर सकते हैं। वह जगह और काम आपको खूब फलेगा। इस साल सैलरी बढ़ने के साथ ही आपको प्रमोशन मिलने की भी काफी संभावना है। हालांकि यह लाभ साल के शुरुआती कुछ महीनों तक रहेगा। साल के मध्य में स्थिति थोड़ी सी प्रतिकूल हो सकती है। जुलाई और सितंबर का महीना नौकरी और व्यवसाय करने वालों दोनों के लिए ही नाज़ुक है। इस दौरान न ही किसी को पैसा उधार दें और न ही किसी से पैसा उधार लें। आॅफिस की गपशप और सीनियर की बुराई से दूर रहें। यह आपको किसी परेशानी में डाल सकते हैं। हालांकि इसके बाद साल के अंतिम महीने आपके लिए सामान्य रहेंगे।<br>
अक्टूबर महीने के बाद आप अपने नए काम की शुरुआत भी कर सकते हैं। इस समय में साझेदार के साथ भी तालमेल बना कर रखें। किसी चेक या कागज़ मे गलत दस्तख़त की वज़ह से आप परेशानी में पड़ सकते हैं, इसलिए सतर्क रहें। साल के अंत मे वेतन की बढ़ोत्तरी के साथ बॉस की नज़रों में आप प्रशंसा के पात्र भी बन सकते हैं।

            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> पारिवारिक जीवन </h1><br>
                इस साल वृश्चिक राशि 2020 के जातकों को अपने परिवार में ग़लतफ़हमी का शिकार होना पड़ेगा। परिवार के सदस्यों के साथ मनमुटाव होने की संभावना है। किसी पुराने ज़मीन मामले को लेकर बड़े भाई के साथ विवाद होना संभव है। केतु और राहु का प्रभाव कुटुम्ब भाव में होने से जीवनसाथी के साथ अनबन रहेगी। बात कुछ नही होगी बस तनाव बना रहेगा।<br>
परिवार मे अधिक ख़र्चों की वज़ह से भी आपसी मतभेद हो सकता है। आॅफिस में काम के चलते हुए तनाव का असर परिवार पर भी पड़ेगा। हालांकि इस मामले में आपका जीवनसाथी अहम भूमिका निभाएगा। तनाव से बाहर निकालने के साथ ही वह आपको काफी मॉरल सपोर्ट भी करेगा। बच्चों की ख़ातिर इस साल आप खूब घूमेंगे। आपको अपनी वाणी पर भी पूरा काबू रखना होगा, तभी आपसी मतभेद खत्म हो सकते हैं।


              </div>  
              <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> स्वास्थ्य जीवन </h1><br>
                इस साल सेहत पर आप खूब खर्च करेंगे। पेट संबंधी बीमारियाँ आपको शुरुआती 5 से 6 महीनों तक खूब परेशान करेंगी। ब्लड प्रेशर की दिक्कत की वजह से आप तनाव का शिकार हो सकते हैं। आॅफिस के काम से आप सितंबर में किसी यात्रा पर जा सकते हैं। यदि ऐसा हो तो अपने स्वास्थ्य को किसी कीमत पर नज़रअंदाज़ न करें। इस साल आपको बच्चों की सेहत पर भी ध्यान देने की जरुरत पड़ेगी। संतुलित डाइट लें और नियमित रूप से योग और व्यायाम करें।<br>
इस वर्ष आपको नियमित रूप से एक देसी घी का दिया जलाकर भगवान श्री हरि विष्णु जी की पूजा करनी चाहिए और यथा शक्ति ब्राह्मणों तथा भूखों को भोजन कराना चाहिए। इसके अतिरिक्त पुखराज रत्न सोने की अंगूठी में तर्जनी ऊँगली में बृहस्पतिवार के दिन पहनना चाहिए। आप मोती भी धारण कर सकते हैं। सूर्य देव को अर्घ्य दें और कुत्तों को रोटी डालें।

           </div>
           <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
            <h1 class="text-danger "> शिक्षा</h1><br>
            शिक्षा के क्षेत्र में वृश्चिक राशि 2020 वाले बेहतर कार्य करेंगे। इस आपको कम मेहनत और संघर्ष के बावजूद अच्छे परिणाम मिलेंगे। 10वीं और 12वीं के छात्रों को इस साल थोड़ी परेशानी का सामना करना पड़ सकता है। जबकि जो छात्र सरकारी नौकरी की तैयारी कर रहे हैं उन्हें साल के मध्य में अच्छा समाचार मिलेगा। ऐसा भी हो सकता है कि इस साल आप अपने लक्ष्य को प्राप्त कर लें।<br>
शिक्षा का स्वामी धन भाव में होने से साल के शुरुआत में अधिक ख़र्चों को दिखा रहा है और किसी विषय के चुनाव में भी आप भ्रमित हो सकते हैं। कॉलेज स्तर के छात्रों को इस साल कुछ नया करने का मौका मिलेगा। आपकी मेहनत से सितम्बर के बाद परिणाम भी बेहतर आने की उम्मीद है, जिससे आपको मनपसंद कॉलेज में दाख़िला मिलेगा। इस वर्ष आप पढ़ाई के लिए विदेश भी जा सकते हैं।


       </div>
       <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
        <h1 class="text-danger "> प्रेम जीवन </h1><br>
        साल 2020 में वृश्चिक राशि 2020 के जातकों के प्रेम जीवन की बात करें तो इस साल उन्हें इस क्षेत्र में खट्टे मीठे अनुभव होंगें। यानि की इस साल आपके जीवनसाथी या पार्टनर के साथ यदि आपका प्रेम बढ़ेगा तो साथ ही मतभेद की स्थिति भी उत्पन्न होगी। साल के मध्य में अपने जीवनसाथी या पार्टनर के साथ आप किसी विदेश यात्रा पर भी जा सकते हैं। ध्यान रखें की किसी तीसरे को कभी भी अपने आपसी संबंध के बीच में ना आने दें अन्यथा आपको बाद में इसका खामियाजा भुगतना पड़ सकता है। आपस में प्रेम और सद्भाव बनाएं रखने के लिए एक दूसरे की भावनाओं की कद्र करें और भूलकर भी ऐसे शब्दों का प्रयोग ना करें जिससे सामने वाले को कष्ट पहुंचे।
   </div>
   <div class="mt-5   mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
    <h1 class="text-danger "> वैवाहिक जीवन </h1><br>
    वैवाहिक जीवन के आधार पर देखा जाए तो ये साल वृश्चिक राशि वालों के लिए मध्यम फलदायी साबित होगा। साल की शुरुआत में अपने जीवनसाथी के साथ किसी यात्रा पर जा सकते हैं। इस दौरान आप अपने जीवनसाथी को कोई मनचाहा तोहफा भी दे सकते हैं जिससे आपस में प्रेम बढ़ेगा। इस साल आर्थिक रूप से भी आपको अपने जीवनसाथी का भरपूर सहयोग मिलेगा। इसके अलावा एक दूसरे की भावनाओं को समझें और एक दूसरे से ज्यादा अपेक्षाएं ना रखें। जहाँ तक संतान सुख की बात है तो इस वर्ष संतान पर आपका ज्यादा धन खर्च होगा और इसका नतीजा ये होगा कि इस साल आपको आर्थिक परेशानी आ सकती है। प्रतियोगिता परीक्षा की तैयारी कर रहे बच्चों को इस साल के अंत में अच्छे परिणाम मिल सकते हैं। स्कूल और कॉलेज जाने वाले बच्चों को साल के अंत में अध्यापकों से काफी सराहना मिल सकती है।
    </div>
      <div class="mt-3  m-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
          <h4 class="text-dark">इस साल वृश्चिक राशि 2020 के जातक जीवन में सफलता प्राप्त करने के लिए इन उपायों को जरूर आजमाएं:
        </h4>
        <ul>
            <li>जीवन में आने वाली मुसीबतों से बचने के लिए इस साल आप नियमित रूप से विष्णु जी की पूजा अर्चना करें और उनके सामने घी के दिये जलाएं।
            </li>
            <li>इसके अलावा जहाँ तक हो सके भूखें गरीबों और ब्राह्मणों को भोजन करवाएं।
            </li>
            <li>बृहस्पति वार के दिन विशेष रूप से पुखराज जड़ित सोने की अंगूठी जरूर धारण करें।</li>
            <li>नियमित रूप से सुबह के वक़्त सूर्य को अर्घ दें।</li>
            <li>कुत्तों को रोटी खिलाना भी फलदायक साबित होगा।</li>
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