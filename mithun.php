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
            <h1 class="text-center my-4"> MITHUN [ मिथुन ]</h1>
            
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 textrashi">
              वार्षिक भविष्यफल 2020 मिथुन राशि के जातकों के लिए कई सारे नए अवसर लेकर आएगा। सालों से जिन कामों का आपने रोडमैप तैयार किया हुआ है वह इस साल पूरा होगा। पारिवारिक रूप से जहां एक ओर आप खुद को मजबूत महसूस करेंगे वहीं आर्थिक दृष्टि से भी आप संपन्न रहेंगे। हालांकि साल की शुरुआत में राहु का आपकी राशि में गोचर होने जा रहा है इसलिए इस वक़्त थोड़ी सतर्कता बरतने की आवश्यकता पड़ सकती है। इस दौरान आप अपने मार्ग से विचलित होने के साथ ही अपने पथ से भटक भी सकते हैं। जनवरी माह में शनि आपके अष्टम भाव में विराजमान होगा जिस वजह से आपको आर्थिक तंगी का सामना करना पड़ सकता है। यदि आप किसी व्यवसाय से जुड़े व्यक्ति हैं तो किसी पर आंख बंद कर के भरोसा ना करें। आप बाहर से जितने सख्त और मजबूत लगते हैं असल में आपका दिल उतना ही नाजुक है, कपटी भावना आपके आस पास भी नहीं रहती है। सितम्बर महीने में राहु का वृषभ राशि में गोचर होने से आपका विदेश जाने का सपना पूरा हो सकता है, हालांकि खर्चे में वृद्धि होगी।  

            </div>
        <br><br>
            <div >
                <img src="image/rashi/mithun.jpg " alt="mithun" class="mx-auto d-block img-fluid" width="450" height="300">
            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> आर्थिक जीवन  </h1><br>
                जिस तरह साल की शुरुआत में ही आपको अपना करियर बोझ लगने लगेगा ठीक उसी तरह आपको साल की शुरुआत में आर्थिक तंगी का सामना भी करना पड़ सकता है। साल 2020 में एक ओर जहां आपके खर्चे लगातार बढ़ेंगे वहीं दूसरी ओर आपको उतने आय के स्त्रोत नहीं मिल पाएंगे। परिवार में किसी सदस्य की तबीयत खराब हो सकती है जिसके चलते उसके इलाज का खर्च भी आपको उठाना पड़ेगा। यह सब राहु के आपकी राशि में विराजमान होने के कारण होगा। अप्रैल माह में राहु अपना स्थान बदल लेगा और आपकी पैसों की कमी दूर होने लगेगी। अप्रैल के बाद का समय शेयर मार्किट के लिए अच्छा रहेगा। जो लोग निवेश करते हैं उन्हें इस वक्त डबल लाभ मिलेगा। यह वक्त आपके लिए इतना शुभ होगा कि आप नया घर या आॅफिस तक खरीद सकते हैं। मीडिया, वकील और डिजाइनिंग से जुड़े काम में अधिक सफलता मिलने के योग हैं।

            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> करियर </h1><br>
                साल 2020 में करियर की दृष्टिकोण से आपको मिले जुले परिणाम मिलेंगें। यह भी हो सकता है कि आपकी नौकरी चली जाए और फिर लंबे समय तक दूसरी नौकरी मिलने में दिक्कत भी हो। लेकिन साल के मध्य में आपकी यह सारी परेशानी दूर हो जाएगी, बल्कि आप दोगुनी गति से तरक्की करेंगे। मार्च और अप्रैल महीने में गुरु का मकर राशि में प्रवेश करने से आपकी परेशानियों में कमी होगी और आपके सारे बिगड़ते काम बनने लगेंगे। इस दौरान आपका काम में मन भी लगेगा और बॉस आपसे इतना प्रभावित हो सकता है कि आपको किसी जरूरी प्रोजेक्ट के लिए विदेश भेज दें। इस वर्ष के सितम्बर महीने में आप किसी नए बिजनेस या नौकरी की शुरुआत कर सकते हैं। खुशी की बात यह है कि यह नया बदलाव आपके जीवन को एक नया मोड़ देगा।
            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> पारिवारिक जीवन </h1><br>
                पारिवारिक दृष्टिकोण से साल 2020 में आप खुद को बहुत खुशनसीब महसूस करेंगे। आपको जीवनसाथी का भरपूर साथ मिलेगा। जिसकी मदद से आपके सारे बिगड़ते काम बनेंगे। सिर्फ परिवार में ही नहीं बल्कि आपके पार्टनर का साथ आपको प्रोफेशनल लाइफ में भी मिलेगा। परिवार के सभी सदस्य आपसे बहुत खुश रहेंगे जबकि आप उनके साथ समय बिताना पसंद करेंगे। हालांकि आपको अपने बच्चों के प्रति अधिक गंभीर होने की जरूरत है। पढ़ाई से मन भ्रमित होने के साथ ही आपके बच्चे गलत संगत का शिकार हो सकते हैं। साल के मध्य में बड़े भाई से विवाद हो सकता है। हालांकि कुछ समय बाद ही वह खत्म हो जाएगा। नवंबर महीने में या तो आप अपने घर में किसी मांगलिक कार्य को संपन्न कराएंगे या फिर परिवार समेत किसी धार्मिल स्थल की यात्रा पर जा सकते हैं।
              </div>  
              <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> स्वास्थ्य जीवन </h1><br>
                सेहत के दृष्टिकोण से ये साल आपके लिए काफी अच्छा बीतेगा। हालांकि साल की शुरुआत में छोटी मोटी शारीरिक परेशानियों से आप ग्रस्त रह सकते हैं। लिहाजा एक बेहतर स्वास्थ्य के लिए समय-समय पर डॉक्टर से चेकअप करवाते रहें। विशेष रूप से मार्च के माह में वहान चलाते वक़्त सावधानी बरतें क्योंकि इस दौरान दुर्घटना का शिकार हो सकते हैं। साल के अंत में अपने जीवनसाथी के स्वास्थ्य का ख़ास ख्याल रखें।
           </div>
           <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
            <h1 class="text-danger "> शिक्षा</h1><br>
            साल 2020 में मिथुन राशि के जातकों को शिक्षा के क्षेत्र में अधिक संघर्ष करने की जरूरत पड़ेगी। एक ओर जहां आप लगातार मेहनत करेंगे लेकिन परिणाम आपके पक्ष में नहीं होंगे। साल की शुरुआत किसी शोध से भी हो सकती है, जिससे आप अतिरिक्त वक्त देंगे। लेकिन साल के मध्य में रिजल्ट आपके अनुकूल होने लगेंगे। यह वही वक्त होगा जब सरकारी नौकरी की तैयारी करने वाले छात्रों को अपनी मंजिल मिलेगी। वहीं मेडिकल क्षेत्र से जुड़े छात्रों को भी कुशल परिणाम मिलेंगे। मई के महीने में आपकी कोई करीबी मित्र पढ़ाई से आपकी एकाग्रता भंग कर सकती है। जिससे शिक्षा से जुड़ें क्रियाकलापों में बाधा आ सकती है। विदेश जाकर पढ़ने का सपना देखने वालों के लिए यह साल शुभ है।

       </div>
       <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
        <h1 class="text-danger "> प्रेम जीवन </h1><br>
        मिथुन राशि वालों के लिए साल 2020, प्रेम जीवन के हिसाब से बहुत अच्छा रहने की उम्मीद है। इस साल आप अपने प्रेमी का हर हाल में साथ देंगे और उनकी भावनाओं को समझेंगे। अपने पार्टनर के साथ इस वर्ष कहीं घूमने भी जा सकते हैं। साल के अंत में किसी बात को लेकर कहासुनी होने के आसार हैं इसलिये किसी भी बात को ज्यादा तूल देने की कोशिश न करें। कई बार आप अपने प्रेमी से कुछ ज्यादा ही अपेक्षाएं रखने लगते हैं जिसकी वजह से आपको परेशानी का सामना करना पड़ता है इसलिए ज्यादा अपेक्षाएं न रखें नहीं तो निराशा ही हाथ लगेगी। इस साल प्रेमी जोड़े विवाह बंधन में बंध सकते हैं।
   </div>
   <div class="mt-5   mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
    <h1 class="text-danger "> वैवाहिक जीवन </h1><br>
    साल 2020 वैवाहिक दृष्टिकोण से आपके लिए काफी अच्छा बीतने वाला है। जीवनसाथी के साथ इस साल की शुरुआत में आपका अच्छा वक्त बीतेगा। यदि आप अविवाहित हैं तो पार्टनर के साथ किसी बात पर बहस हो सकती है। यदि ऐसा माहौल बनता है तो अपनी वाणी पर संयम रखें और बात को प्यार से सुलझाने की कोशिश करें नहीं तो बात बिगड़ सकती है। जीवनसाथी के साथ किसी भी तरह के वाद विवाद की स्थिति से बचें वर्ना बात तलाक तक पहुँच सकती है। कहने का तात्पर्य यह है कि यह वक्त आपके लिए बहुत संवेदनशील है इसलिए जल्दबाजी में कोई निर्णय ना लें। हालांकि साल के अंत तक सब सही हो जाएगा। साल के अंत में आप अपने जीवनसाथी के साथ किसी रोमांटिक जगह पर घूमने जा सकते हैं। यदि ऐसा होता है तो अपने व अपने पार्टनर के स्वास्थ्य का विशेष ख्याल रखें। अविवाहित लोगों के जीवन में इस साल नए प्यार का आगमन हो सकता है।
    </div>
      <div class="mt-3  m-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
          <h4 class="text-dark">मिथुन राशि 2020 के जातक इस वर्ष जीवन के हर क्षेत्र में प्रगति के लिए ये ख़ास उपाय जरूर करें:
        </h4>
        <ul>
            <li>जीवन की मुसीबतों से निपटने के लिए इस साल मिथुन राशि के जातक किसी धार्मिक स्थान पर जाकर वहां साफ़ सफाई का काम करें।
            </li>
            <li>बृहस्पति वार और शनिवार के दिन विशेष रूप से किसी पीपल के पेड़ की पूजा करें और उसमें जल चढ़ाएं।
            </li>
            <li>पीपल के पेड़ को लगाना भी आपके लिए लाभदायक साबित हो सकता है।
            </li>
            
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