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
            <h1 class="text-center my-4"> MEEN [ मीन ]</h1>
            
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 textrashi">
             मीन राशि के जातकों को साल 2020 में बहुत सोच समझकर चलने की जरूरत है। इस साल के शुरुआत में राहु का सुख भाव में गोचर है, जिसकी वजह से आपको मानसिक तनाव रहेगा और माता के साथ भी अनबन हो सकती है। आपको ध्यान रखना होगा कि माता के साथ होने वाली किसी भी अनबन से दूर रहें। इस साल कोई भी फैसला लेने में बहुत सावधानी बरतने की आवश्यकता है क्योंकि इस वर्ष आपकी ज़िंदगी में एक ऐसा पड़ाव भी आ सकता है जो आपके निर्णय लेने की क्षमता की परीक्षा ले सकता है।<br>
इस साल आपको अपनी वाणी पर भी काबू रखना होगा नहीं तो आपके कई काम बिगड़ सकते हैं, और आपके दोस्त और रिश्तेदार आपसे दूर हो सकते हैं। इस साल जमीन से जुड़े मुद्दों को लेकर भी कुछ परेशानियां आ सकती हैं इसलिए जमीन से जुड़े मामलों को लेकर सावधानी बरतें।<br>
साल के मध्य में यानि मई माह से लेकर सितंबर माह तक शनि और गुरु के वक्री होने की वजह से कार्यक्षेत्र में बदलाव आ सकता है। इस समय पर खुद पर काबू रखें और काम में बदलाव करने से बचें और किसी नए काम की शुरुआत करने से भी दूर रहें। इस साल आप काम को लेकर कई यात्राएं भी कर सकते हैं जिसकी वजह से आपके खर्चे में इजाफा हो सकता है और इसके कारण आपको तनाव की स्थिति से गुजरना पड़ सकता है।<br>
साल 2020 में आप धार्मिक स्थलों की यात्रा भी करेंगे जो आपके मन को शांति प्रदान करेंगी। सितंबर माह के बाद किसी प्रतियोगिता में आपको पुरस्कार से सम्मानित किया जा सकता है। साल के अंत में समय आपके अनुकूल रहेगा और गुरु का गोचर होने की वजह से आपके काम समय पर पूरे होंगे साथ ही आपके जोश में भी इज़ाफा होगा।
   

            </div>
        <br><br>
            <div >
                <img src="image/rashi/meen.jpg " alt="meen" class="mx-auto d-block img-fluid" width="450" height="300">
            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> आर्थिक जीवन  </h1><br>
                साल के शुरुआत में मीन राशि के जातकों के लिए धन लाभ के योग बने हुए हैं, इस धन का संचय आपको साल भर वित्तीय सहायता प्रदान कर सकता है। छोटे व्यवसाय करने वालों को अचानक धन लाभ होने की संभावना है। इस साल धार्मिक यात्राओं और समाज सेवा में धन खर्च हो सकता है। मीन राशि वालों को इस साल जमीन से जुड़ें मामलों में सतर्कता बरतनी होगी नहीं तो धन हानि हो सकती है। 2020 में मीन राशि वालों को पैतृक सम्पति से भी लाभ हो सकता है। किसी महिला को उधार देने से बचें आपको नुकसान उठाना पड़ सकता है। साल के अंत में धन को लेकर समय सामान्य रहेगा।

            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> करियर </h1><br>
                शनि और गुरु के गोचर होने की वजह से मीन राशि के जातकों को इस साल कार्य में उतार-चढ़ाव का सामना करना पड़ेगा। साझेदारी में कोई भी काम करने से पहले आपसी तालमेल बिठाने की कोशिश करें। अप्रैल माह के बाद व्यापार से जुड़े लोगों को बहुत सावधानी बरतने की जरूरत है। इस साल कार्य को लेकर मीन राशि के जातकों को देश-विदेश की यात्राएं करनी पड़ सकती हैं लेकिन इन यात्राओं से लाभ होने की संभावना बहुत कम है। टूर एंड ट्रैवल, भोजन, मनोरंजन और कंसल्टेंसी व्यवसाय से जुड़े लोगों के लिए ये साल अच्छा रहेगा। मार्च के महीने में नौकरी के लिए मेहनत करने वाले लोगों को आशातीत परिणाम मिल सकते हैं। मई से अक्टूबर तक कार्य क्षेत्र में स्थिति नाजुक रहेगी, काम को लेकर अधिक दबाव रहेगा अक्टूबर के बाद हालात बेहतर हो जाएंगे और आपका प्रमोशन भी हो सकता है।
            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> पारिवारिक जीवन </h1><br>
                साल 2020 में, वैसे तो मीन राशि के जातक अपने परिवार वालों के साथ तालमेल बनाकर चलेंगे लेकिन बीच-बीच में किसी गलतफहमी की वजह से बेवजह का तनाव हो सकता है। हालांकि यह तनाव ज्यादा दिन नहीं चलेगा। आपको अपने गुस्से पर नियंत्रण रखना होगा अगर आप ऐसा नहीं करते हैं तो आपके परिवार वाले ही आपको सहयोग करने में हिचकिचाएंगे। जून के महीने में किसी काम में आपके कामयाब होने की संभावना है। जिसके बाद आप अपने परिवार के साथ बाहर घूमने का प्लान बना सकते हैं या अपने परिवार वालों के साथ पार्टी कर सकते हैं। इस साल परिवार के किसी सदस्य की तबीयत ख़राब होने की संभावना है जिसका साथ आप पूरी तरह से निभाएंगे। 2020 में कुछ अनचाहे खर्चे भी होंगे जो आपको परेशान करेंगे। जमीन से जुड़ा कोई मुद्दा इस साल के अंत में खत्म हो जाएगा, जो आपकी प्रसन्नता की वजह बनेगा।

              </div>  
              <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> स्वास्थ्य जीवन </h1><br>
                इस साल ज्यादातर समय मीन राशि के जातक खुद को ऊर्जावान महसूस करेंगे। मौसम बदलने के दौरान आपको सचेत होने की जरूरत है नहीं तो सर्दी खांसी जैसी बीमारियां आपको परेशान कर सकती हैं। मार्च के बाद समय थोड़ा प्रतिकूल हो सकता है और दिल की कोई बीमारी हो सकती है या शारीरिक दर्द से परेशानी हो सकती है। इस दौरान किसी भी प्रकार की लापरवाही न करें और इलाज़ करवाएं। मीन राशि के जो जातक सर के दर्द से परेशान रहते हैं उन्हें इस साल अपना चैकअप करवाना चाहिए। इस साल आपको देश-विदेश की यात्रा करनी पड़ सकती है इसलिए आपको अपने स्वास्थ्य पर विशेष ध्यान देने की आवश्यकता है और हवाई यात्रा से जितना हो सके दूर रहने की कोशिश करनी चाहिए। आपके उज्जवल भविष्य की कामना करता है।
           </div>
           <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
            <h1 class="text-danger "> शिक्षा</h1><br>
            इस साल मीन राशि के जातक शिक्षा के क्षेत्र में कुछ नया करने का सोचेंगे और अगर अपनी सोच के मुताबिक़ वो मेहनत करते हैं तो सफलता अवश्य मिलेगी। इस साल सितारे मेहनती और दृढ़-संकल्प विद्यार्थियों के पक्ष में हैं। सरकारी नौकरी के लिए प्रयास कर रहे विद्यार्थियों के लिए मार्च का महीना बहुत अच्छा रहेगा। इस दौरान आपको सकारात्मक परिणाम मिलने की पूरी संभावना है। फार्मा, मेडिकल, डिजाइनिंग और होटल के विषय से जुड़े छात्रों को मनचाही सफलता मिलने के आसार हैं। जून से सितंबर के बीच अपनी सेहत का ख्याल रखें। अगर शिक्षा को लेकर आपको कोई भी परेशानी आए तो अपने सीनियर से या अपने अध्यापकों से मदद लेने में न शर्माएं।

       </div>
       <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
        <h1 class="text-danger "> प्रेम जीवन </h1><br>
        साल 2020 का शुरूआती दौर प्रेम प्रसंगों को लेकर अनुकूल नहीं रहेगा। इस दौरान प्रेमी के साथ भ्रम की स्थिति बनी रहेगी। छोटी सी गलतफहमी भी बड़े झगड़े का कारण बन सकती है। हालांकि मार्च के बाद स्थितियों में सुधार होने लगेगा। प्रेम से दूरी बनाकर चल रहे मीन राशि के जातकों को किसी यात्रा के दौरान नया साथी मिल सकता है, लेकिन कुछ वक्त की नजदीकियों के बाद समीकरण बदल जाएंगे इसलिए अपनी भावनाओं पर नियंत्रण रखें और कोई भी कदम उठाने से पहले अच्छे से विचार कर लें। किसी से प्रेम करते हैं और कहने से घबरा रहें हैं तो किसी महिला मित्र की मदद से आगे बढ़ें आपको कामयाबी मिलने की पूरी संभावना है। इस साल आपके प्रेमी को आर्थिक मदद की आवश्यकता पड़ सकती है, आपको अपने प्रेमी की आगे बढ़कर सहायता करनी चाहिए। साल के अंत तक मीन राशि के जातक प्रेम संबंध को विवाह में बदल सकते हैं।
   </div>
   <div class="mt-5   mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
    <h1 class="text-danger "> वैवाहिक जीवन </h1><br>
    इस साल मीन राशि वालों का वैवाहिक जीवन खुशनुमा बना रहेगा और आप अपने पार्टनर के साथ अच्छा समय बिताएंगे। जीवन साथी के सहयोग से इस साल कुछ नया काम शुरू कर सकते हैं। मई के महीने में वैवाहिक जीवन में कोई परेशानी आ सकती है जिस वजह से नजदीकियां दूरियों में तबदील हो सकती हैं। इस समय आपको शान्ति बनाए रखने की आवश्यकता है नहीं तो परेशानियां ज्यादा बढ़ सकती हैं। अक्टूबर तक हालात सुधरते नज़र आएंगे।<br>
