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
            <h1 class="text-center my-4"> MESH [ मेष ]</h1>
            
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 textrashi">
                मेष राशिफल 2020 के अनुसार मेष राशि के जातकों के लिए ये साल बेहद शुभ है। इस साल आपकी​आर्थिक स्थिति बहुत अच्छी रहेगी। ये साल जहाँ एक तरफ नौकरीपेशा लोगों को तरक्की देगा वहीं दूसरी तरफ बिजनेस से जुड़े लोगों के लिए भी बेहद फलदायी साबित होगा। हालांकि आपको स्वास्थ्य के दृष्टिकोण से इस साल थोड़ी निराशा मिल सकती है। विशेष रूप से यात्रा पर जाते वक्त आपने स्वास्थ्य को नज़रअंदाज़ ना करें। प्रेम जीवन काफी आनंदमयी रहेगा, इस साल जीवनसाथी का पूरा सहयोग मिलेगा। लंबे समय से चली आ रही  पारिवारिक कलह दूर होगी और माता पिता के साथ ही भाई बहनों के साथ भी अच्छे संबंध बनेंगे। साल की शुरुआत में बड़े भाई के साथ थोड़ा बहुत विवाद हो सकता है लेकिन इसे दूर करने में आपका जीवनसाथी आपके लिए सारथी बनकर उभरेगा। साल के मध्य में छात्रों का पढ़ाई से मोहभंग हो सकता है। विदेश यात्रा करने वालों के लिए यह साल थोड़ा चुनौतीपूर्ण रहेगा लेकिन आपको अच्छी खबर मिलने की उम्मीद है।

            </div>
        <br><br>
            <div >
                <img src="image/rashi/mesh.jpg " alt="mesh" class="mx-auto d-block img-fluid" width="450" height="300">
            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> आर्थिक जीवन  </h1><br>
                इस साल आपकी आर्थिक स्थिति बहुत मजबूत रहेगी। आपके घर में पिछले कुछ समय से पैसा तो आ रहा है लेकिन वह घर में टिक नहीं रहा है साथ ही पैसों की तंगी भी बराकरार है। हालांकि साल 2020 में यह स्थिति पलटने वाली है। इस साल आप खुद को आर्थिक रूप से मजबूत महसूस करेंगे। नौकरी के अलावा भी पैसा कमाने के कई नए विकल्प आपके सामने आएंगे। आपके आॅफिस में ही तुला राशि का कोई व्यक्ति आपकी किस्मत पलटेगा। परिवार के किसी व्यक्ति के साथ आर्थिक लेन देन से बचें। यदि जमीन का बंटवार होता है तो किसी से लड़ाई झगड़ा ना करें। जनवरी और फरवरी में अचानक धन प्राप्ति की संभावना बन सकती है। यदि आप किसी के साथ पार्टनरशिप में बिजनेस करते हैं तो अपने साथी से अच्छे रिश्ते बनाएं क्योंकि बिजनेस में आपको लाभ मिलने की संभावना है।

            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> करियर </h1><br>
                मेष राशिफल 2020  के अनुसार में आप अपने करियर की बुलंदियों पर होंगे। नौकरी में सीनियर की तारीफें मिलने के साथ ही बॉस भी आपके काम की सबसे सामने सराहना करेंगे। जो लोग लंबे समय से नौकरी बदलने के बारे में विचार कर रहे हैं उनके लिए यह साल अनुकूल है। लेकिन इस बात का ध्यान रखें कि जल्दबाजी में कोई फैसला न लें। इस साल आपको विदेशों से भी बड़ी नौकरियों के आॅफर आएंगे। सोच समझकर और जानकारों की राय लेकर ही नौकरी बदलें। बढ़ते काम के दबाव के चलते आप तनाव के शिकार हो सकते हैं। आॅटोमोबाइल्स, सर्विस इंडस्ट्री, प्रिंटिंग प्रेस, लोहा कपंनी, पेट्रोल, गैस और तेल आदि का काम करने वालों को इस वर्ष काफी तरक्की मिलने की संभावना है। मल्टीनेशनल कंपनी में कार्य करने वालों के लिए यह साल बहुत अच्छा रहेगा। इस बात का विशेष ध्यान रखें कि अत्यधिक आत्मविश्वास में पड़कर कोई भी गलत निर्णय ना लें और अपने अधीनस्थ कर्मचारियों को किसी भी प्रकार का कष्ट ना दें नहीं तो स्थिति आपके प्रतिकूल हो सकती है।
            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> पारिवारिक जीवन </h1><br>
                पारिवारिक जीवन की बात करें तो इस साल आपके जीवन में काफी उतार-चढ़ाव रहेगा। साल की शुरुआत में आपके पिता का स्वास्थ्य बिगड़ सकता है। लिहाजा उनका ध्यान रखना आपके लिए आवश्यक होगा। हालांकि जीवनसाथी की ओर से इस साल आप खुद को बहुत मजबूत और बंधा हुआ महसूस करेंगे। इस साल आपको अपने बच्चों की ओर से भी सुखद समाचार मिलेगा। जून और सितंबर महीने में बच्चों का स्वास्थ्य बिगड़ सकता है। इसलिए बच्चों को घर का खाना खाने की सलाह दें। फास्ट फूड, तले भुने और मैदे से बनी चीजों को बिल्कुल नज़रअंदाज़ करने की सलाह दें। नवंबर महीने में आप अपने घर में किसी मांगलिक कार्य को संपन्न करा सकते हैं।​ जिसके चलते परिवार में आपकी वाहवाही होगी। यदि आप अपना घर खरीदना चाहते हैं तो जल्दबाजी में कोई निर्णय ना लें।

              </div>  
              <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> स्वास्थ्य जीवन </h1><br>
                स्वास्थ्य की ओर से इस साल आप खुद को ठगा हुआ महसूस कर सकते हैं। सालों से जिस बीमारी से आप परेशान हैं वह कम होने के बजाय स्थि​र बनी रहेगी। किसी भी रोग से मुक्ति पाने के लिए सिर्फ डॉक्टर की सलाह लें, किसी झाड़ फूंक या बाबाओं आदि पर भरोसा ना करें। ब्लड प्रेशर, डायबिटीज और अस्थ्मा के मरीजों को इस साल अधिक सतर्क रहने की जरूरत है। यदि लंबी यात्रा पर जा रहे हैं तो स्वास्थ्य की अनदेखी ना करें और सारी दवाएं साथ लेकर जाएं। आॅफिस में बढ़ते काम के चलते आप तनाव के शिकार हो सकते हैं। जिस वजह से आपको डिप्रेशन या माइग्रेन हो सकता है। यूं तो आप पूरे समय चुस्ती-फुर्ती से भरे रहेंगे लेकिन फिर भी मार्च के बाद आपको अपने भोजन पर विशेष ध्यान देने की आवश्यकता है। बासी और गरिष्ठ भोजन से बचकर रहें।
           </div>
           <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
            <h1 class="text-danger "> शिक्षा</h1><br>
            साल 2020 में मेष राशि के जातक शिक्षा के क्षेत्र में बेहतरीन काम करेंगे। यदि आप एमबीए या किसी अन्य डिग्री कॉलेज की पढ़ाई की तैयारी कर रहे हैं तो यह साल आपके लिए नई सौगात लेकर आएगा। हालांकि साल की शुरुआत में आपको कुछ निराशा का सामना करना पड़ सकता है, लेकिन साल के मध्य में सबकुछ आपके अनुकूल होगा। विदेश जाकर पढ़ाई करने वालों के लिए भी यह साल बहुत अच्छा है। जो छात्र सरकारी नौकरी की तैयारी कर रहे हैं उन्हें इस साल अपना लक्ष्य प्राप्त हो सकता है। जून से जुलाई तथा सितंबर माह आपके लिए बेहद अनुकूल सिद्ध होंगे और इस दौरान आपको प्रतियोगी परीक्षा में सफलता मिल सकती है। साल के मध्य के कुछ महीनों में आपके नवम भाव में पांच ग्रहों की युति विभिन्न विषयों में आपकी सफलता की ओर इशारा करती है। संभव है कि शुरुआत में स्थिति आपके प्रतिकूल हो सकती है। इसलिए मन लगाकर पढ़ाई करें और निश्चिंत रहें क्योंकि सफलता आपको जरूर मिलेगी।

       </div>
       <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
        <h1 class="text-danger "> प्रेम जीवन </h1><br>
        आमतौर पर देखा जाए तो मेष राशि के जातक अपने प्यार का इज़हार करने में हिचकिचाते नहीं हैं लेकिन इस साल किसी से अपने प्यार का इज़हार करते वक़्त आप थोड़ा दवाब महसूस कर सकते हैं। इसलिए सामने वाले से हाँ सुनने के लिए आपको काफी इंतज़ार करना पड़ सकता है। अपने प्यार का इज़हार यदि आप सीधी तरह से ना करके थोड़े रूमानी तरीके से करते हैं तो आपकी बात ज़रूर बनेगी। इस साल सितम्बर के महीने में कोई दूर गया हुआ साथी फिर से आपकी जिंदगी में दस्तक दे सकता है। आपके पार्टनर को इस साल आपसे बहुत सी उम्मीदें हैं, इन उम्मीदों पर खड़ा उतरना आपके रिश्ते को और भी मज़बूती प्रदान करेगा। ध्यान रखें की इस दौरान यदि आप किसी और के साथ प्रेम संबंध में हैं तो आपके लिए अच्छा होगा की किसी लव ट्रायंगल में ना फंसे।<br>
