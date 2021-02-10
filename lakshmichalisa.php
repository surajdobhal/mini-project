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
            <h1 class="text-center display-4 pt-5 pb-3">LAKSHMI MATA<br>(लक्ष्मी माता)</h1>
            
            <div class="mb-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2">
                लक्ष्मी, वह देवी है जो अपने लक्ष्य की ओर जाती है, इसलिए उसका नाम लक्ष्मी है। मानव जाति के लिए, 8 प्रकार के लक्ष्य आवश्यक हैं - आध्यात्मिक ज्ञान, भोजन, ज्ञान, संसाधन, संतान, बहुतायत, धैर्य और सफलता, इसलिए 8 या अष्ट लक्ष्मी हैं - आधि लक्ष्मी, धान्य लक्ष्मी, विद्या लक्ष्मी, धन लक्ष्मी, संताणा लक्ष्मी। गाजा लक्ष्मी, धीरा लक्ष्मी और विजया लक्ष्मी। ऋग्वेद के सबसे पहले सूक्त में उल्लेख किया गया है। श्री, लक्ष्मी के लिए एक सम्मानजनक शब्द, पृथ्वी देवी की भौतिक दुनिया का प्रतिनिधित्व करता है, जिसे देवी माता के रूप में संदर्भित किया जाता है, और उन्हें भुवी देवी के रूप में उनकी जुड़वां पहचान से जाना जाता है, और श्री देवी (वह इन दोनों के साथ एक और रूप में हैं) जिसे नीला देवी कहा जाता है)। वह विष्णु की पत्नी हैं, जो हिंदू धर्म के प्रमुख देवताओं में से एक हैं और वैष्णववाद परंपरा में सर्वोच्च हैं।

            </div>
        
            <div >
                <img src="image/lakshmi.jpg" alt="" class="mx-auto d-block img-fluid" width="350" height="200">
            </div>
        <div class="pr-lg-5 pr-md-5">
            <a href="chalisa pdf/श्री लक्ष्मी चालीसा.pdf" class="btn btn-info float-right  py-2 px-4 my-5 mr-lg-5  download" role="button">
              <i class="fa fa-download text-light pr-3"></i>Download PDF</a>
            <br><br><br><br><br>
            <div class="text-center pb-4 container aarti"><br><br>
              <h1 class="text-lg-center text-md-center text-sm-left text-xs-left text-muted ">
               श्री लक्ष्मी चालीसा</h1><br><br>

॥॥दोहा॥॥<br><br>

मातु लक्ष्मी करि कृपा, करो हृदय में वास।<br>
मनोकामना सिद्घ करि, परुवहु मेरी आस॥<br><br>

॥चालीसा॥<br><br>


सिन्धु सुता मैं सुमिरौ तोही।<br>
ज्ञान बुद्घि विघा दो मोही ॥<br><br>

तुम समान नहिं कोई उपकारी। सब विधि पुरवहु आस हमारी॥<br>
जय जय जगत जननि जगदम्बा। सबकी तुम ही हो अवलम्बा॥1॥<br><br>

तुम ही हो सब घट घट वासी। विनती यही हमारी खासी॥<br>
जगजननी जय सिन्धु कुमारी। दीनन की तुम हो हितकारी॥2॥<br><br>

विनवौं नित्य तुमहिं महारानी। कृपा करौ जग जननि भवानी॥<br>
केहि विधि स्तुति करौं तिहारी। सुधि लीजै अपराध बिसारी॥3॥<br><br>

कृपा दृष्टि चितववो मम ओरी। जगजननी विनती सुन मोरी॥<br>
ज्ञान बुद्घि जय सुख की दाता। संकट हरो हमारी माता॥4॥<br><br>

क्षीरसिन्धु जब विष्णु मथायो। चौदह रत्न सिन्धु में पायो॥<br>
चौदह रत्न में तुम सुखरासी। सेवा कियो प्रभु बनि दासी॥5॥<br><br>

जब जब जन्म जहां प्रभु लीन्हा। रुप बदल तहं सेवा कीन्हा॥<br>
स्वयं विष्णु जब नर तनु धारा। लीन्हेउ अवधपुरी अवतारा॥6॥<br><br>

तब तुम प्रगट जनकपुर माहीं। सेवा कियो हृदय पुलकाहीं॥<br>
अपनाया तोहि अन्तर्यामी। विश्व विदित त्रिभुवन की स्वामी॥7॥<br><br>

तुम सम प्रबल शक्ति नहीं आनी। कहं लौ महिमा कहौं बखानी॥<br>
मन क्रम वचन करै सेवकाई। मन इच्छित वांछित फल पाई॥8॥<br><br>

तजि छल कपट और चतुराई। पूजहिं विविध भांति मनलाई॥<br>
और हाल मैं कहौं बुझाई। जो यह पाठ करै मन लाई॥9॥<br><br>

ताको कोई कष्ट नोई। मन इच्छित पावै फल सोई॥<br>
त्राहि त्राहि जय दुःख निवारिणि। त्रिविध ताप भव बंधन हारिणी॥10॥<br><br>

जो चालीसा पढ़ै पढ़ावै। ध्यान लगाकर सुनै सुनावै॥<br>
ताकौ कोई न रोग सतावै। पुत्र आदि धन सम्पत्ति पावै॥11॥<br><br>

पुत्रहीन अरु संपति हीना। अन्ध बधिर कोढ़ी अति दीना॥<br>
विप्र बोलाय कै पाठ करावै। शंका दिल में कभी न लावै॥12॥<br><br>

पाठ करावै दिन चालीसा। ता पर कृपा करैं गौरीसा॥<br>
सुख सम्पत्ति बहुत सी पावै। कमी नहीं काहू की आवै॥13॥<br><br>

बारह मास करै जो पूजा। तेहि सम धन्य और नहिं दूजा॥<br>
प्रतिदिन पाठ करै मन माही। उन सम कोइ जग में कहुं नाहीं॥14॥<br><br>

बहुविधि क्या मैं करौं बड़ाई। लेय परीक्षा ध्यान लगाई॥<br>
करि विश्वास करै व्रत नेमा। होय सिद्घ उपजै उर प्रेमा॥15॥<br><br>

जय जय जय लक्ष्मी भवानी। सब में व्यापित हो गुण खानी॥<br>
तुम्हरो तेज प्रबल जग माहीं। तुम सम कोउ दयालु कहुं नाहिं॥16॥<br><br>

मोहि अनाथ की सुधि अब लीजै। संकट काटि भक्ति मोहि दीजै॥<br>
भूल चूक करि क्षमा हमारी। दर्शन दजै दशा निहारी॥17॥<br><br>

बिन दर्शन व्याकुल अधिकारी। तुमहि अछत दुःख सहते भारी॥<br>
नहिं मोहिं ज्ञान बुद्घि है तन में। सब जानत हो अपने मन में॥18॥<br><br>

रुप चतुर्भुज करके धारण। कष्ट मोर अब करहु निवारण॥<br>
केहि प्रकार मैं करौं बड़ाई। ज्ञान बुद्घि मोहि नहिं अधिकाई॥19॥<br><br>



॥॥दोहा॥॥<br><br>

त्राहि त्राहि दुख हारिणी, हरो वेगि सब त्रास।<br>
जयति जयति जय लक्ष्मी, करो शत्रु को नाश॥<br>
रामदास धरि ध्यान नित, विनय करत कर जोर।<br>
मातु लक्ष्मी दास पर, करहु दया की कोर॥



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