इस साल अगर आप अपने बच्चों को समय नहीं देंगे तो वो आपसे दूर चले जाएंगे। इसलिए अपने बच्चों को समय दें और उनसे दोस्ताना व्यवहार करें। इस साल आपके बच्चे स्कूल या कॉलेज में अच्छा प्रदर्शन करेंगे जिससे आपको भी ख़ुशी प्राप्त होगी। अगस्त के महीने में बच्चों की सेहत पर विशेष ध्यान दें। साल के अंत तक पढ़ाई को लेकर आपके बच्चे बाहर जाने के बारे में सोच सकते हैं या इस तरह की योजना बना सकते हैं।

    </div>
      <div class="mt-3  m-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
          <h4 class="text-dark">मीन राशि के जातक वर्ष 2020 में अपने जीवन से नकारात्मक शक्तियों को दूर करने के लिए इन उपायों को आजमाएं:
        </h4>
        <ul>
            <li>बृहस्पति वार के दिन विशेष रूप से केले और पीपल का पेड़ लगाएं या उसमें जल डालें।
            </li>
            <li>बृहस्पति वार के दिन व्रत रखें और केसर का तिलक लगाएं।
            </li>
            <li>ब्राह्मणों को भोजन करवाना और उन्हें दक्षिणा देना भी आपके लिए बेहद लाभदायक रहेगा।</li>
            <li>किसी भी धार्मिक स्थान पर जाकर भक्ति भाव के साथ साफ़ सफाई का काम करें।</li>
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