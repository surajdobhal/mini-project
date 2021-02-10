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
       
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 mx-auto">
        <div class="container-fluid border shadow my-lg-5 bg-light">
            <h1 class="text-center py-4"> VRUSHABH [वृषभ]</h1>
            
            <div class="mt-5  mx-lg-5 mx-md-0 mx-sm-0 mx-xs-0 textrashi">
                वृषभ राशिफल 2020 के अनुसार वृषभ राशि वालों के लिए साल मध्यम फलदायी साबित होगा। इस साल हर क्षेत्र में सफलता प्राप्त करने के लिए आपको कड़ी मेहनत करनी होगी। इस साल आप चीजों को पाने के लिए काफी उत्साहित रहेंगे लेकिन जब वह नहीं मिलेगा तो आप अपने मार्ग से भटक सकते हैं। इसलिए जरूरी है कि धैर्य बनाएं रखें और अपने अहम की वजह से रिश्तों में कड़वाहट पैदा ना करें। संतान की ओर से यह साल आपके लिए बहुत शुभ साबित होगा। जबकि नौकरी और व्यवसाय के क्षेत्र में मिले जुले परिणाम मिलेंगे। वृषभ राशि के जातक निवेश करने से पहले कई बार सोचें और फिर किसी नतीजे पर पहुंचे। आपके सितारे बताते हैं कि निवेश करने से आपको कुछ खास फायदा नहीं है। जो छात्र सरकारी नौकरी की तैयारी कर रहे हैं या किसी अन्य क्षेत्र में अग्रसर हैं उन्हें भी इस साल कई चुनौतियों का सामना करना पड़ सकता है। कुल मिलाकर इस साल आपको अधिक संघर्ष और धैर्य से काम लेने की आवश्यकता है।
            </div>
        <br><br>
            <div >
                <img src="image/rashi/vrishabh.jpg " alt="vrushabh" class="mx-auto d-block img-fluid" width="450" height="300">
            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> आर्थिक जीवन  </h1><br>
                वार्षिक भविष्यफल साल 2020 आपके लिए कई मायनों में अनुकूल और कई मायनों में प्रतिकूल रहने वाला है। साल की शुरुआत में आपकी आर्थिक स्थिति बहुत अच्छी रहेगी लेकिन बाद में पैसों की तंगी से जूझना पड़ सकता है। इस साल आपकी आर्थिक स्थिति को मजबूत करने में ससुराल पक्ष महत्वपूर्ण भूमिका निभाएगा। लोहा और सुनार का काम करने वाले लोगों के लिए अप्रैल से लेकर जून के बीच का समय बहुत नाज़ुक है। इस वक्त किसी चीज में निवेश करने से पहले भली भांति विचार विमर्श कर लें। हालांकि इस साल आपको अपनी नौकरी से कोई शिकायत नहीं होगी।

            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> करियर </h1><br>
                साल 2020 में वृषभ राशि के जातकों का करियर नई उड़ान भरेगा। क्योंकि आपके कर्म भाव का स्वामी शनि जनवरी माह में अष्टम भाव से निकलकर नवम भाव में प्रवेश करेंगे। फलस्वरूप आपके लिए प्रगति करने और आगे बढ़ने के मार्ग बनेंगे। जो लोग बिजनेस से जुड़े हैं उन्हें भले ही इस साल कई चुनौतियों का सामना करना पड़े लेकिन निर्णय उनके लिए भी अनुकूल ही रहेगा। शेयर बाज़ार में निवेश करने से पहले सावधान हो जाए। किसी करीबी या आपके परिवार से संबंध रखने वाले व्यक्ति से धोखा मिलने की उम्मीद है। शनि एक मंद ग्रह है इसलिए मुख्य रूप से मार्च से लेकर सितंबर के बीच में आपको अधिक सावधान और अधिक चौकन्ना रहने की जरूरत है। कार्यक्षेत्र में आपको विदेश जाने का मौका मिलेगा साथ ही बॉस भी आपके काम से प्रभावित होंगे।
            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> पारिवारिक जीवन </h1><br>
                वार्षिक भविष्यफल 2020 के अनुसार इस साल राहु आपके द्वितीय भाव में विराजमान होगा। फलस्वरूप पारिवारिक दृष्टिकोण से ये साल आपके लिए तनाव भरा रहेगा। पारिवारिक रूप से आप इस साल खुद को ठगा हुआ महसूस करेंगे। अपनी कटु वाणी और खराब बर्ताव के चलते परिवार के सदस्यों के साथ आपका मतभेद हो सकता है। हालांकि जीवनसाथी के साथ अच्छा समय बीतेगा। जो लोग अविवाहित हैं उन्हें इस साल शादी के संबंध में शुभ समाचार मिलने की उम्मीद है। मई के मध्य में आपके पिता का स्वास्थ्य बिगड़ सकता है। उनके इलाज में आपकी भूमिका सबसे अहम रहेगी। बच्चों की ओर से सुख और अच्छा समाचार मिल सकता है। यदि कोई पारिवारिक विवाद चल रहा है तो नवंबर से दिसंबर में उसका समाधान आपके पक्ष में आने की संभावना बनेगी। जुलाई का शुरुआती वक्त आपके बच्चों के लिए बहुत अच्छा है।

              </div>  
              <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> स्वास्थ्य जीवन </h1><br>
                साल 2020 स्वास्थ्य के दृष्टिकोण से वृषभ राशि के जातकों के लिए उतार चढ़ाव भरा रहेगा। शारीरिक के साथ साथ आप खुद को मानसिक रूप से भी बीमार महसूस करेंगे। पारिवारिक विवाद के कारण तनाव में वृद्धि हो सकती है। काम और स्वास्थ्य के बीच में संतुलन बनाए रखें। झाड़ फूंक और बाबा आदि की बातों पर विश्वास ना करें। ये आपका स्वास्थ्य और भी ज्यादा बिगाड़ सकती हैं। इस साल आप अपने प्रेमी के प्रति बहुत आकर्षित महसूस करेंगे।
           </div>
           <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
            <h1 class="text-danger "> शिक्षा</h1><br>
            साल 2020 में शिक्षा के क्षेत्र में वृषभ राशि के जातक अच्छा काम करेंगे। साल की शुरुआत में ही आपको कई सकारात्मक परिणाम देखने को मिलेंगे। लेकिन इस बारे में आप सौ प्रतिशत निश्चिंत ना रहें, क्योंकि साल के मध्य में आपका पढ़ाई से मोह भंग और अरुचि आ सकती है। दसवीं और बारहवीं के छात्रों को इस साल अच्छे परिणाम मिलेंगे। जबकि सरकारी नौकरी की तैयारी करने वाले छात्रों को 2020 से कुछ निराशा जरूर होगी। इसके अलावा जो लोग लंबे समय से उच्च शिक्षा प्राप्त करने के बारे में सोच रहे हैं उनकी अभिलाषा भी पूरी होगी। इंजीनियरिंग, मेडिकल और कानून की पढ़ाई करने वाले विद्यार्थियों को इस वर्ष विशेष रूप से सफलता मिल सकती है।

       </div>
       <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
        <h1 class="text-danger "> प्रेम जीवन </h1><br>
        इस साल आपका प्रेम जीवन बहुत अच्छा रहेगा। प्रियतम के साथ समय व्यतीत कर पाएंगे। परिवार को साथ लेकर आप अपने पार्टनर के साथ किसी रोमांटिक ट्रिप पर जा सकते हैं। पारिवारिक कलह को सुलझाने के साथ ही आॅफिस के काम में भी आपको प्रियतम का भरपूर सहयोग मिलेगा।अविवाहित लोगों को इस साल उनका सच्चा प्यार मिल सकता है। लंबे वक़्त से आप जिसके साथ सीरियस रिलेशनशिप में हैं, उनके साथ इस साल विवाह के बंधन में बंध सकते हैं। इस वर्ष का फरवरी माह आपके लिए बहुत अच्छा रहने वाला है और इस दौरान आप एक और रोमांटिक जीवन का आनंद लेंगे। सिंंतबर और अक्टूबर में आपका प्यार परवान चढ़ेगा।
   </div>
   <div class="mt-5   mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
    <h1 class="text-danger "> वैवाहिक जीवन </h1><br>
    वैवाहिक जीवन के दृष्टिकोण से साल 2020 वृषभ राशि के जातकों के लिए कुछ ख़ास नहीं बीतेगा। इस साल यदि आप अपने दांपत्य जीवन में सामंजस्य बरक़रार रखना चाहते हैं तो भूलकर भी अपने जीवनसाथी से गुस्से में आकर कोई बहसबाजी ना करें। एक खुशहाल वैवाहिक जीवन के लिए इस साल आपको इस दिशा में लिए जाने वाले सभी फैसले बेहद सोच समझकर लेने होंगे, अन्यथा मतभेद की स्थिति उत्पन्न हो सकती है। वृषभ राशि के जातक विशेष रूप से मार्च के महीने में थोड़ा सतर्क रहे क्योंकि इस दौरान जीवनसाथी से तक़रार बढ़ सकती है। वहीं दिसंबर के माह में अपने जीवनसाथी के स्वास्थ्य का विशेष ख्याल रखें। जहाँ एक तरफ इस साल आपके वैवाहिक जीवन में कुछ परेशानियां उत्पन्न होगी वहीं दूसरी तरफ साल के मध्य में इस वर्ष आप अपने जीवनसाथी के साथ कुछ अच्छे पल भी व्यतीत कर पाएंगे और एक दूसरे की भावनाओं को समझने का प्रयास करेंगे।
    </div>
      <div class="mt-3  m-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
          <h4 class="text-dark">जीवन के विभिन्न क्षेत्रों में आने वाली मुसीबतों से बचने के लिए वृषभ राशि के जातक इस साल ये उपाय करें:
        </h4>

        <ul >
            <li>वृषभ राशि के जातक यदि इस साल छोटी कन्याओं को चावल की खीर, बताशे या कोई सफ़ेद रंग की मिठाई खिलाकर और उनके पैर छूकर आशीर्वाद लें तो इससे जीवन में आने वाली मुसीबतों से बच सकते हैं।</li>
            <li>इसके अलावा जीवन में नाकारात्मक शक्तियों का खात्मा करने के लिए गाय को नियमित रूप से आटे का पेड़ा खिलाएं।
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