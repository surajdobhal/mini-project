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
            <h1 class="text-center my-4"> KUMBHA [ कुंभ ]</h1>
            
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 textrashi">
              वार्षिक राशिफल 2020 के अनुसार कुंभ राशि वालों के लिए यह साल मिला जुला रहने वाला है। इस साल आपको कई चुनौतियों का सामना करना पड़ सकता है। इस साल किसी भी क्षेत्र में अच्छा फल तभी मिलेगा जब आप कड़ी मेहनत करेंगे। वर्ष के पहले महीने की 24 तारीख को आपकी राशि का स्वामी शनि, मकर राशि में बारहवें भाव में कदम रखेगा और पूरे वर्ष इसी भाव में रहेगा। इस परिवर्तन से साफ़ पता चलता है कि इस साल आप कई यात्राएं कर सकते हैं और कार्यक्षेत्र में आगे बढ़ने की भी कोशिश करेंगे। इस साल छात्रों को परीक्षाओं में अच्छे फल मिल सकते हैं। आर्थिक स्थिति के हिसाब से यह साल ज्यादा अच्छा नहीं रहेगा आपको इस साल अपने खर्चों पर नियंत्रण रखना होगा। 27 से 31 दिसंबर तक आपको अपने स्वास्थ्य का विशेष ध्यान रखना होगा, नहीं तो कोई परेशानी आ सकती है। आइये अब विस्तार से जानते हैं कैसा रहेगा कुंभ राशि वालों के लिए साल 2020।  

            </div>
        <br><br>
            <div >
                <img src="image/rashi/khumb.jpg " alt="kumbha" class="mx-auto d-block img-fluid" width="450" height="300">
            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> आर्थिक जीवन  </h1><br>
                कुंभ राशि वालों के लिए साल 2020 आर्थिक दृष्टि से बहुत अच्छा नहीं रहेगा। इस साल पैसे खर्च करने से पहले घर के वरिष्ठ लोगों से सलाह मशवरा अवश्य लें। इस साल आपकी राशि में राहु की स्थिति किसी बड़ी हानि की ओर इशारा कर रही है। इस साल की शुरुआत में आपको कई चीजों पर पैसा खर्च करना पड़ेगा। हालांकि मार्च के बाद परिस्तिथियाँ बदलेंगी और 30 मार्च से 30 जून के बीच बृहस्पति का गोचर बारहवें भाव में होने से आपको आमदनी के नये स्रोत मिलेंगे और आर्थिक स्थिति थोड़ी मजबूत होगी। इस साल आप अपने किसी पुराने मित्र के साथ मिलकर कोई व्यवसाय शुरू करने की सोच सकते हैं।

            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> करियर </h1><br>
                भविष्यकथन 2020 की मानें तो इस साल करियर के क्षेत्र में आपको काफी मेहनत करनी पड़ेगी। अच्छी मेहनत ही आपको अच्छे परिणाम दिलाएगी। जो लोग नौकरीपेशा हैं उन्हें इस साल प्रमोशन मिल सकता है। वहीं जो लोग किसी के साथ मिलकर बिजनेस कर रहे उन्हें अपने पार्टनर पर आंख मूँद कर भरोसा न करने की सलाह दी जाती है। जनवरी से 30 मार्च और 30 जून से 20 नवंबर के बीच का समय बिजनेस करने वालों के लिए बहुत फायदेमंद रहेगा। इस समय निवेश करना भी कुंभ राशि वालों के लिए अच्छा रहेगा। जुलाई से लेकर अक्टूबर तक काम को लेकर विदेश यात्रा पर जाने के योग हैं। ऑफिस में कानाफूसी करना आपके लिए जोखिम भरा हो सकता है इसलिए बुरी सोच वाले लोगों से दूर रहें। इस साल का अंत करियर के लिहाज से आपके लिए बहुत अच्छा रहेगा क्योंकि आपका बॉस आपके काम की तारीफ़ करेगा और आपका प्रमोशन भी हो सकता है।
            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> पारिवारिक जीवन </h1><br>
                इस साल कुंभ राशि वालों की पारिवारिक स्थिति अच्छी रहेगी। जमीनी मामले को लेकर जो विवाद काफी समय से परिवार में चल रहा था वो इस साल खत्म हो जाएगा। हालांकि साल के मध्य में आप अपने काम में इतने व्यस्त हो जाएंगे कि अपने परिवार को समय नहीं दे पाएंगे जिसके चलते विवाद या छोटी-मोटी नोकझोक हो सकती है। इस साल बड़े भाई के साथ आपके रिश्तों में खटास आ सकती है। पैसों से जुड़े किसी भी मामले को लेकर बहस करने से पहले पूरी स्थिति को ढंग से जान लें। मध्य सितंबर के बाद राहु का गोचर आप के चतुर्थ भाव में होगा जिससे घर में तनाव पैदा हो सकता है। आप साल के अंत तक नया वाहन या घर खरीद सकते हैं।

              </div>  
              <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> स्वास्थ्य जीवन </h1><br>
                स्वास्थ्य को लेकर इस साल थोड़ा सचेत रहें। किसी भी यात्रा पर जाने से पहले सेहत की सुरक्षा के इंतज़ाम कर लें। ब्लड प्रेशर और अस्थमा के मरीज इस साल सोच-समझकर यात्रा पर जाएं। इस साल आपके बच्चे आपके स्वास्थ्य का ध्यान रखेंगे। साल के मध्य में किसी प्रकार का तनाव हो सकता है जिससे बचने के लिए आपको योग ध्यान का सहारा लेने की सलाह दी जाती है। बाहर के खाने से परहेज़ करें। ख़ासकर स्ट्रीड फूड को न खाएं।
           </div>
           <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
            <h1 class="text-danger "> शिक्षा</h1><br>
            वर्ष 2020 शिक्षा के लिहाज से अच्छा रहेगा। इस साल छात्रों का मन पढ़ाई में लगेगा और इसका अच्छा परिणाम उनको परीक्षा के दौरान मिलेगा। कुंभ राशि के जो छात्र पढ़ाई छोड़ चुके हैं वो इस वर्ष फिर से पढ़ाई शुरू कर सकते हैं। हालांकि मध्य सितंबर तक राहु का गोचर पंचम भाव में रहने की वजह से कुंभ राशि के छात्रों को पढ़ाई के क्षेत्र में कुछ दिक्क़तें आ सकती हैं लेकिन यह स्थिति ज्यादा दिन तक नहीं चलेगी। इन्फॉर्मेशन टेक्नोलॉजी, डॉक्टर, फाइनेंस, मीडिया और इंजीनियरिंग की शिक्षा अर्जित करने वाले छात्रों के लिए यह साल स्वर्णिम सिद्ध होगा। छात्रों को शिक्षा के क्षेत्र में किसी भी प्रकार के शार्टकट को अपनाने से बचना चाहिए नहीं तो मनमाफिक सफलता मिलना मुश्किल हो सकता है।

       </div>
       <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
        <h1 class="text-danger "> प्रेम जीवन </h1><br>
        प्रेम जीवन में इस साल कुंभ राशि वालों को काफी उतार-चढ़ाव देखने को मिल सकता है। वर्ष की शुरुआत से ही आपके रिश्ते आपके पार्टनर के साथ बिगड़ सकते हैं। आप दोनों के बीच किसी बात को लेकर गलतफहमी हो सकती है। अगर आप दोनों के बीच कोई तीसरा व्यक्ति आया तो आपका रिश्ता टूट भी सकता है। इस साल अगर प्रेम जीवन में सफलता पाना चाहते हैं तो आपको हर मामले को शांति से समझना होगा और उसके बाद ही उसपर कोई प्रतिक्रिया देनी होगी। साल के आखिर तक स्थितियां सुधरेंगी।
   </div>
   <div class="mt-5   mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
    <h1 class="text-danger "> वैवाहिक जीवन </h1><br>
    इस वर्ष आपको जीवनसाथी का पूरा सहयोग प्राप्त होगा। यह सहयोग निजी एवं पेशेवर जीवन दोनों में देखने को मिलेगा। विवाहित लोगों को साल की शुरूआत में ससुराल से प्यार और सम्मान मिलेगा। इस साल के मध्य में अपने पार्टनर के स्वास्थ्य पर ध्यान दें। क्योंकि उनकी तबीयत बिगड़ सकती है। इस साल आपके बच्चे कुछ ऐसी उपलब्धि हासिल कर सकते हैं जिससे आपके घर में खुशियों का माहौल बन जाएगा। वर्ष के अंत में परिवार के साथ किसी धार्मिक यात्रा पर जा सकते हैं।
    </div>
      <div class="mt-3  m-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
          <h4 class="text-dark">साल 2020 में कुंभ राशि के जातक जीवन के विभिन्न क्षेत्रों में सफलता प्राप्त करने के लिए ये सभी उपाय करें:
        </h4>
        <ul>
            <li>अपने घर में श्री यंत्र की स्थापना कर उसकी नियमित रूप से पूजा अर्चना करें।
            </li>
            <li>लक्ष्मी माता के मन्त्र का नियमित जाप करें।
            </li>
            <li>गाय को आटे के बने पेड़े खिलाएं और गौ दान करें।</li>
            <li>किसी भी महिला का अनादर ना करें।</li>
            <li>गरीबों की अपनी यथाशक्ति मदद करें।</li>
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