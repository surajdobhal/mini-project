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
            <h1 class="text-center display-4 pt-5 pb-3">VISHNU JI<br>(विष्णु जी)</h1>
            
            <div class="mb-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2">
               विष्णु  हिंदू धर्म के प्रमुख देवताओं में से एक है। हिंदू त्रय (त्रिमूर्ति) में "संरक्षक", विष्णु परम वैष्णववाद में  ब्रह्म (आध्यात्मिकता, आत्म, या अपरिवर्तनीय परम वास्तविकता) की आध्यात्मिक अवधारणा के समान है, और उल्लेखनीय है। जब भी दुनिया को बुराई, अराजकता और विनाशकारी ताकतों से खतरा होता है, तो धार्मिक सिद्धांतों के संरक्षण और सुरक्षा के लिए विभिन्न अवतारों (जैसे राम और कृष्ण) को अपनाना। हिंदू धर्म की स्मार्टा परंपरा में विष्णु पंचायतन पूजा में पूजे जाने वाले पाँच समान देवताओं में से एक हैं



            </div>
        
            <div >
                <img src="image/jagdish2.jpeg" alt="" class="mx-auto d-block img-fluid" width="350" height="200">
            </div>
        <div class="pr-lg-5 pr-md-5">
            <a href="chalisa pdf/विष्णु जी की चालीसा.pdf" class="btn btn-info float-right  py-2 px-4 my-5 mr-lg-5  download" role="button">
              <i class="fa fa-download text-light pr-3"></i>Download PDF</a>
            <br><br><br><br><br>
            <div class="text-center pb-4 container aarti"><br><br>
              <h1 class="text-lg-center text-md-center text-sm-left text-xs-left text-muted ">
विष्णु जी की चालीसा</h1><br><br>

॥॥दोहा॥॥<br><br>

                     विष्णु सुनिए विनय सेवक की चितलाय ।<br>
कीरत कुछ वर्णन करूं दीजै ज्ञान बताय ॥<br><br>

॥चालीसा॥<br><br>

नमो विष्णु भगवान खरारी,कष्ट नशावन अखिल बिहारी ।<br>
प्रबल जगत में शक्ति तुम्हारी,त्रिभुवन फैल रही उजियारी ॥1॥<br><br>

सुन्दर रूप मनोहर सूरत,सरल स्वभाव मोहनी मूरत ।<br>
तन पर पीताम्बर अति सोहत,बैजन्ती माला मन मोहत ॥2॥<br><br>

शंख चक्र कर गदा बिराजे,देखत दैत्य असुर दल भाजे ।<br>
सत्य धर्म मद लोभ न गाजे,काम क्रोध मद लोभ न छाजे ॥3॥<br><br>

सन्तभक्त सज्जन मनरंजन,दनुज असुर दुष्टन दल गंजन ।<br>
सुख उपजाय कष्ट सब भंजन,दोष मिटाय करत जन सज्जन ॥4॥<br><br>

पाप काट भव सिन्धु उतारण,कष्ट नाशकर भक्त उबारण ।<br>
करत अनेक रूप प्रभु धारण,केवल आप भक्ति के कारण ॥5॥<br><br>

धरणि धेनु बन तुमहिं पुकारा,तब तुम रूप राम का धारा ।<br>
भार उतार असुर दल मारा,रावण आदिक को संहारा ॥6॥<br><br>

आप वाराह रूप बनाया,हरण्याक्ष को मार गिराया ।<br>
धर मत्स्य तन सिन्धु बनाया,चौदह रतनन को निकलाया ॥7॥<br><br>

अमिलख असुरन द्वन्द मचाया,रूप मोहनी आप दिखाया ।<br>
देवन को अमृत पान कराया,असुरन को छवि से बहलाया ॥8॥<br><br>

कूर्म रूप धर सिन्धु मझाया,मन्द्राचल गिरि तुरत उठाया ।<br>
शंकर का तुम फन्द छुड़ाया,भस्मासुर को रूप दिखाया ॥9॥<br><br>

वेदन को जब असुर डुबाया,कर प्रबन्ध उन्हें ढुढवाया ।<br>
मोहित बनकर खलहि नचाया,उसही कर से भस्म कराया ॥10॥<br><br>

असुर जलन्धर अति बलदाई,शंकर से उन कीन्ह लडाई ।<br>
हार पार शिव सकल बनाई,कीन सती से छल खल जाई ॥11॥<br><br>

सुमिरन कीन तुम्हें शिवरानी,बतलाई सब विपत कहानी ।<br>
तब तुम बने मुनीश्वर ज्ञानी,वृन्दा की सब सुरति भुलानी ॥12॥<br><br>

देखत तीन दनुज शैतानी,वृन्दा आय तुम्हें लपटानी ।<br>
हो स्पर्श धर्म क्षति मानी,हना असुर उर शिव शैतानी ॥13॥<br><br>

तुमने ध्रुव प्रहलाद उबारे,हिरणाकुश आदिक खल मारे ।<br>
गणिका और अजामिल तारे,बहुत भक्त भव सिन्धु उतारे ॥14॥<br><br>

हरहु सकल संताप हमारे,कृपा करहु हरि सिरजन हारे ।<br>
देखहुं मैं निज दरश तुम्हारे,दीन बन्धु भक्तन हितकारे ॥15॥<br><br>

चहत आपका सेवक दर्शन,करहु दया अपनी मधुसूदन ।<br>
जानूं नहीं योग्य जब पूजन,होय यज्ञ स्तुति अनुमोदन ॥16॥<br><br>

शीलदया सन्तोष सुलक्षण,विदित नहीं व्रतबोध विलक्षण ।<br>
करहुं आपका किस विधि पूजन,कुमति विलोक होत दुख भीषण ॥17॥<br><br>

करहुं प्रणाम कौन विधिसुमिरण,कौन भांति मैं करहु समर्पण ।<br>
सुर मुनि करत सदा सेवकाईहर्षित रहत परम गति पाई ॥18॥<br><br>

दीन दुखिन पर सदा सहाई,निज जन जान लेव अपनाई ।<br>
पाप दोष संताप नशाओ,भव बन्धन से मुक्त कराओ ॥19॥<br><br>

सुत सम्पति दे सुख उपजाओ,निज चरनन का दास बनाओ ।<br>
निगम सदा ये विनय सुनावै,पढ़ै सुनै सो जन सुख पावै ॥20॥


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