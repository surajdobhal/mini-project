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
            <h1 class="text-center my-4"> KARK [ कर्क ]</h1>
            
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 textrashi">
             वार्षिक राशिफल 2020 के अनुसार कर्क राशि के जातकों के लिए ये साल मध्यम फलदायी सिद्ध होगा। चूँकि साल की शुरुआत में राहु आपके बारहवें भाव में विराजमान होगा इसलिए आर्थिक दृष्टिकोण से ये साल आपके लिए बेहद खर्चीला रहेगा। कुछ इस तरह आपके खर्चें बढ़ेंगे जिन्हें आप चाहकर भी कंट्रोल नहीं कर पाएंगे। हालांकि करियर की दृष्टि से आप जीवन के एक नए पायदान पर कदम रखेंगे। आॅफिस के काम के चलते इस साल विदेश जाने के भी योग बन रहे हैं। शनि का आपकी राशि के सप्तम भाव में प्रवेश करने से आपका अपने काम से मोहभंग हो सकता है। जबकि पारिवारिक स्थिति इस साल काफी चुनौतीपूर्ण रहेगी। अगर आप किसी नए बंधन में बंधना चाहते हैं तो यह साल आपके लिए उत्तम रहने वाला है। अगस्त से अक्टूबर मे आपको धन, कार्य और परिवार को लेकर कुछ गंभीर होने की आवश्यकता है। हालांकि संतान की ओर से इस साल आपको शुभ समाचार मिलने की उम्मीद है। विधार्थियों के लिए यह वर्ष काफी मेहनत भरा रहने वाला है। नवंबर के बाद का समय कार्य को लेकर बेहतर रहेगा और नौकरी के लिए भी नए अवसर प्राप्त होंगे।   

            </div>
        <br><br>
            <div >
                <img src="image/rashi/kark.jpg " alt="kark" class="mx-auto d-block img-fluid" width="450" height="300">
            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> आर्थिक जीवन  </h1><br>
                वार्षिक राशिफल 2020 के अनुसार कर्क राशि वालों के जीवन में एक लंबे समय से चली आ रही आर्थिक तंगी से निजात मिलेगा। आर्थिक स्थिति मजबूत होने के कारण इस साल आप किसी सार्वजनिक शुभ कार्य में निवेश करेंगे। इस साल जहां एक ओर आप खूब पैसे कमाएंगे वहीं खर्चों में भी तेजी से वृद्धि होगी। मार्च और अप्रैल का महीना शेयर मार्किट के लिए बेहतर रहेगा। इस समय आप जितना मर्जी चाहे निवेश कर सकते हैं। बच्चों की पढ़ाई और बेहतर भविष्य के लिए इस साल आप काफी निवेश करेंगे। माता पिता और घर के अन्य बुजुर्ग लोगों के स्वास्थ्य के प्रति गंभीरता दिखाते हुए उनकी बीमा पॉलिसी जरूर करवाएं। काम में बरकत होने के कारण इस साल आप अपना खुद का आॅफिस खरीद सकते हैं। नए घर में प्रवेश करने या खरीदने के लिए जुलाई का महीना आपके लिए बहुत शुभ है। ये साल जाते-जाते भी आपको कई ऐसे मौके देगा जिनके बलबूते आप काफी पैसा कमा पाएंगे।

            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> करियर </h1><br>
                साल 2020 कर्क राशि के जातकों के लिए करियर के लिहाज से काफी अच्छा बीतने वाला है। जहां आप फिलहाल नौकरी कर रहे हैं वहीं आपकी पदोन्नति हो सकती है। साथ ही सीनियर और आपके बॉस भी आपके काम से खुश होंगे जिस वजह से आपको बीच में ही प्रमोशन भी मिल सकता है। जो लोग नौकरी ना मिलने का अफसोस करके घर पर बैठे हैं उन्हें विदेश में नौकरी करने का मौका मिल सकता है। साल के मध्य में आप अपने काम के प्रति बहुत लगाव महसूस करेंगे और आपका जोश, संघर्ष और लग्न देखते ही बनेगा। कार्य को लेकर देश-विदेश से अच्छे संबंध बनेंगे और यात्रा पर जाने का अवसर भी प्राप्त होगा। जो लोग किसी प्रकार के व्यवसाय से जुड़े हैं उन्हें इस साल काफी तरक्की मिलेगी। मई में गुरु और शनि दोनों के वक्री होने से यह वक्त आपके लिए बहुत शुभ साबित होगा।
            </div>
            <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> पारिवारिक जीवन </h1><br>
                साल 2020 कर्क राशिवालों के लिए पारिवारिक दृष्टिकोण से मिला जुला परिणाम देने वाला साबित होगा। इस दौरान आपको पारिवारिक स्तर पर बहुत से विभिन्न तरीके के अनुभव होंगें। आपकी राशि में शनि के स्थित होने की वजह से जहाँ एक तरफ आप परिवार के साथ मतभेद की स्थिति बनेगी वहीं दूसरी तरफ आप परिवार से दूर भी जा सकते हैं। इस दौरान अपनी माता के स्वास्थ्य का विशेष ध्यान रखें। परिवार में कलह की स्थिति बनेगी जिससे मन व्यथित रहेगा। देखा जाए तो इस वर्ष अधिकतर समय आप अपने परिवार से दूर ही रहेंगे लेकिन जुलाई के मध्य में एक बार फिर से परिवार वालों के साथ अच्छा सामंजस्य बैठेगा। इस दौरान आप अपने परिवार वालों की समस्याओं को सुनेंगे और उन्हें हर तरह से सपोर्ट करेंगे।

              </div>  
              <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
                <h1 class="text-danger "> स्वास्थ्य जीवन </h1><br>
                कर्क राशि के जातकों का यह साल स्वास्थ्य की दृष्टि से बहुत कमजोर रहेगा। साल की शुरुआत से ही आपको काफी उतार-चढ़ाव देखने को मिलेंगे। आॅफिस में काम बढ़ने के चलते आप तनाव और अन्य मानसिक रोगों के शिकार हो सकते हैं। अगर आपको साल 2020 में स्वास्थ्य संबंधी कुछ भी दिक्कत होती है तो सीधा डॉक्टर से संपर्क करें। जरा सी लापरवाही आपको बड़ी मुश्किल का शिकार बना सकती है। मई के महीने में यात्रा करने से बचें। हालांकि साल का अंत स्वास्थ्य रूप से आपके लिए बहुत सुखद रहेगा।
           </div>
           <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
            <h1 class="text-danger "> शिक्षा</h1><br>
            साल 2020 शिक्षा के दृष्टिकोण से आपके लिए काफी महत्वपूर्ण रहने वाला है। साल की शुरुआत से ही आप अपनी शिक्षा के प्रति बहुत संवेदनशील रहेंगे। दोस्ती-यारी को दरकिनार करते हुए आप शिक्षा का हाथ थामेंगे। किस्मत भी इस साल आपका साथ देगी। जिस चीज में आप हाथ डालेंगे सफलता आपके कदम चूमेगी। हालांकि साल की शुरुआत में कुछ ऐसा हो सकता है जब आपकी तबीयत खराब होने के चलते आप पढ़ाई पर उतना फोकस ना कर सकें, लेकिन स्थिति बहुत जल्द समान्य हो जाएगी। ऐसे में जरूरी है आप अपने सेहत के प्रति पहले ही गंभीर हो जाएं। मार्च के माह मे किसी से व्यर्थ के वाद-विवाद से बचें और खुद पर ध्यान दें, नहीं तो यह विवाद आपकी पढ़ाई को प्रभावित कर सकता है। मई के माह मे मंगल के अष्टम भाव में जाने से अचानक किसी कारण से शिक्षा मे विघ्न आ सकता है। इस समय में किसी गहरे शोध मे भी रुचि जग सकती है। हालांकि जो छात्र विदेश में जाकर शिक्षा करने के बारे में सोच रहे हैं उनके लिए यह समय सही नहीं है। पढ़ाई के क्षेत्र में इस साल आप खूब पैसा खर्च भी करेंगे और बाद में कमाएंगे भी।

       </div>
       <div class="mt-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
        <h1 class="text-danger "> प्रेम जीवन </h1><br>
        वार्षिक भविष्यफल 2020 के अनुसार कर्क राशि वालों के प्रेम संबंधों के लिए ये साल काफी अच्छा रहेगा। हालाँकि इस साल आपकी लव लाइफ में कुछ बदलाव आ सकते हैं। आपका समय पार्टनर के साथ अच्छा बीतेगा जिससे वो आपको एक बेहतर साथी के रूप में देख सकेंगे। अगर आप नए प्यार की तलाश में हैं तो इस साल आपकी ये तलाश जरूर ख़त्म होगी। शादी के लिए सोचने वाले लोगों को इस वर्ष अच्छे रिश्ते मिल सकते हैं।
   </div>
   <div class="mt-5   mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
    <h1 class="text-danger "> वैवाहिक जीवन </h1><br>
    साल 2020 में आपके वैवाहिक जीवन की गाड़ी बहुत सुचारु रूप से चलने वाली है। इस समय में आप अपने जीवन साथी को पूरा समय देंगे साथ में आपका पार्टनर भी आपको पूरी तरह समझेगा और हर क्षेत्र में आपका सारथी बनकर उभरेगा। फिर चाहे वह पारिवारिक मुद्दा हो या फिर प्रोफेशनल लाइफ से जुड़ी कोई बात हो। लंबे समय से चली आ रही तनातनी खत्म होगी और आप प्यार मोहब्बत से अपनी गाड़ी को चलाएंगे। अविवाहित लोगों के लिए भी साल 2020 काफी खास होने वाला है। लंबे समय से सोशल मीडिया पर आप जिन्हें डेट कर रहे हैं उनके साथ आप सीरियस रिलेशनशिप मे जा सकते हैं या आपकी शादी भी हो सकती है। सितंबर के महीने से ही कुछ सामंज़स्य देखने को मिलेगा। इस दौरान आप मानसिक रूप से खुद को काफी मजबूत और शांत महसूस करेंगे। बच्चों की सेहत पर ध्यान दें। मौसम बदलते वक्त उनका स्वास्थ्य प्रभावित हो सकता है। हालांकि बच्चों की ओर से इस साल आपको सुखद समाचार मिल सकता है।
    </div>
      <div class="mt-3  m-lg-5 mx-md-5 mx-sm-3 mx-xs-2 text-muted textrashi">
          <h4 class="text-dark">साल 2020 में कर्क राशि में आने वाली समस्याओं के समाधान ले लिए अपनाएं ये विशेष उपाय:
        </h4>
        <ul>
            <li>इस वर्ष बुरे परिणामों से बचने के लिए विशेष रूप से किसी मिट्टी या लोहे के बर्तन में सरसों का तेल रखकर उसमें अपना चेहरा देखें और इसके बाद इसे किसी को दान कर दें।
            </li>
            <li>मंगलवार और शनिवार के दिन खासतौर से चमेली के तेल का दिया जलाकर हनुमान जी की पूजा अर्चना करें और उनके सामने हनुमान चालीसा, सुन्दरकांड या फिर बजरंग बाण का पाठ करें।
            </li>
            <li>छोटे बच्चों विशेष रूप से बालकों में प्रसाद के रूप में बूंदी या गुड़ चना अवश्य बांटें।


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