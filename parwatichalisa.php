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
            <h1 class="text-center display-4 pt-5 pb-3">PARWATI MATA<br>(पार्वती माता)</h1>
            
            <div class="mb-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2">
                पार्वती, उमा या गौरी : गौरी प्रजनन, प्रेम, सौंदर्य, विवाह, संतान, और भक्ति की हिंदू देवी हैं। ईश्वरीय शक्ति और शक्ति के रूप में भी। कई अन्य नामों से जाना जाता है, वह सर्वोच्च हिंदू देवी आदि पराशक्ति (शिवशक्ति) का कोमल और पौष्टिक पहलू है और देवी-उन्मुख शक्ति संप्रदाय के केंद्रीय देवताओं में से एक है। वह हिंदू धर्म में देवी माँ हैं,और उनके कई गुण और पहलू हैं। उनके प्रत्येक पहलुओं को एक अलग नाम के साथ व्यक्त किया जाता है, जिससे उन्हें भारत की क्षेत्रीय हिंदू कहानियों में 100 से अधिक नाम मिलते हैं। लक्ष्मी और सरस्वती के साथ, वह हिंदू देवी-देवताओं (त्रिदेवी) की त्रिमूर्ति का निर्माण करती हैं।

पार्वती हिंदू भगवान शिव की पत्नी हैं - रक्षक, ब्रह्मांड और सभी जीवन के विनाशक और पुनर्योजी।  वह पर्वत राजा हिमवान और रानी मैना की बेटी हैं। पार्वती हिंदू देवताओं गणेश, कार्तिकेय, अशोकसुंदरी की मां हैं।

            </div>
        
            <div >
                <img src="image/parvati.jpg" alt="" class="mx-auto d-block img-fluid" width="350" height="200">
            </div>
        <div class="pr-lg-5 pr-md-5">
            <a href="chalisa pdf/पार्वती जी की चालीसा.pdf" class="btn btn-info float-right  py-2 px-4 my-5 mr-lg-5  download" role="button">
              <i class="fa fa-download text-light pr-3"></i>Download PDF</a>
            <br><br><br><br><br>
            <div class="text-center pb-4 container aarti"><br><br>
              <h1 class="text-lg-center text-md-center text-sm-left text-xs-left text-muted ">
               पार्वती जी की चालीसा</h1><br><br>

॥॥दोहा॥॥<br><br>

जय गिरी तनये डग्यगे शम्भू प्रिये गुणखानी<br>
गणपति जननी पार्वती अम्बे ! शक्ति ! भवामिनी<br><br>

॥चालीसा॥<br><br>

ब्रह्मा भेद न तुम्हरे पावे, पांच बदन नित तुमको ध्यावे<br>
शशतमुखकाही न सकतयाष तेरो, सहसबदन श्रम करात घनेरो ।।1।।<br><br>

तेरो पार न पाबत माता, स्थित रक्षा ले हिट सजाता<br>
आधार प्रबाल सद्रसिह अरुणारेय, अति कमनीय नयन कजरारे ।।2।।<br><br>

ललित लालट विलेपित केशर कुमकुम अक्षतशोभामनोहर<br>
कनक बसन कञ्चुकि सजाये, कटी मेखला दिव्या लहराए ।।3।।<br><br>

कंठ मदार हार की शोभा, जाहि देखि सहजहि मन लोभ<br>
बालार्जुन अनंत चाभी धारी, आभूषण की शोभा प्यारी ।।4।।<br><br>

नाना रत्न जड़ित सिंहासन, टॉपर राजित हरी चारुराणां<br>
इन्द्रादिक परिवार पूजित, जग मृग नाग यज्ञा राव कूजित ।।5।।<br><br>

श्री पार्वती चालीसा गिरकल्सिा,निवासिनी जय जय ,<br>
कोटिकप्रभा विकासिनी जय जय ।।6।।<br><br>

त्रिभुवन सकल , कुटुंब तिहारी, अनु -अनु महमतुम्हारी उजियारी<br>
कांत हलाहल को चबिचायी, नीलकंठ की पदवी पायी ।।7।।<br><br>

देव मगनके हितुसकिन्हो, विश्लेआपु तिन्ही अमिडिन्हो <br>
ताकि , तुम पत्नी छविधारिणी, दुरित विदारिणीमंगलकारिणी ।।8।।<br><br>

देखि परम सौंदर्य तिहारो, त्रिभुवन चकित बनावन हारो<br>
भय भीता सो माता गंगा, लज्जा मई है सलिल तरंगा ।।9।।<br><br>

सौत सामान शम्भू पहायी, विष्णुपदाब्जाचोड़ी सो धैयी<br>
टेहिकोलकमल बदनमुर्झायो, लखीसत्वाशिवशिष चड्यू ।।10।।<br><br>

नित्यानंदकरीवरदायिनी, अभयभक्तकरणित अंपायिनी।<br>
अखिलपाप त्र्यतपनिकन्दनी, माही श्वरी, हिमालयनन्दिनी।।11।।<br><br>

काशी पूरी सदा मन भाई सिद्ध पीठ तेहि आपु बनायीं।<br>
भगवती प्रतिदिन भिक्षा दातृ, कृपा प्रमोद सनेह विधात्री ।।12।।<br><br>

रिपुक्षय कारिणी जय जय अम्बे, वाचा सिद्ध करी अबलाम्बे<br>
गौरी उमा शंकरी काली, अन्नपूर्णा जग प्रति पाली ।।13।।<br><br>

सब जान , की ईश्वरी भगवती, पति प्राणा परमेश्वरी सटी<br>
तुमने कठिन तपस्या किणी, नारद सो जब शिक्षा लीनी।।14।।<br><br>

अन्ना न नीर न वायु अहारा, अस्थिमात्रतरण भयुतुमहरा<br>
पत्र दास को खाद्या भाऊ, उमा नाम तब तुमने पायौ ।।15।।<br><br>

तब्निलोकी ऋषि साथ लगे दिग्गवान डिगी न हारे।<br>
तब तब जय , जय ,उच्चारेउ ,सप्तऋषि , निज गेषसिद्धारेउ ।।16।।<br><br>


सुर विधि विष्णु पास तब आये, वार देने के वचन सुननए।<br>
मांगे उबा, और, पति, तिनसो, चाहत्ताज्गा, त्रिभुवन, निधि, जिन्सों ।।17।।<br><br>

एवमस्तु कही रे दोउ गए, सफाई मनोरथ तुमने लए<br>
करी विवाह शिव सो हे भामा, पुनः कहाई है बामा।।18।।<br><br>

जो पढ़िए जान यह चालीसा, धन जनसुख दीहये तेहि ईसा।।19।।<br><br>

॥॥दोहा॥॥<br><br>

                   कूट चन्द्रिका सुभग शिर जयति सुच खानी<br>
पार्वती निज भक्त हिट रहाउ सदा वरदानी।


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