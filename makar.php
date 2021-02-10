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
            <h1 class="text-center my-4"> MAKAR [ मकर ]</h1>
            
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 textrashi">
             मकर राशि 2020 वालों के लिए ये साल कुल मिलाकर दो भागों में बंटा होगा। जिसमें आपको कई तरह के उतार चढ़ाव देखने को मिलेंगे। इस साल आपका करियर कई तरह की करवट लेगा। हालाँकि मुख्य रूप से करियर में प्रगति मिलेगी जिसका सीधा असर आपकी आर्थिक स्थिति पर पड़ेगा। शनि के गोचर और साढे साती के प्रभाव से साल का दूसरा भाग बहुत मुश्किल भरा हो सकता है। इस उतार चढ़ाव से आपका मानसिक स्वास्थ्य बहुत प्रभावित होगा। लेकिन इस वक्त आपको संयम से काम लेने की जरूरत है।<br>
मई के अंत में शनि और गुरु दोनों के वक्री होने से आपकी मेहनत और संघर्ष और भी बढ़ जाएगी। परिवार वालों के साथ भी अनबन हो सकती है। साल के अंतिम कुछ महीने आपके लिए बहुत शुभ साबित होंगे। इस दौरान आप काफी निवेश करेंगे। जिसके चलते आपको भारी मुनाफ़ा होगा। इस साल अपनी सेहत का भी पूरा ध्यान रखें। मानसिक तनाव के साथ आपके पैरों व टांगों में दर्द हो सकता है।
   

            </div>
        <br><br>
            <div >
                <img src="image/rashi/makar.jpg " alt="makar" class="mx-auto d-block img-fluid" width="450" height="300">
            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> आर्थिक जीवन  </h1><br>
                मकर राशि 2020 वालों को इस वर्ष आर्थिक रूप से किसी किरकिरी का सामना नहीं करना पड़ेगा। इस साल आप खुद को बहुत मजबूत और धनवान महसूस करेंगे। नौकरी में ग्रोथ मिलने का सीधा असर आपकी आर्थिक स्थिति पर पड़ेगा। मार्च से लेकर जून तक आपके ख़र्चों में बहुत तेजी से वृद्धि होगी। जिसका ख़ामियाज़ा आपको बाद में भुगतना पड़ सकता है। इसलिए बेहतर होगा कि आप समय रहते खुद पर नियंत्रण पा लें।<br>
अगस्त महीने में पैतृक सम्पत्ति को लेकर थोड़ा वाद-विवाद हो सकता है लेकिन आपका हिस्सा आपको पूरा मिलेगा। जो लोग बिज़नेस करते हैं उन्हें भी काफी मुनाफ़ा होने की संभावना है। जिसके चलते आपकी आर्थिक स्थिति कुछ बेहतर होगी। नए वाहन या घर खरीदने के बारे में सोच रहे हैं तो सितम्बर के बाद का वक्त उचित रहेगा। बच्चों के भविष्य को लेकर सात के अंत में आप कोई बड़ा निवेश कर सकते हैं।


            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> करियर </h1><br>
                मकर राशि वालों का साल 2020 खासा परवान चढ़ेगा। इस साल आप करियर में काफी आगे बढ़ेंगे। नौकरी के नए अवसर मिलने के साथ ही आपके काम की प्रशंसा भी होगी। आॅफिस में जहां एक ओर सीनियर आपके काम को अच्छा बताएँगे वहीं बॉस भी आपके काम और लगन को देखकर आपका प्रमोशन करेंगे। इस साल आप आॅफिस के कामकाज के सिलसिले में विदेश जा सकते हैं। बहुत ही कठिन परिश्रम करने के बाद विदेशी कम्पनी से एक प्रोजेक्ट मिलेगा, जिससे साल के मध्य में आप अपने काम के प्रति बहुत आकर्षण महसूस करेंगे।<br>
यदि आप अपना बिज़नेस खोलने के मूड में हैं तो साझेदारी से काम की शुरुआत न करें। क्योंकि इससे आपको नुकसान पहुंचने की संभावना है। यदि आॅफिस के किसी काम से संबंधित आप किसी कागज़ या चेक पर दस्तख़त करते हैं तो पहले अच्छी तरह पढ़ लें। ये वर्ष इंजीनियरिंग, मार्केटिंग, अध्यापन, विज्ञापन, कलाकारी और कॉस्मेटिक्स के क्षेत्र में करियर बनाने वालों के लिए अच्छा है।

            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> पारिवारिक जीवन </h1><br>
                इस साल मकर राशि वाले अपने परिवार के साथ क्वॉलिटी वक्त बिताएंगे। साल के शुरुआत में ही आपको अपने माता पिता का सहयोग मिलेगा। जिसकी बदौलत आपको अपनी नौकरी में प्रगति मिलेगी। साल के मध्य में आप नया घर या आॅफिस खोलने के बारे में विचार करेंगे। बच्चों से जुड़े किसी मामले को लेकर आपका अपने बड़े भाई से विवाद हो सकता है। आप अपने परिवार वालों की धन की ज़रुरत को पूरा करने में अहम भूमिका निभाएंगे। परिवार के साथ किसी मांगलिक कार्य को संपन्न कराएँगे जिसमें आपकी अहम भूमिका होगी।<br>
