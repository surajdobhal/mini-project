<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/cal.css">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
  
</head>
<body style="overflow-x: hidden;">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
       <img src="image/logo.png" width="150" height="100" class="d-inline-block align-top m-0" alt="logo">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav justify-content-lg-end justify-content-md-start justify-content-sm-start " id="navbarNavDropdown" ;>
        <ul class="  navbar-nav pl-5 mx-1 " style="font-size: 1.5rem">
          <li class="nav-item ">
            <a class="nav-link fl" href="home.php">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="pandit.php">Book Pandit </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aarti.php">Aarti</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="chalisa.php">Chalisa <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="rashifal.php">Varshik Rashifal </a>
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
            <a class="nav-link" href="ebook.php">E-Book </a>
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
        <div class="container-fluid bg-light border shadow my-lg-5 my-md-0 my-sm-0 my-xs-0">
            <h1 class="text-center display-4 pt-5 pb-3">SHIV JI<br>(शिव जी)</h1>
            
            <div class="mb-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2">
               शिव को महादेव (देवताओं के देवता के रूप में भी जाना जाता है) प्रमुख में से एक है हिंदू धर्म के देवता। वह शैव धर्म के भीतर सर्वोच्च व्यक्ति हैं, समकालीन हिंदू धर्म के भीतर प्रमुख परंपराओं में से एक है।

शिव को त्रिमूर्ति के भीतर "द विनाशक" के रूप में जाना जाता है, हिंदू त्रिमूर्ति जिसमें ब्रह्मा और विष्णु शामिल हैं। शैववाद परंपरा में, शिव सर्वोच्च प्राणियों में से एक हैं जो ब्रह्मांड की रचना, रक्षा और परिवर्तन करते हैं। शक्तिवाद परंपरा में, देवी या देवी को सर्वोच्च में से एक के रूप में वर्णित किया गया है, फिर भी शिव विष्णु और ब्रह्मा के साथ प्रतिष्ठित हैं। एक देवी को प्रत्येक की ऊर्जा और रचनात्मक शक्ति (शक्ति) कहा जाता है, पार्वती (सती) के साथ शिव के समान पूरक भागीदार। वह हिंदू धर्म की स्मार्टा परंपरा की पंचायतन पूजा में पाँच समान देवताओं में से एक हैं। 

            </div>
        
            <div >
                <img src="image/shivji.jpg" alt="" class="mx-auto d-block img-fluid" width="350" height="200">
            </div>
        <div class="pr-lg-5 pr-md-5">
            <a href="chalisa pdf/श्री शिव चालीसा.pdf" class="btn btn-info float-right  py-2 px-4 my-5 mr-lg-5  download" role="button">
              <i class="fa fa-download text-light pr-3"></i>Download PDF</a>
            <br><br><br><br><br>
            <div class="text-center pb-4 container aarti"><br><br>
              <h1 class="text-lg-center text-md-center text-sm-left text-xs-left text-muted "> 
श्री शिव चालीसा</h1><br><br>


॥॥दोहा॥॥<br><br>

श्री गणेश गिरिजा सुवन, मंगल मूल सुजान।<br>
कहत अयोध्यादास तुम, देहु अभय वरदान॥<br><br>

॥चालीसा॥<br><br>

जय गिरिजा पति दीन दयाला। सदा करत सन्तन प्रतिपाला॥<br>
भाल चन्द्रमा सोहत नीके। कानन कुण्डल नागफनी के॥<br>
अंग गौर शिर गंग बहाये। मुण्डमाल तन छार लगाये॥<br>
वस्त्र खाल बाघम्बर सोहे। छवि को देख नाग मुनि मोहे॥1॥<br><br>

मैना मातु की ह्वै दुलारी। बाम अंग सोहत छवि न्यारी॥<br>
कर त्रिशूल सोहत छवि भारी। करत सदा शत्रुन क्षयकारी॥<br>
नन्दि गणेश सोहै तहँ कैसे। सागर मध्य कमल हैं जैसे॥<br>
कार्तिक श्याम और गणराऊ। या छवि को कहि जात न काऊ॥2॥<br><br>

देवन जबहीं जाय पुकारा। तब ही दुख प्रभु आप निवारा॥<br>
किया उपद्रव तारक भारी। देवन सब मिलि तुमहिं जुहारी॥<br>
तुरत षडानन आप पठायउ। लवनिमेष महँ मारि गिरायउ॥<br>
आप जलंधर असुर संहारा। सुयश तुम्हार विदित संसारा॥3॥<br><br>