अगर आप किसी से प्यार करते हैं तो इस साल के अंत तक उनके साथ परिणय सूत्र में बंध सकते हैं।
   </div>
   <div class="mt-5   mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
    <h1 class="text-danger "> वैवाहिक जीवन </h1><br>
    साल 2020 की शुरुआत आपके लिए जीवनसाथी के साथ आपसी प्रेम और सद्भाव की भावना के साथ होगी। इस दौरान आप दोनों एक दूसरे के साथ गहरा भावनात्मक जुड़ाव महसूस करेंगे जिससे आपका रिश्ता और भी ज्यादा मजबूत होगा। इस साल आप अपने जीवनसाथी को कोई महंगा गिफ्ट दे सकते हैं जो उनके लिए किसी सरप्राइज से कम नहीं होगा। अगर आपका जीवनसाथी आपकी किसी बात से नाराज है तो उन्हें मनाने की पुरजोर कोशिश करें आपका प्रयास जरूर सफल होगा। इसके अलावा आपके जीवनसाथी को उनके कार्यक्षेत्र में कोई बड़ी उपलब्धि प्राप्त हो सकती है जिससे घर में खुशियों का माहौल बनेगा। कुलमिलाकर देखा जाए तो मेष राशि वालों के लिए वैवाहिक दृष्टिकोण से ये साल काफी लाभदायक सिद्ध होगा।
    </div>
      <div class="mt-3  m-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
          <h4 class="text-dark">जीवन में आने वाली मुसीबतों से बचने के लिए मेष राशि के जातक करें ये उपाय:
        </h4>
        <ul>
            <li>जीवन में नाकारात्मक प्रभावों से बचने के लिए यदि आप नियमित रूप से छाया पात्र का दान करें तो ये आपके लिए काफी फायदेमंद साबित हो सकता है।
            </li>
            <li>मेष राशि के जातक जीवन के हर क्षेत्र में सफलता प्राप्त करने के लिए इस साल किसी मिट्टी या लोहे के बर्तन में सरसों का तेल डालकर उसमें सबसे पहले अपना चेहरा देखें और उसके बाद उसे किसी मंदिर में दान कर दें।
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