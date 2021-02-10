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
            <h1 class="text-center display-4 pt-5 pb-3"> SHRI RAM<br>(श्री राम)</h1>
            
            <div class="mb-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2">
                राम, जिसे रामचंद्र के नाम से भी जाना जाता है, हिंदू धर्म के एक प्रमुख देवता हैं। वह भगवान विष्णु के सातवें अवतार हैं, जो कृष्ण, परशुराम और गौतम बुद्ध के साथ उनके सबसे लोकप्रिय अवतारों में से एक हैं। जैन ग्रंथों ने भी राम को 63 सालकापुरुषों में आठवें बलभद्र के रूप में उल्लेख किया है। हिंदू धर्म की राम-केंद्रित परंपराओं में, उन्हें सर्वोच्च माना जाता है। 

राम का जन्म कौशल्या और दशरथ के साथ अयोध्या में हुआ था, जो कोसल राज्य के शासक थे। उनके भाई-बहनों में लक्ष्मण, भरत और शत्रुघ्न शामिल थे। उन्होंने सीता से विवाह किया। हालांकि, एक शाही परिवार में पैदा हुए, उनके जीवन का वर्णन हिंदू ग्रंथों में किया गया है, जो अप्रत्याशित परिवर्तनों जैसे कि निर्वासित और कठिन परिस्थितियों में निर्वासित, नैतिक प्रश्न और नैतिक दुविधाओं से चुनौती देते हैं। उनके सभी मार्गों में, सबसे उल्लेखनीय है, राक्षस-राजा रावण द्वारा सीता का अपहरण, उसके बाद राम और लक्ष्मण के दृढ़ और महाकाव्य प्रयासों से उसकी स्वतंत्रता हासिल करने और महान बाधाओं के खिलाफ दुष्ट रावण को नष्ट करने के लिए। राम, सीता और उनके साथियों की संपूर्ण जीवन कहानी एक व्यक्ति के कर्तव्यों, अधिकारों और सामाजिक जिम्मेदारियों के बारे में चर्चा करती है। यह मॉडल चरित्रों के माध्यम से धर्म और धार्मिक जीवन को दर्शाता है। 



            </div>
        
            <div >
                <img src="image/ram.jpg" alt="" class="mx-auto d-block img-fluid" width="300" height="200">
            </div>
        <div class="pr-lg-5 pr-md-5">
            <a href="chalisa pdf/श्री राम चालीसा.pdf" class="btn btn-info float-right  py-2 px-4 my-5 mr-lg-5  download" role="button">
              <i class="fa fa-download text-light pr-3"></i>Download PDF</a>
            <br><br><br><br><br>
            <div class="text-center pb-4 container aarti"><br><br>
               <h1 class="text-lg-center text-md-center text-sm-left text-xs-left text-muted ">
श्री राम चालीसा</h1><br><br>

श्री रघुवीर भक्त हितकारी। सुन लीजै प्रभु अरज हमारी॥<br>
निशिदिन ध्यान धरै जो कोई। ता सम भक्त और नहिं होई॥1॥<br><br>

ध्यान धरे शिवजी मन माहीं। ब्रह्म इन्द्र पार नहिं पाहीं॥<br>
दूत तुम्हार वीर हनुमाना। जासु प्रभाव तिहूं पुर जाना॥2॥<br><br>

तब भुज दण्ड प्रचण्ड कृपाला। रावण मारि सुरन प्रतिपाला॥<br>
तुम अनाथ के नाथ गुंसाई। दीनन के हो सदा सहाई॥3॥<br><br>

ब्रह्मादिक तव पारन पावैं। सदा ईश तुम्हरो यश गावैं॥<br>
चारिउ वेद भरत हैं साखी। तुम भक्तन की लज्जा राखीं॥4॥<br><br>

गुण गावत शारद मन माहीं। सुरपति ताको पार न पाहीं॥<br>
नाम तुम्हार लेत जो कोई। ता सम धन्य और नहिं होई॥5॥<br><br>

राम नाम है अपरम्पारा। चारिहु वेदन जाहि पुकारा॥<br>
गणपति नाम तुम्हारो लीन्हो। तिनको प्रथम पूज्य तुम कीन्हो॥6॥<br><br>

