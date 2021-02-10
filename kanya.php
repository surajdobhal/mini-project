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
            <h1 class="text-center my-4"> KANYA [ कन्या ]</h1>
            
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 textrashi">
             कन्या राशिफल 2020 वाले स्वभाव से बहुत भोले और नादान किस्म के होते हैं। इनकी सबसे बड़ी ख़ासियत यह होती है कि यह अंदर और बाहर हर जगह से एक जैसे होते हैं और बहुत जल्दी दूसरों की बातों पर भरोसा कर लेते हैं। साल 2020 में भी आप अपनी इन्हीं खूबियों के साथ आगे बढ़ेंगे। इस साल जहां एक ओर आपका पारिवारिक जीवन अच्छा चलेगा वहीं आर्थिक स्थिति थोड़ा गड़बड़ा सकती है। यदि आपकी लव लाइफ की बात करें तो आप और आपका जीवनसाथी इस साल किसी बड़ी मुश्किल में पड़ सकते हैं। हालांकि बच्चों की ओर से इस साल आप बहुत बेफिक्र रहेंगे।<br>

मार्च और अप्रैल महीन में गुरु का मकर राशि में गोचर करने से शिक्षा के क्षेत्र में बड़ा बदलाव आ सकता है। लंबे समय से आप पेट की समस्या से परेशान हैं। साल 2020 में आपको इससे निजात मिल सकती है। नौकरी और व्यवसाय से संबंधित लोगों के लिए भी साल 2020 नई सौगात लेकर आएगा। इस साल जहां एक ओर आपको नौकरी के नए अवसर मिलेंगे वहीं आपका व्यवसाय भी खूब फलेगा। हालांकि इस बात में कोई दो राय नहीं है कि कदम कदम पर आपको बड़ी चुनौतियों का सामना करना पड़ेगा।
          </div>
        <br><br>
            <div >
                <img src="image/rashi/kanya.jpg " alt="kanya" class="mx-auto d-block img-fluid" width="450" height="300">
            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> आर्थिक जीवन  </h1><br>
                आर्थिक रूप से यह साल आपके लिए मिला जुला रहेगा। साल की शुरुआत में आप शेयर मार्किट में निवेश करेंगे जिससे आपको अच्छा लाभ मिल सकता है। नई नई नौकरियाँ मिलने की वजह से आपकी आर्थिक स्थिति इस साल अच्छी रहेगी। साल के बीच में यदि आपसे कोई पैसे उधार मांगता है तो भूलकर भी न दें। यह आपको किसी समस्या में डाल सकता है। पैसा कमाने के साथ ही यह आपके लिए खर्च भरा साल भी रहेगा।<br>
इस साल आप अपने परिवार के बेहतर भविष्य के लिए कोई नया घर, गाड़ी या फिर फर्नीचर ख़रीद सकते हैं। इन चीजों को ई एम आई पर लें तो बेहतर होगा। क्योंकि साल के आखिरी महीनों में आप पर पैसों की तंगी आ सकती है जिसके चलते कैश पैसा तब काम आएगा। सितम्बर के महीने से आपको अचानक धन की प्राप्ति होगी। आर्थिक लाभ के पूरे योग बने हुए हैं, लेकिन इस दौरान ख़र्चों पर नियंत्रण रखें।


            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> करियर </h1><br>
                साल 2020 में कन्या राशि के जातकों के करियर की शुरुआत बेहतर होगी। एक ओर जहां सफलता आपके कदम चूमेगी वहीं आपको चुनौतियों का भी सामना करना पड़ेगा। आपको इस वर्ष आगे बढ़ने के बहुत से अवसर मिलेंगे। यह न सिर्फ आपके करियर को एक नया आयाम देंगे बल्कि इससे आपकी आर्थिक स्थिति भी अच्छी होगी। आॅफिस और व्यवसाय के क्षेत्र में आपका मान सम्मान बढ़ने के साथ ही आपका प्रमोशन भी हो सकता है।<br>
