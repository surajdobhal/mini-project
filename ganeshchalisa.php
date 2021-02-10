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
            <h1 class="text-center display-4 pt-5 pb-3 ">GANESH JI<br>(गणेश जी)</h1>
            
            <div class="mb-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2">
                गणेश जी को गणपति, विनायक या कई अन्य नामों से भी जाना जाता है, जो हिंदू धर्म में सबसे प्रसिद्ध और सबसे अधिक पूजे जाने वाले देवताओं में से एक है। उनकी छवि पूरे भारत, नेपाल, श्रीलंका, फिजी, थाईलैंड, मॉरीशस, बाली (इंडोनेशिया) और बांग्लादेश में पाई जाती है। हिंदू संप्रदाय संबद्धता की परवाह किए बिना उसकी पूजा करते हैं। गणेश की भक्ति व्यापक रूप से फैली हुई है और जैन और बौद्धों तक फैली हुई है।

            </div>
        
            <div >
                <img src="image/ganeshji.jpg" alt="" class="mx-auto d-block img-fluid" width="350" height="200">
            </div>
        <div class="pr-lg-5 pr-md-5">
            <a href="chalisa pdf/श्री गणेश चालीसा.pdf" class="btn btn-info float-right  py-2 px-4 my-5 mr-lg-5  download" role="button">
              <i class="fa fa-download text-light pr-3"></i>Download PDF</a>
            <br><br><br><br><br>
            <div class="text-center pb-4 container aarti"><br><br>
              <h1 class="text-lg-center text-md-center text-sm-left text-xs-left text-muted ">
               श्री गणेश चालीसा</h1><br><br>

॥॥दोहा॥॥<br><br>

जय गणपति सदगुणसदन, कविवर बदन कृपाल।<br>
विघ्न हरण मंगल करण, जय जय गिरिजालाल॥<br>
जय जय जय गणपति गणराजू।<br>
मंगल भरण करण शुभ काजू ॥<br><br>

॥चालीसा॥<br><br>

जै गजबदन सदन सुखदाता। विश्व विनायक बुद्घि विधाता॥<br>
वक्र तुण्ड शुचि शुण्ड सुहावन। तिलक त्रिपुण्ड भाल मन भावन॥<br>
राजत मणि मुक्तन उर माला। स्वर्ण मुकुट शिर नयन विशाला॥<br>
पुस्तक पाणि कुठार त्रिशूलं । मोदक भोग सुगन्धित फूलं ॥1॥<br><br>

सुन्दर पीताम्बर तन साजित । चरण पादुका मुनि मन राजित ॥<br>
धनि शिवसुवन षडानन भ्राता । गौरी ललन विश्वविख्याता ॥<br>
ऋद्घिसिद्घि तव चंवर सुधारे । मूषक वाहन सोहत द्घारे ॥<br>
कहौ जन्म शुभकथा तुम्हारी । अति शुचि पावन मंगलकारी ॥2॥<br><br>

एक समय गिरिराज कुमारी । पुत्र हेतु तप कीन्हो भारी ॥<br>
भयो यज्ञ जब पूर्ण अनूपा । तब पहुंच्यो तुम धरि द्घिज रुपा ॥<br>
अतिथि जानि कै गौरि सुखारी । बहुविधि सेवा करी तुम्हारी ॥<br>
अति प्रसन्न है तुम वर दीन्हा । मातु पुत्र हित जो तप कीन्हा ॥3॥<br><br>

मिलहि पुत्र तुहि, बुद्घि विशाला । बिना गर्भ धारण, यहि काला ॥<br>
गणनायक, गुण ज्ञान निधाना । पूजित प्रथम, रुप भगवाना ॥<br>
अस कहि अन्तर्धान रुप है । पलना पर बालक स्वरुप है ॥<br>
बनि शिशु, रुदन जबहिं तुम ठाना। लखि मुख सुख नहिं गौरि समाना ॥4॥<br><br>

सकल मगन, सुखमंगल गावहिं । नभ ते सुरन, सुमन वर्षावहिं ॥<br>
शम्भु, उमा, बहु दान लुटावहिं । सुर मुनिजन, सुत देखन आवहिं ॥<br>
लखि अति आनन्द मंगल साजा । देखन भी आये शनि राजा ॥<br>
निज अवगुण गुनि शनि मन माहीं । बालक, देखन चाहत नाहीं ॥5॥<br><br>

गिरिजा कछु मन भेद बढ़ायो । उत्सव मोर, न शनि तुहि भायो ॥<br>
कहन लगे शनि, मन सकुचाई । का करिहौ, शिशु मोहि दिखाई ॥<br>
नहिं विश्वास, उमा उर भयऊ । शनि सों बालक देखन कहाऊ ॥<br>
पडतहिं, शनि दृग कोण प्रकाशा । बोलक सिर उड़ि गयो अकाशा ॥6॥<br><br>

गिरिजा गिरीं विकल है धरणी । सो दुख दशा गयो नहीं वरणी ॥<br>
हाहाकार मच्यो कैलाशा । शनि कीन्हो लखि सुत को नाशा ॥<br>
तुरत गरुड़ चढ़ि विष्णु सिधायो । काटि चक्र सो गज शिर लाये ॥<br>
बालक के धड़ ऊपर धारयो । प्राण, मन्त्र पढ़ि शंकर डारयो ॥7॥<br><br>

नाम गणेश शम्भु तब कीन्हे । प्रथम पूज्य बुद्घि निधि, वन दीन्हे ॥<br>
बुद्घ परीक्षा जब शिव कीन्हा । पृथ्वी कर प्रदक्षिणा लीन्हा ॥<br>
चले षडानन, भरमि भुलाई। रचे बैठ तुम बुद्घि उपाई ॥<br>
चरण मातुपितु के धर लीन्हें । तिनके सात प्रदक्षिण कीन्हें ॥8॥<br><br>

तुम्हरी महिमा बुद्घि बड़ाई । शेष सहसमुख सके न गाई ॥<br>
मैं मतिहीन मलीन दुखारी । करहुं कौन विधि विनय तुम्हारी ॥<br>
भजत रामसुन्दर प्रभुदासा । जग प्रयाग, ककरा, दर्वासा ॥<br>
अब प्रभु दया दीन पर कीजै । अपनी भक्ति शक्ति कछु दीजै ॥9॥<br><br>



॥॥दोहा॥॥<br><br>

                                  श्री गणेश यह चालीसा, पाठ करै कर ध्यान।<br>
नित नव मंगल गृह बसै, लहे जगत सन्मान॥<br>
सम्बन्ध अपने सहस्त्र दश, ऋषि पंचमी दिनेश।<br>
पूरण चालीसा भयो, मंगल मूर्ति गणेश ॥



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