शेष रटत नित नाम तुम्हारा। महि को भार शीश पर धारा॥<br>
फूल समान रहत सो भारा। पाव न कोऊ तुम्हरो पारा॥7॥<br><br>

भरत नाम तुम्हरो उर धारो। तासों कबहुं न रण में हारो॥<br>
नाम शक्षुहन हृदय प्रकाशा। सुमिरत होत शत्रु कर नाशा॥8॥<br><br>

लखन तुम्हारे आज्ञाकारी। सदा करत सन्तन रखवारी॥<br>
ताते रण जीते नहिं कोई। युद्घ जुरे यमहूं किन होई॥9॥<br><br>

महालक्ष्मी धर अवतारा। सब विधि करत पाप को छारा॥<br>
सीता राम पुनीता गायो। भुवनेश्वरी प्रभाव दिखायो॥10॥<br><br>

घट सों प्रकट भई सो आई। जाको देखत चन्द्र लजाई॥<br>
सो तुमरे नित पांव पलोटत। नवो निद्घि चरणन में लोटत॥11॥<br><br>

सिद्घि अठारह मंगलकारी। सो तुम पर जावै बलिहारी॥<br>
औरहु जो अनेक प्रभुताई। सो सीतापति तुमहिं बनाई॥12॥<br><br>

इच्छा ते कोटिन संसारा। रचत न लागत पल की बारा॥<br>
जो तुम्हे चरणन चित लावै। ताकी मुक्ति अवसि हो जावै॥13॥<br><br>

जय जय जय प्रभु ज्योति स्वरूपा। नर्गुण ब्रह्म अखण्ड अनूपा॥<br>
सत्य सत्य जय सत्यव्रत स्वामी। सत्य सनातन अन्तर्यामी॥14॥<br><br>

सत्य भजन तुम्हरो जो गावै। सो निश्चय चारों फल पावै॥<br>
सत्य शपथ गौरीपति कीन्हीं। तुमने भक्तिहिं सब विधि दीन्हीं॥15॥<br><br>

सुनहु राम तुम तात हमारे। तुमहिं भरत कुल पूज्य प्रचारे॥<br>
तुमहिं देव कुल देव हमारे। तुम गुरु देव प्राण के प्यारे॥16॥<br><br>

जो कुछ हो सो तुम ही राजा। जय जय जय प्रभु राखो लाजा॥<br>
राम आत्मा पोषण हारे। जय जय दशरथ राज दुलारे॥17॥<br><br>

ज्ञान हृदय दो ज्ञान स्वरूपा। नमो नमो जय जगपति भूपा॥<br>
धन्य धन्य तुम धन्य प्रतापा। नाम तुम्हार हरत संतापा॥18॥<br><br>

सत्य शुद्घ देवन मुख गाया। बजी दुन्दुभी शंख बजाया॥<br>
सत्य सत्य तुम सत्य सनातन। तुम ही हो हमरे तन मन धन॥19॥<br><br>

याको पाठ करे जो कोई। ज्ञान प्रकट ताके उर होई॥<br>
आवागमन मिटै तिहि केरा। सत्य वचन माने शिर मेरा॥20॥<br><br>

और आस मन में जो होई। मनवांछित फल पावे सोई॥<br>
तीनहुं काल ध्यान जो ल्यावै। तुलसी दल अरु फूल चढ़ावै॥21॥<br><br>

साग पत्र सो भोग लगावै। सो नर सकल सिद्घता पावै॥<br>
अन्त समय रघुबरपुर जाई। जहां जन्म हरि भक्त कहाई॥22॥<br><br>

श्री हरिदास कहै अरु गावै। सो बैकुण्ठ धाम को पावै॥23॥<br><br>

॥॥दोहा॥॥<br><br>

सात दिवस जो नेम कर, पाठ करे चित लाय।<br>
हरिदास हरि कृपा से, अवसि भक्ति को पाय॥<br><br>

राम चालीसा जो पढ़े, राम चरण चित लाय।<br>
जो इच्छा मन में करै, सकल सिद्घ हो जाय॥

               

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