मार्च माह में घर में किसी उत्सव का समापन हो सकता है। मई के बाद किसी से कोई पुरानी अनबन फिर से शुरू हो सकती है। इस साल आप अपने दोस्तों के साथ अच्छा वक्त बिताएंगे और उनके साथ किसी यात्रा पर भी जा सकते हैं। किसी बाहरी महिला की वज़ह से घर में महिलाओं मे आपसी मतभेद हो सकता है। अगस्त के बाद किसी नए मेहमान के घर आने से घर में खुशी का माहौल बनेगा। माता पिता को आप किसी धार्मिक यात्रा पर ले जा सकते हैं।


              </div>  
              <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> स्वास्थ्य जीवन </h1><br>
                साल की शुरुआत ही मानसिक तनाव से होगी। यह परेशानी आपको लंबे समय तक दिक्कत में डाल सकती है। जिसके चलते आप काफी अकेलापन महसूस करेंगे और कहीं दूर जाना चाहेंगे। परिवार के झगड़े और विवाद से भी आप परेशानी में आ सकते हैं। हालांकि यह सिलसिला फरवरी से लेकर अगस्त तक रहेगा। इसके बाद का समय आपके लिए अच्छा रहेगा। आपकी सेहत में सुधार होने के साथ ही आप सकारात्मक महसूस करेंगे।
           </div>
           <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
            <h1 class="text-danger "> शिक्षा</h1><br>
            इस साल मकर राशि के जातकों को शिक्षा के क्षेत्र में कामयाबी पाने के लिए काफी हाथ पैर मारने पड़ेंगे। काफी मेहनत के बावजूद आपको वो सफलता नहीं मिल पाएगी जिसका आप इंतजार कर रहे हैं। हालांकि कुल मिलाकर देखा जाए तो वर्ष की शुरुआत बेहतर रहेगी लेकिन मध्य थोड़ा मुश्किल हो सकता है। स्कूल और कॉलेज स्तर की पढ़ाई करने वाले छात्रों को घबराने की जरूरत नहीं है। लेकिन पोस्ट ग्रेजुएशन के छात्रों को थोड़ी निराशा मिल सकती है।<br>
आपका कोई क़रीबी दोस्त पढ़ाई से आपका मोह भंग करा सकता है। इंजीनियरिंग, मैकेनिकल और बिजली से जुड़ी शिक्षा लेने वालों के लिए सितम्बर के बाद का समय अनुकूल रहेगा। तकनीकी विषय और डॉक्टरी विषय में भी आप अच्छा प्रदर्शन करेंगे। विदेश जाकर पढ़ने का सपना देख रहे छात्रों की मनोकामना इस वर्ष पूरी हो सकती है। आपके माता-पिता भी आपको सपोर्ट करेंगे।


       </div>
       <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
        <h1 class="text-danger "> प्रेम जीवन </h1><br>
        मकर राशि के जातकों के लिए साल 2020 प्रेम जीवन के आधार पर मध्यम फलदायी साबित होगा। विवाहित लोगों के लिए साल की शुरुआत में आपस में मतभेद की स्थिति उत्पन्न होगी। हालांकि साल के मध्य में आपको जीवनसाथी का सहयोग हर क्षेत्र में मिलेगा। इसके अलावा वैसे लोग जो प्यार की तलाश में हैं उन्हें इस साल एक बेहतर पार्टनर मिल सकता है। इस समय आप अपने जीवनसाथी को कोई महंगा गिफ्ट भी दे सकते हैं। अगस्त के माह में अपने पार्टनर के साथ किसी लंबी यात्रा पर जा सकते हैं। अगर आप अपने प्रेमी से शादी करना चाहते हैं तो साल के अंत में आपको इस दिशा में अच्छे परिणाम प्राप्त हो सकते हैं।
   </div>
   <div class="mt-5   mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
    <h1 class="text-danger "> वैवाहिक जीवन </h1><br>
    वैवाहिक जीवन के आधार पर देखा जाए तो मकर राशि के जातकों के लिए साल 2020 काफी अच्छा रहेगा। जहाँ एक तरफ आप अपने जीवनसाथी के साथ किसी धार्मिक यात्रा पर जा सकते हैं वहीं दूसरी तरफ एक दूसरे के साथ अच्छा वक़्त गुजारने के भी बहुत से अवसर प्राप्त होंगें। इस दौरान आप दोनों ही एक दूसरे के मनो-भावों को समझेंगे जिससे आपस में प्यार बढ़ेगा। इसके ठीक विपरीत मई माह में आपसी मतभेद बढ़ सकता है और वाद विवाद की स्थिति उत्पन्न हो सकती है। इस नाजुक हालात में कोई फैसला लेने से पहले अच्छी तरह से सोच विचार जरूर कर लें। संतान सुख की बात करें तो ये समय आपके लिए मिला जुला फल देने वाला है। विशेष रूप से मार्च के महीने में बच्चा यदि किसी खेल से जुड़ा है तो उस दिशा में उसे अच्छे परिणाम प्राप्त हो सकते हैं। कॉलेज जाने योग्य विद्यार्थियों को इस वर्ष अपना मन चाहा कॉलेज मिलेगा।
    </div>
      <div class="mt-3  m-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
          <h4 class="text-dark">साल 2020 में मकर राशि के जातक जीवन के सभी क्षेत्रों में सफलता प्राप्त करने के लिए इन उपायों को आजमा सकते हैं:
        </h4>
        <ul>
            <li>नियमित रूप से शनिदेव की पूजा अर्चना करें।
            </li>
            <li>पीपल के पेड़ में विशेष रूप से बृहस्पति वार और शनिवार के दिन जल डालें।
            </li>
            <li>गरीब और असहायओं की मदद करें।</li>
            <li>शनिवार के दिन अपनी मध्यमा ऊँगली में नीलम जड़ित अंगूठी धारण करें ।</li>
            <li>नियमित रूप से हर बृहस्पति वार को भगवान् विष्णु की पूजा अर्चना करें और उन्हें पीले फूल अर्पित करें।</li>
            <li>इसके साथ ही गणेश जी की पूजा अर्चना करें और उन्हें दूर्वा चढ़ाएं ।</li>
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