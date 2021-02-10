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
            <h1 class="text-center display-4 pt-5 pb-3">SURYA DEV<br>(सूर्य देव)</h1>
            
            <div class="mb-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2">
                सूर्य एक संस्कृत शब्द है जिसका अर्थ है सूर्य। प्राचीन भारतीय साहित्य में सूर्या के पर्यायवाची शब्दों में आदित्य, अर्का, भानु, सावित्री, पूषन, रवि, मार्तण्ड, मित्र, भास्कर और विवस्वान शामिल हैं।

सूर्य हिंदू धर्म में भी सौर देवता को दर्शाता है, विशेष रूप से राजस्थान, गुजरात, मध्य प्रदेश, बिहार, महाराष्ट्र, उत्तर प्रदेश, झारखंड और ओडिशा जैसे राज्यों में पाए जाने वाले सौरा परंपरा में। सूर्या को पाँच देवताओं में से एक माना जाता है जो स्मार्ट परंपरा में ब्राह्मण को साकार करने के लिए समान पहलुओं और साधनों के रूप में माना जाता है। सूर्य की प्रतिमाओं को अक्सर घोड़ों द्वारा रथ पर चढ़ते हुए चित्रित किया जाता है, जो अक्सर संख्या में सात होते हैं जो दृश्य प्रकाश के सात रंगों और एक सप्ताह में सात दिनों का प्रतिनिधित्व करते हैं। मध्ययुगीन हिंदू धर्म में, सूर्य भी प्रमुख हिंदू देवताओं शिव, ब्रह्मा और विष्णु के लिए एक प्रतीक है। कुछ प्राचीन ग्रंथों और कलाओं में, सूर्य को इंद्र, गणेश या अन्य के साथ समकालिक रूप से प्रस्तुत किया गया है। सूर्य को देवता के रूप में बौद्ध और जैन धर्म के कला और साहित्य में भी पाया जाता है।



            </div>
        
            <div >
                <img src="image/surya.jpg" alt="" class="mx-auto d-block img-fluid" width="350" height="200">
            </div>
        <div class="pr-lg-5 pr-md-5">
            <a href="chalisa pdf/सूर्य चालीसा.pdf" class="btn btn-info float-right  py-2 px-4 my-5 mr-lg-5  download" role="button">
              <i class="fa fa-download text-light pr-3"></i>Download PDF</a>
            <br><br><br><br><br>
            <div class="text-center pb-4 container aarti"><br><br>
              <h1 class="text-lg-center text-md-center text-sm-left text-xs-left text-muted ">
सूर्य चालीसा</h1><br><br>


॥॥दोहा॥॥<br><br>

कनक बदन कुण्डल मकर, मुक्ता माला अङ्ग,<br>
पद्मासन स्थित ध्याइए, शंख चक्र के सङ्ग॥<br><br>


॥चालीसा॥<br><br>

जय सविता जय जयति दिवाकर!, सहस्त्रांशु! सप्ताश्व तिमिरहर॥<br>
भानु! पतंग! मरीची! भास्कर!, सविता हंस! सुनूर विभाकर॥ 1॥<br><br>

विवस्वान! आदित्य! विकर्तन, मार्तण्ड हरिरूप विरोचन॥<br>
अम्बरमणि! खग! रवि कहलाते, वेद हिरण्यगर्भ कह गाते॥ 2॥<br><br>

सहस्त्रांशु प्रद्योतन, कहिकहि, मुनिगन होत प्रसन्न मोदलहि॥<br>
अरुण सदृश सारथी मनोहर, हांकत हय साता चढ़ि रथ पर॥3॥<br><br>

मंडल की महिमा अति न्यारी, तेज रूप केरी बलिहारी॥<br>
उच्चैःश्रवा सदृश हय जोते, देखि पुरन्दर लज्जित होते॥4<br><br>

