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
            <h1 class="text-center display-4 pt-5 pb-3">SANTOSHI MATA<br>(संतोषी माता)</h1>
            
            <div class="mb-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2">
                संतोषी माता या संतोषी माँ हिंदू लोकगीतों में एक देवी हैं। उसे "संतुष्टि की माँ" के रूप में सम्मानित किया जाता है, उसके नाम का अर्थ है। संतोषी माता को विशेष रूप से उत्तर भारत की महिलाओं द्वारा पूजा जाता है। 16 लगातार शुक्रवार को महिलाओं द्वारा किया जाने वाला संतोषी मां व्रत नामक व्रत (अनुष्ठान व्रत) देवी के पक्ष में जीतता है।

            </div>
        
            <div >
                <img src="image/santoshi.jpg" alt="" class="mx-auto d-block img-fluid" width="350" height="200">
            </div>
        <div class="pr-lg-5 pr-md-5">
            <a href="chalisa pdf/संतोषी माता की चालीसा.pdf" class="btn btn-info float-right  py-2 px-4 my-5 mr-lg-5  download" role="button">
              <i class="fa fa-download text-light pr-3"></i>Download PDF</a>
            <br><br><br><br><br>
            <div class="text-center pb-4 container aarti"><br><br>
              <h1 class="text-lg-center text-md-center text-sm-left text-xs-left text-muted ">
संतोषी माता की चालीसा</h1><br><br>


॥॥दोहा॥॥<br><br>

बन्दौं सन्तोषी चरण रिद्धि-सिद्धि दातार।<br>
ध्यान धरत ही होत नर दुःख सागर से पार॥<br>
भक्तन को सन्तोष दे सन्तोषी तव नाम।<br>
कृपा करहु जगदम्ब अब आया तेरे धाम॥<br><br>


॥चालीसा॥<br><br>

जय सन्तोषी मात अनूपम। शान्ति दायिनी रूप मनोरम॥<br>
सुन्दर वरण चतुर्भुज रूपा। वेश मनोहर ललित अनुपा॥1॥<br><br>

श्‍वेताम्बर रूप मनहारी। माँ तुम्हारी छवि जग से न्यारी॥<br>
दिव्य स्वरूपा आयत लोचन। दर्शन से हो संकट मोचन॥2॥<br><br>

जय गणेश की सुता भवानी। रिद्धि- सिद्धि की पुत्री ज्ञानी॥<br>
अगम अगोचर तुम्हरी माया। सब पर करो कृपा की छाया॥3॥<br><br>

नाम अनेक तुम्हारे माता। अखिल विश्‍व है तुमको ध्याता॥<br>
तुमने रूप अनेकों धारे। को कहि सके चरित्र तुम्हारे॥4॥<br><br>

धाम अनेक कहाँ तक कहिये। सुमिरन तब करके सुख लहिये॥<br>
विन्ध्याचल में विन्ध्यवासिनी। कोटेश्वर सरस्वती सुहासिनी॥<br><br>

कलकत्ते में तू ही काली। दुष्‍ट नाशिनी महाकराली॥<br>
सम्बल पुर बहुचरा कहाती। भक्तजनों का दुःख मिटाती॥5॥<br><br>

ज्वाला जी में ज्वाला देवी। पूजत नित्य भक्त जन सेवी॥<br>
नगर बम्बई की महारानी। महा लक्ष्मी तुम कल्याणी॥6॥<br><br>

मदुरा में मीनाक्षी तुम हो। सुख दुख सबकी साक्षी तुम हो॥<br>
राजनगर में तुम जगदम्बे। बनी भद्रकाली तुम अम्बे॥7॥<br><br>

पावागढ़ में दुर्गा माता। अखिल विश्‍व तेरा यश गाता॥<br>
काशी पुराधीश्‍वरी माता। अन्नपूर्णा नाम सुहाता॥8॥<br><br>

सर्वानन्द करो कल्याणी। तुम्हीं शारदा अमृत वाणी॥<br>
तुम्हरी महिमा जल में थल में। दुःख दारिद्र सब मेटो पल में॥9॥<br><br>

जेते ऋषि और मुनीशा। नारद देव और देवेशा।<br>
इस जगती के नर और नारी। ध्यान धरत हैं मात तुम्हारी॥10॥<br><br>

जापर कृपा तुम्हारी होती। वह पाता भक्ति का मोती॥<br>
दुःख दारिद्र संकट मिट जाता। ध्यान तुम्हारा जो जन ध्याता॥11॥<br><br>

जो जन तुम्हरी महिमा गावै। ध्यान तुम्हारा कर सुख पावै॥<br>
जो मन राखे शुद्ध भावना। ताकी पूरण करो कामना॥12॥<br><br>

कुमति निवारि सुमति की दात्री। जयति जयति माता जगधात्री॥<br>
शुक्रवार का दिवस सुहावन। जो व्रत करे तुम्हारा पावन॥13॥<br><br>

गुड़ छोले का भोग लगावै। कथा तुम्हारी सुने सुनावै॥<br>
विधिवत पूजा करे तुम्हारी। फिर प्रसाद पावे शुभकारी॥14॥<br><br>


शक्ति- सामरथ हो जो धनको। दान- दक्षिणा दे विप्रन को॥<br>
वे जगती के नर औ नारी। मनवांछित फल पावें भारी॥15॥<br><br>

जो जन शरण तुम्हारी जावे। सो निश्‍चय भव से तर जावे॥<br>
तुम्हरो ध्यान कुमारी ध्यावे। निश्‍चय मनवांछित वर पावै॥16॥<br><br>

सधवा पूजा करे तुम्हारी। अमर सुहागिन हो वह नारी॥<br>
विधवा धर के ध्यान तुम्हारा। भवसागर से उतरे पारा॥17॥<br><br>

जयति जयति जय संकट हरणी। विघ्न विनाशन मंगल करनी॥<br>
हम पर संकट है अति भारी। वेगि खबर लो मात हमारी॥18॥<br><br>

निशिदिन ध्यान तुम्हारो ध्याता। देह भक्ति वर हम को माता॥<br>
यह चालीसा जो नित गावे। सो भवसागर से तर जावे॥19॥
               
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