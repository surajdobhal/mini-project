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
            <h1 class="text-center display-4 pt-5 pb-3">HANUMAN CHALISA<br>(हनुमान चालीसा)</h1>
            
            <div class="mb-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2">
                हिंदू धर्म में, हनुमान राम के एक भक्त हैं। हनुमान भारतीय महाकाव्य रामायण के केंद्रीय पात्रों में से एक है। वह एक ब्रह्मचारी (जीवन भर ब्रह्मचारी) और चिरंजीवी हैं। उनका उल्लेख कई अन्य ग्रंथों, जैसे महाभारत और विभिन्न पुराणों में भी किया गया है। हनुमान अंजनी और केसरी के पुत्र हैं और पवन-देवता पवन के पुत्र भी हैं, जिन्होंने कई कहानियों के अनुसार, अपने अवतार में भूमिका निभाई है।

            </div>
        
            <div >
                <img src="image/hanumanji.jpg" alt="" class="mx-auto d-block img-fluid" width="350" height="200">
            </div>
        <div class="pr-lg-5 pr-md-5">
            <a href="chalisa pdf/श्री हनुमान चालीसा.pdf" class="btn btn-info float-right  py-2 px-4 my-5 mr-lg-5  download" role="button">
              <i class="fa fa-download text-light pr-3"></i>Download PDF</a>
            <br><br><br><br><br>
            <div class="text-center pb-4 container aarti"><br><br>
              <h1 class="text-lg-center text-md-center text-sm-left text-xs-left text-muted ">
               श्री हनुमान चालीसा</h1><br><br>


॥॥दोहा॥॥<br><br>

श्री गुरु चरण सरोज रज, निज मन मुकुर सुधार |<br>
बरनौ रघुवर बिमल जसु , जो दायक फल चारि |<br><br>

बुद्धिहीन तनु जानि के , सुमिरौ पवन कुमार |<br>
बल बुद्धि विद्या देहु मोहि हरहु कलेश विकार ||<br><br>


॥चालीसा॥<br><br>

जय हनुमान ज्ञान गुन सागर, जय कपीस तिंहु लोक उजागर |<br>
रामदूत अतुलित बल धामा अंजनि पुत्र पवन सुत नामा ||2||<br><br>

महाबीर बिक्रम बजरंगी कुमति निवार सुमति के संगी |<br>
कंचन बरन बिराज सुबेसा, कान्हन कुण्डल कुंचित केसा ||4|<br><br>


हाथ ब्रज औ ध्वजा विराजे कान्धे मूंज जनेऊ साजे |<br>
शंकर सुवन केसरी नन्दन तेज प्रताप महा जग बन्दन ||6|<br><br>

विद्यावान गुनी अति चातुर राम काज करिबे को आतुर |<br>
प्रभु चरित्र सुनिबे को रसिया रामलखन सीता मन बसिया ||8||<br><br>

सूक्ष्म रूप धरि सियंहि दिखावा बिकट रूप धरि लंक जरावा |<br>
भीम रूप धरि असुर संहारे रामचन्द्र के काज सवारे ||10||<br><br>

लाये सजीवन लखन जियाये श्री रघुबीर हरषि उर लाये |<br>
रघुपति कीन्हि बहुत बड़ाई तुम मम प्रिय भरत सम भाई ||12||<br><br>

सहस बदन तुम्हरो जस गावें अस कहि श्रीपति कण्ठ लगावें |<br>
सनकादिक ब्रह्मादि मुनीसा नारद सारद सहित अहीसा ||14||<br><br>

जम कुबेर दिगपाल कहाँ ते कबि कोबिद कहि सके कहाँ ते |<br>
तुम उपकार सुग्रीवहिं कीन्हा राम मिलाय राज पद दीन्हा ||16||<br><br>


तुम्हरो मन्त्र विभीषन माना लंकेश्वर भये सब जग जाना |<br>
जुग सहस्र जोजन पर भानु लील्यो ताहि मधुर फल जानु ||18|<br><br>

प्रभु मुद्रिका मेलि मुख मांहि जलधि लाँघ गये अचरज नाहिं |<br>
दुर्गम काज जगत के जेते सुगम अनुग्रह तुम्हरे तेते ||20||<br><br>

राम दुवारे तुम रखवारे होत न आज्ञा बिनु पैसारे |<br>
सब सुख लहे तुम्हारी सरना तुम रक्षक काहें को डरना ||22||<br><br>

आपन तेज सम्हारो आपे तीनों लोक हाँक ते काँपे |<br>
भूत पिशाच निकट नहीं आवें महाबीर जब नाम सुनावें ||24||<br><br>

नासे रोग हरे सब पीरा जपत निरंतर हनुमत बीरा |<br>
संकट ते हनुमान छुड़ावें मन क्रम बचन ध्यान जो लावें ||26||<br><br>

सब पर राम तपस्वी राजा तिनके काज सकल तुम साजा |<br>
और मनोरथ जो कोई लावे सोई अमित जीवन फल पावे ||28||<br><br>


चारों जुग परताप तुम्हारा है परसिद्ध जगत उजियारा |<br>
साधु संत के तुम रखवारे। असुर निकंदन राम दुलारे ||30||<br><br>

अष्ट सिद्धि नौ निधि के दाता। अस बर दीन्ह जानकी माता<br>
राम रसायन तुम्हरे पासा सदा रहो रघुपति के दासा ||32||<br><br>

तुम्हरे भजन राम को पावें जनम जनम के दुख बिसरावें |<br>
अन्त काल रघुबर पुर जाई जहाँ जन्म हरि भक्त कहाई ||34||<br><br>

और देवता चित्त न धरई हनुमत सेई सर्व सुख करई |<br>
संकट कटे मिटे सब पीरा जपत निरन्तर हनुमत बलबीरा ||36||<br><br>

जय जय जय हनुमान गोसाईं कृपा करो गुरुदेव की नाईं |<br>
जो सत बार पाठ कर कोई छूटई बन्दि महासुख होई ||38||<br><br>

जो यह पाठ पढे हनुमान चालीसा होय सिद्धि साखी गौरीसा |<br>
तुलसीदास सदा हरि चेरा कीजै नाथ हृदय मँह डेरा ||40||<br><br>


॥॥दोहा॥॥<br><br>

पवन तनय संकट हरन मंगल मूरति रूप | <br>
राम लखन सीता सहित हृदय बसहु सुर भूप ||


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