त्रिपुरासुर सन युद्ध मचाई। सबहिं कृपा कर लीन बचाई॥<br>
किया तपहिं भागीरथ भारी। पुरब प्रतिज्ञा तसु पुरारी॥<br>
दानिन महं तुम सम कोउ नाहीं। सेवक स्तुति करत सदाहीं॥<br>
वेद नाम महिमा तव गाई। अकथ अनादि भेद नहिं पाई॥4॥<br><br>

प्रगट उदधि मंथन में ज्वाला। जरे सुरासुर भये विहाला॥<br>
कीन्ह दया तहँ करी सहाई। नीलकण्ठ तब नाम कहाई॥<br>
पूजन रामचंद्र जब कीन्हा। जीत के लंक विभीषण दीन्हा॥<br>
सहस कमल में हो रहे धारी। कीन्ह परीक्षा तबहिं पुरारी॥5॥<br><br>

एक कमल प्रभु राखेउ जोई। कमल नयन पूजन चहं सोई॥<br>
कठिन भक्ति देखी प्रभु शंकर। भये प्रसन्न दिए इच्छित वर॥<br>
जय जय जय अनंत अविनाशी। करत कृपा सब के घटवासी॥<br>
दुष्ट सकल नित मोहि सतावै । भ्रमत रहे मोहि चैन न आवै॥6॥<br><br>

त्राहि त्राहि मैं नाथ पुकारो। यहि अवसर मोहि आन उबारो॥<br>
लै त्रिशूल शत्रुन को मारो। संकट से मोहि आन उबारो॥<br>
मातु पिता भ्राता सब कोई। संकट में पूछत नहिं कोई॥<br>
स्वामी एक है आस तुम्हारी। आय हरहु अब संकट भारी॥7॥<br><br>

धन निर्धन को देत सदाहीं। जो कोई जांचे वो फल पाहीं॥<br>
अस्तुति केहि विधि करौं तुम्हारी। क्षमहु नाथ अब चूक हमारी॥<br>
शंकर हो संकट के नाशन। मंगल कारण विघ्न विनाशन॥<br>
योगी यति मुनि ध्यान लगावैं। नारद शारद शीश नवावैं॥8॥<br><br>

नमो नमो जय नमो शिवाय। सुर ब्रह्मादिक पार न पाय॥<br>
जो यह पाठ करे मन लाई। ता पार होत है शम्भु सहाई॥<br>
ॠनिया जो कोई हो अधिकारी। पाठ करे सो पावन हारी॥<br>
पुत्र हीन कर इच्छा कोई। निश्चय शिव प्रसाद तेहि होई॥9॥<br><br>

पण्डित त्रयोदशी को लावे। ध्यान पूर्वक होम करावे ॥<br>
त्रयोदशी ब्रत करे हमेशा। तन नहीं ताके रहे कलेशा॥<br>
धूप दीप नैवेद्य चढ़ावे। शंकर सम्मुख पाठ सुनावे॥<br>
जन्म जन्म के पाप नसावे। अन्तवास शिवपुर में पावे॥10॥<br>

कहे अयोध्या आस तुम्हारी। जानि सकल दुःख हरहु हमारी॥<br><br>


॥॥दोहा॥॥<br><br>

नित्त नेम कर प्रातः ही, पाठ करौं चालीसा।<br>
तुम मेरी मनोकामना, पूर्ण करो जगदीश॥<br>
मगसर छठि हेमन्त ॠतु, संवत चौसठ जान।<br>
अस्तुति चालीसा शिवहि, पूर्ण कीन कल्याण॥



            </div>
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
          <p class="text-justify">The aim of your Panditji website is to provide religious facility to the person who believes in Hinduism, our effort is to give complete convenience to those who believe in Hinduism, which they had previously received with difficulty. Through this website, we have a detailed description of complete types of Aarti, Chalisa, annual horoscope, Panchang Hinduism books etc., you can easily download them. Most important, through our website you can invite Pandit ji for any kind of auspicious work by inviting Panditji for auspicious work to be done in your home</p>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
          <h6 class="pl-lg-5 pl-md-3 pl-xs-1 pl-sm-1">Categories</h6>
          <ul class=" pl-lg-5 pl-md-3  pl-sm-0 pl-xs-0 footer-links">
            <li><a href="pandit.php" >Book Pandit</a></li>
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
          <h6 class="pl-lg-1 pl-md-3 pl-xs-1 pl-sm-1">Quick Links</h6>
          <ul class="footer-links pl-lg-1 pl-md-3 pl-xs-0 pl-sm-0">
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
          <p class="copyright-text  text-white">Copyright &copy; 2020 All Rights Reserved by 
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>