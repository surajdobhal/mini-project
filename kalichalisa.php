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
            <h1 class="text-center display-4 pt-5 pb-3">KALI MATA<br>(काली माता)</h1>
            
            <div class="mb-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2">
                काली माता, जिसे कालिका के नाम से भी जाना जाता है, एक हिंदू देवी हैं। काली दस महाविद्याओं में प्रमुख हैं, जो एक सूची है जो सक्त और बौद्ध देवी-देवताओं को जोड़ती है।
काली की सबसे पहली उपस्थिति बुरी ताकतों को नष्ट करने की है। वह शक्ति का सबसे शक्तिशाली रूप है, और तांत्रिक सेविज़्म की एक श्रेणी, कुलग्राम की चार उपश्रेणियों में से एक देवी है।

            </div>
        
            <div >
                <img src="image/kali.jpg" alt="" class="mx-auto d-block img-fluid" width="350" height="200">
            </div>
        <div class="pr-lg-5 pr-md-5">
            <a href="chalisa pdf/श्री काली चालीसा.pdf" class="btn btn-info float-right  py-2 px-4 my-5 mr-lg-5  download" role="button">
              <i class="fa fa-download text-light pr-3"></i>Download PDF</a>
            <br><br><br><br><br>
            <div class="text-center pb-4 container aarti"><br><br>
               <h1 class="text-lg-center text-md-center text-sm-left text-xs-left text-muted ">
श्री काली माता चालीसा</h1><br><br>

॥॥दोहा॥॥<br><br>

जयकाली कलिमलहरण, महिमा अगम अपार<br>
महिष मर्दिनी कालिका, देहु अभय अपार ॥<br><br>

॥चालीसा॥<br><br>

अरि मद मान मिटावन हारी । मुण्डमाल गल सोहत प्यारी ॥<br>
अष्टभुजी सुखदायक माता । दुष्टदलन जग में विख्याता ॥1॥<br><br>

भाल विशाल मुकुट छवि छाजै । कर में शीश शत्रु का साजै ॥<br>
दूजे हाथ लिए मधु प्याला । हाथ तीसरे सोहत भाला ॥2॥<br><br>

चौथे खप्पर खड्ग कर पांचे । छठे त्रिशूल शत्रु बल जांचे ॥<br>
सप्तम करदमकत असि प्यारी । शोभा अद्भुत मात तुम्हारी ॥3॥<br><br>

अष्टम कर भक्तन वर दाता । जग मनहरण रूप ये माता ॥<br>
भक्तन में अनुरक्त भवानी । निशदिन रटें ॠषी-मुनि ज्ञानी ॥4॥<br><br>

महशक्ति अति प्रबल पुनीता । तू ही काली तू ही सीता ॥<br>
पतित तारिणी हे जग पालक । कल्याणी पापी कुल घालक ॥5॥<br><br>

शेष सुरेश न पावत पारा । गौरी रूप धर्यो इक बारा ॥<br>
तुम समान दाता नहिं दूजा । विधिवत करें भक्तजन पूजा ॥6॥<br><br>

रूप भयंकर जब तुम धारा । दुष्टदलन कीन्हेहु संहारा ॥<br>
नाम अनेकन मात तुम्हारे । भक्तजनों के संकट टारे ॥7॥<br><br>

कलि के कष्ट कलेशन हरनी । भव भय मोचन मंगल करनी ॥<br>
महिमा अगम वेद यश गावैं । नारद शारद पार न पावैं ॥8॥<br><br>

भू पर भार बढ्यौ जब भारी । तब तब तुम प्रकटीं महतारी ॥<br>
आदि अनादि अभय वरदाता । विश्वविदित भव संकट त्राता ॥9॥<br><br>

कुसमय नाम तुम्हारौ लीन्हा । उसको सदा अभय वर दीन्हा ॥<br>
ध्यान धरें श्रुति शेष सुरेशा । काल रूप लखि तुमरो भेषा ॥10॥<br><br>

कलुआ भैंरों संग तुम्हारे । अरि हित रूप भयानक धारे ॥<br>
सेवक लांगुर रहत अगारी । चौसठ जोगन आज्ञाकारी ॥11॥<br><br>

त्रेता में रघुवर हित आई । दशकंधर की सैन नसाई ॥<br>
खेला रण का खेल निराला । भरा मांस-मज्जा से प्याला ॥12॥<br><br>

रौद्र रूप लखि दानव भागे । कियौ गवन भवन निज त्यागे ॥<br>
तब ऐसौ तामस चढ़ आयो । स्वजन विजन को भेद भुलायो ॥13॥<br><br>

ये बालक लखि शंकर आए । राह रोक चरनन में धाए ॥<br>
तब मुख जीभ निकर जो आई । यही रूप प्रचलित है माई ॥14।<br><br>

बाढ्यो महिषासुर मद भारी । पीड़ित किए सकल नर-नारी ॥<br>
करूण पुकार सुनी भक्तन की । पीर मिटावन हित जन-जन की ॥15॥<br><br>

तब प्रगटी निज सैन समेता । नाम पड़ा मां महिष विजेता ॥<br>
शुंभ निशुंभ हने छन माहीं । तुम सम जग दूसर कोउ नाहीं ॥16॥<br><br>

मान मथनहारी खल दल के । सदा सहायक भक्त विकल के ॥<br>
दीन विहीन करैं नित सेवा । पावैं मनवांछित फल मेवा ॥17॥<br><br>

संकट में जो सुमिरन करहीं । उनके कष्ट मातु तुम हरहीं ॥<br>
प्रेम सहित जो कीरति गावैं । भव बन्धन सों मुक्ती पावैं ॥18॥<br><br>

काली चालीसा जो पढ़हीं । स्वर्गलोक बिनु बंधन चढ़हीं ॥<br>
दया दृष्टि हेरौ जगदम्बा । केहि कारण मां कियौ विलम्बा ॥19॥<br><br>

करहु मातु भक्तन रखवाली । जयति जयति काली कंकाली ॥<br>
सेवक दीन अनाथ अनारी । भक्तिभाव युति शरण तुम्हारी ॥20॥<br><br>

॥॥दोहा॥॥<br><br>

प्रेम सहित जो करे, काली चालीसा पाठ ।<br>
तिनकी पूरन कामना, होय सकल जग ठाठ ॥


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