लोहा, ज्वैलरी और ईंट पत्थर के कारोबार से जुड़े लोगों को इस साल बहुत फायदा होगा। साझेदारी मे काम या कोई बड़ा निवेश सितम्बर के महीने के बाद ही करें। यह वक्त आपके लिए बहुत संवेदनशील है। कार्य को लेकर नई चुनौतियों का भी सामना करना पड़ेगा, लेकिन इनसे आप घबराएँ नहीं। नई नौकरी की तलाश कर रहे हैं तो अगस्त में बदलना आपके लिए बेहतर होगा। साल का अंत नए काम या नौकरी की सौगात लाएगा।

            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> पारिवारिक जीवन </h1><br>
                कन्या राशि की महिलाओं के लिए यह साल पारिवारिक रूप से बहुत अच्छा रहेगा। पति के प्यार के साथ परिवार में आपको सम्मान मिलेगा। इस साल आप कुछ ऐसा करने वाले हैं जिस वजह से हर कोई आपकी तारीफ करेगा। नया घर बनवाने में आप अपने जीवनसाथी का पूरा साथ देंगे। छोटे भाई-बहनों के साथ किसी विवाद पर उनसे लड़ने के बजाय उन्हें प्यार से समझाएं।<br>
राशिफल 2020 के अनुसार इस साल आपके घर में ज़मीन से जुड़े किसी मामले का फैसला हो सकता है। लेकिन फैसला आपके पक्ष में नहीं होगा। साल के मध्य मे जीवनसाथी के साथ भी तनाव होगा, जिस वज़ह से आपकी सेहत पर असर तो होगा ही इसके साथ ही बच्चों की शिक्षा पर भी असर पड़ेगा। परिवार में किसी के जन्मदिन के अवसर पर आप घर में पाठ पूजा संपन्न करा सकते हैं। इस साल आपके पिता आपको पूरा सपोर्ट करेंगे और बिज़नेस में आपकी मदद भी करेंगे।


              </div>  
              <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> स्वास्थ्य जीवन </h1><br>
                इस साल कन्या राशि के जातकों का स्वास्थ्य ठीक ठाक रहेगा। आॅफिस की भागदौड़ की वजह से आप थकान और मानसिक विकार के शिकार हो सकते हैं। ऐसा भी हो सकता है कि आपकी कोई पुरानी बीमारी इस साल गंभीर रूप ले ले। इन सब से बचने के लिए अपनी डाइट को हेल्दी रखें। संतुलित आहार लेने के साथ ही योग और व्यायाम को अपने जीवन का हिस्सा बनाएं।<br>
अगर नसों से जुड़ीं या त्वचा की कोई परेशानी हो तो घर पर इलाज करने से बेहतर है कि आप किसी अच्छे डॉक्टर से संपर्क करें। ये साल यात्राओं के लिए मिला जुला रहेगा, मार्च के महीने से छोटी-छोटी यात्रा से आपको दुर्घटना हो सकती है। इसलिए यदि कहीं जाए तो सुरक्षा के पुख्ता इंतज़ाम कर लें। अपने काम के साथ अपनी सेहत का पूरा ध्यान रखना होगा और काम के साथ आराम को भी महत्व दें।

           </div>
           <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
            <h1 class="text-danger "> शिक्षा</h1><br>
            कन्या राशि वालों का आमतौर पर शिक्षा या पढ़ाई से बहुत ज्यादा लेना देना नहीं होता है। हालांकि इस साल भी आप अपनी इस ख़ूबी पर टिके रहेंगे लेकिन कुछ लोग पढ़ाई के प्रति बहुत आकर्षित होंगे। इस साल बेहतर परिणाम प्राप्त होने के साथ आप नए विषयों पर खोज भी कर सकते हैं। साल 2020 में शनि आपके शिक्षा भाव में गोचर कर रहे हैं, जिस वजह से आप पढ़ाई के प्रति आलस्य महसूस करेंगे या आपका मोह भंग हो सकता है। वर्ष की शुरुआत मे पढ़ाई के साथ कहीं कार्य करने की भी सोच सकते है, जिसमें आपका सालों पुराना सपना बिज़नेस करना भी शामिल हो सकता है। लेकिन बेहतर होगा कि आप एक समय पर एक काम को संपन्न करें।<br>