मित्र मरीचि, भानु, अरुण, भास्कर, सविता सूर्य अर्क खग कलिकर॥<br>
पूषा रवि आदित्य नाम लै, हिरण्यगर्भाय नमः कहिकै॥5॥<br><br>

द्वादस नाम प्रेम सों गावैं, मस्तक बारह बार नवावैं॥<br>
चार पदारथ जन सो पावै, दुःख दारिद्र अघ पुंज नसावै॥6॥<br><br>

नमस्कार को चमत्कार यह, विधि हरिहर को कृपासार यह॥<br>
सेवै भानु तुमहिं मन लाई, अष्टसिद्धि नवनिधि तेहिं पाई॥7॥<br><br>

बारह नाम उच्चारन करते, सहस जनम के पातक टरते॥<br>
उपाख्यान जो करते तवजन, रिपु सों जमलहते सोतेहि छन॥8॥<br><br>

धन सुत जुत परिवार बढ़तु है, प्रबल मोह को फंद कटतु है॥<br>
अर्क शीश को रक्षा करते, रवि ललाट पर नित्य बिहरते॥9॥<br><br>

सूर्य नेत्र पर नित्य विराजत, कर्ण देस पर दिनकर छाजत॥<br>
भानु नासिका वासकरहुनित, भास्कर करत सदा मुखको हित॥10॥<br><br>

ओंठ रहैं पर्जन्य हमारे, रसना बीच तीक्ष्ण बस प्यारे॥<br>
कंठ सुवर्ण रेत की शोभा, तिग्म तेजसः कांधे लोभा॥11॥<br><br>

पूषां बाहू मित्र पीठहिं पर, त्वष्टा वरुण रहत सुउष्णकर॥<br>
युगल हाथ पर रक्षा कारन, भानुमान उरसर्म सुउदरचन॥12॥<br><br>

बसत नाभि आदित्य मनोहर, कटिमंह, रहत मन मुदभर॥<br>
जंघा गोपति सविता बासा, गुप्त दिवाकर करत हुलासा॥13॥<br><br>

विवस्वान पद की रखवारी, बाहर बसते नित तम हारी॥<br>
सहस्त्रांशु सर्वांग सम्हारै, रक्षा कवच विचित्र विचारे॥14॥<br><br>

अस जोजन अपने मन माहीं, भय जगबीच करहुं तेहि नाहीं ॥<br>
दद्रु कुष्ठ तेहिं कबहु न व्यापै, जोजन याको मन मंह जापै॥15॥<br>
अंधकार जग का जो हरता, नव प्रकाश से आनन्द भरता॥<br><br>

ग्रह गन ग्रसि न मिटावत जाही, कोटि बार मैं प्रनवौं ताही॥<br>
मंद सदृश सुत जग में जाके, धर्मराज सम अद्भुत बांके॥16॥<br><br>

धन्य-धन्य तुम दिनमनि देवा, किया करत सुरमुनि नर सेवा॥<br>
भक्ति भावयुत पूर्ण नियम सों, दूर हटतसो भवके भ्रम सों॥17॥<br><br>

परम धन्य सों नर तनधारी, हैं प्रसन्न जेहि पर तम हारी॥<br>
अरुण माघ महं सूर्य फाल्गुन, मधु वेदांग नाम रवि उदयन॥18॥<br><br>

भानु उदय बैसाख गिनावै, ज्येष्ठ इन्द्र आषाढ़ रवि गावै॥<br>
यम भादों आश्विन हिमरेता, कातिक होत दिवाकर नेता॥19॥<br><br>

अगहन भिन्न विष्णु हैं पूसहिं, पुरुष नाम रविहैं मलमासहिं॥20॥<br><br>


॥॥दोहा॥॥<br><br>

भानु चालीसा प्रेम युत, गावहिं जे नर नित्य,<br>
सुख सम्पत्ति लहि बिबिध, होंहिं सदा कृतकृत्य॥


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