मई माह से शिक्षा भाव का स्वामी शनि और शिक्षा का कारक गुरु दोनों ही वक्री हो रहे हैं, इस समय आप बेहतर प्रदर्शन करेंगे। अगर विदेश पढ़ने जाने के लिए कोशिश कर रहे हैं तो सितम्बर महीना आपके लिए शुभ है। आर्थिक स्थिति खराब होने के चलते आप पढ़ाई करने के लिए कर्ज़ ले सकते हैं। हालांकि यह कर्ज़ लेकर आप इसका सदुपयोग ही करेंगे।


       </div>
       <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
        <h1 class="text-danger "> प्रेम जीवन </h1><br>
        प्रेम जीवन के आधार पर कन्या राशि वालों को इस साल मिला जुला फल प्राप्त हो सकता है। कन्या राशि वालों के स्वभाव की बात करें तो प्रेम के मामले में वो थोड़े शर्मीले होते हैं। ऐसा कहा जा सकता है की वो अपने पार्टनर की भावनाओं का कद्र तो करते हैं लेकिन अपने मन की बातों को उनके साथ शेयर नहीं कर पाते हैं। बहरहाल अपने इस स्वभाव में बदलाव लाने का भरसक प्रयास जरूर करें। अपने पार्टनर के अच्छे कामों की समय समय पर तारीफ भी जरूर करें। इसके अलावा इस साल आपका कोई पुराना साथी फिर से आपके जीवन में लौट सकता है। अगर आप किसी के साथ प्यार में हैं तो संभव है की उसके साथ इस साल आपका विवाह तय हो जाएगा।
   </div>
   <div class="mt-5   mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
    <h1 class="text-danger "> वैवाहिक जीवन </h1><br>
    वैवाहिक दृष्टिकोण से देखा जाए तो साल 2020 की शुरुआत में जीवनसाथी के साथ बेहद अच्छे संबंध स्थापित होंगें। इस दौरान आप दोनों किसी विदेश यात्रा पर भी जा सकते हैं। हालाँकि मार्च से सितम्बर के माह में आपसी मतभेद बढ़ सकता है, इस दौरान अपनी वाणी पर संयम रखें। साल के मध्य में जीवनसाथी का स्वास्थ्य बिगड़ सकता है लिहाजा उनका ध्यान रखें और प्यार से पेश आएं। इस साल बच्चों को लेकर आपके खर्चे बढ़ सकते हैं जिससे आप आर्थिक तंगी के शिकार भी हो सकते हैं। स्कूल या कॉलेज में होने वाली प्रतियोगिता में बच्चे का अच्छा प्रदर्शन रहेगा और उन्हें पुरस्कार भी प्राप्त हो सकता हैं। ये समय बच्चों के विदेश जाकर पढ़ने के लिए अनुकूल नहीं है।
    </div>
      <div class="mt-3  m-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
          <h4 class="text-dark">साल 2020 में कन्या राशि के जातक जीवन के हर क्षेत्र में अच्छे परिणामों के लिए ये सभी उपाय कर सकते हैं:
        </h4>
        <ul>
            <li>नियमित रूप से श्री विष्णु सहस्रनाम स्तोत्र और नील शनि श्रोत का पाठ जरूर करें।
            </li>
            <li>इसके अलावा गाय की पीठ पर तीन बार हाथ फेर कर उन्हें हरा चारा और हरी सब्जियां खिलाएं।
            </li>
            <li>कन्या राशि के जातक यदि छोटी कन्याओं को और रिश्ते में अपनी बहन, बुआ या मौसी को हरे रंग का सूट, साड़ी या चूड़ियाँ भेंट करें ये भी उनके लिए काफी लाभदायक सिद्ध होगा।</li>
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