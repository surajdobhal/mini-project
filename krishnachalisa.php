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
            <h1 class="text-center display-4 pt-5 pb-3">SHRI KRISHNA<br>(श्री कृष्ण)</h1>
            
            <div class="mb-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2">
                श्री बांके बिहारी मंदिर उत्तर प्रदेश के मथुरा जिले के पवित्र शहर वृंदावन में भगवान कृष्ण को समर्पित एक हिंदू मंदिर है। यह श्री राधा वल्लभ मंदिर के पास स्थित है। बांके बिहारी जी मूल रूप से निधिवन में पूजे जाते थे। बांके का अर्थ है "तीन स्थानों पर झुकना" और बिहारी का अर्थ है "भोग" ।

भगवान कृष्ण की छवि त्रिभंग मुद्रा में है। स्वामी हरिदास ने मूल रूप से कुंज-बिहारी ("वृंदावन के पेड़ों (कुंज) में आनंद लेने वाले") के नाम से इस भक्ति छवि की पूजा की।


त्रिभुंगा रुख में गोवर्धन पर्वत को निहारते हुए कृष्ण
'बंके' का अर्थ है 'तुला', और 'बिहारी' या 'विहारी' का अर्थ है 'आनंद लेने वाला'। इस प्रकार, तीन स्थानों पर झुके हुए कृष्ण को "बनके बिहारी" नाम मिला।

            </div>
        
            <div >
                <img src="image/krishna.jpg" alt="" class="mx-auto d-block img-fluid" width="300" height="200">
            </div>
        <div class="pr-lg-5 pr-md-5">
            <a href="chalisa pdf/श्री कृष्ण चालीसा.pdf" class="btn btn-info float-right  py-2 px-4 my-5 mr-lg-5  download" role="button">
              <i class="fa fa-download text-light pr-3"></i>Download PDF</a>
            <br><br><br><br><br>
            <div class="text-center pb-4 container aarti"><br><br>
              <h1 class="text-lg-center text-md-center text-sm-left text-xs-left text-muted ">
श्री कृष्ण चालीसा</h1><br><br>


बंशी शोभित कर मधुर, नील जलद तन श्याम।<br>
अरुण अधर जनु बिम्बफल, नयन कमल अभिराम॥<br>
पूर्ण इन्द्र, अरविन्द मुख, पीताम्बर शुभ साज।<br>
जय मनमोहन मदन छवि, कृष्णचन्द्र महाराज॥<br><br>

जय यदुनंदन जय जगवंदन।जय वसुदेव देवकी नन्दन॥<br>
जय यशुदा सुत नन्द दुलारे। जय प्रभु भक्तन के दृग तारे॥<br>
जय नटनागर, नाग नथइया॥ कृष्ण कन्हइया धेनु चरइया॥<br>
पुनि नख पर प्रभु गिरिवर धारो। आओ दीनन कष्ट निवारो॥<br><br>

वंशी मधुर अधर धरि टेरौ। होवे पूर्ण विनय यह मेरौ॥<br>
आओ हरि पुनि माखन चाखो। आज लाज भारत की राखो॥<br>
गोल कपोल, चिबुक अरुणारे। मृदु मुस्कान मोहिनी डारे॥<br>
राजित राजिव नयन विशाला। मोर मुकुट वैजन्तीमाला॥<br><br>

कुंडल श्रवण, पीत पट आछे। कटि किंकिणी काछनी काछे॥<br>
नील जलज सुन्दर तनु सोहे। छबि लखि, सुर नर मुनिमन मोहे॥<br>
मस्तक तिलक, अलक घुँघराले। आओ कृष्ण बांसुरी वाले॥<br>
करि पय पान, पूतनहि तार्यो। अका बका कागासुर मार्यो॥<br><br>

मधुवन जलत अगिन जब ज्वाला। भै शीतल लखतहिं नंदलाला॥<br>
सुरपति जब ब्रज चढ़्यो रिसाई। मूसर धार वारि वर्षाई॥<br>
लगत लगत व्रज चहन बहायो। गोवर्धन नख धारि बचायो॥<br>
लखि यसुदा मन भ्रम अधिकाई। मुख मंह चौदह भुवन दिखाई॥<br><br>

दुष्ट कंस अति उधम मचायो॥ कोटि कमल जब फूल मंगायो॥<br>
नाथि कालियहिं तब तुम लीन्हें। चरण चिह्न दै निर्भय कीन्हें॥<br>
करि गोपिन संग रास विलासा। सबकी पूरण करी अभिलाषा॥<br>
केतिक महा असुर संहार्यो। कंसहि केस पकड़ि दै मार्यो॥<br><br>

मातपिता की बन्दि छुड़ाई ।उग्रसेन कहँ राज दिलाई॥<br>
महि से मृतक छहों सुत लायो। मातु देवकी शोक मिटायो॥<br>
भौमासुर मुर दैत्य संहारी। लाये षट दश सहसकुमारी॥<br>
दै भीमहिं तृण चीर सहारा। जरासिंधु राक्षस कहँ मारा॥<br><br>

असुर बकासुर आदिक मार्यो। भक्तन के तब कष्ट निवार्यो॥<br>
दीन सुदामा के दुःख टार्यो। तंदुल तीन मूंठ मुख डार्यो॥<br>
प्रेम के साग विदुर घर माँगे।दर्योधन के मेवा त्यागे॥<br>
लखी प्रेम की महिमा भारी।ऐसे श्याम दीन हितकारी॥<br><br>

भारत के पारथ रथ हाँके।लिये चक्र कर नहिं बल थाके॥<br>
निज गीता के ज्ञान सुनाए।भक्तन हृदय सुधा वर्षाए॥<br>
मीरा थी ऐसी मतवाली।विष पी गई बजाकर ताली॥<br>
राना भेजा साँप पिटारी।शालीग्राम बने बनवारी॥<br><br>

निज माया तुम विधिहिं दिखायो।उर ते संशय सकल मिटायो॥<br>
तब शत निन्दा करि तत्काला।जीवन मुक्त भयो शिशुपाला॥<br>
जबहिं द्रौपदी टेर लगाई।दीनानाथ लाज अब जाई॥<br>
तुरतहि वसन बने नंदलाला।बढ़े चीर भै अरि मुँह काला॥<br><br>

अस अनाथ के नाथ कन्हइया। डूबत भंवर बचावइ नइया॥<br>
सुन्दरदास आ उर धारी।दया दृष्टि कीजै बनवारी॥<br>
नाथ सकल मम कुमति निवारो।क्षमहु बेगि अपराध हमारो॥<br>
खोलो पट अब दर्शन दीजै।बोलो कृष्ण कन्हइया की जै॥<br><br>

॥॥दोहा॥॥<br><br>

यह चालीसा कृष्ण का, पाठ करै उर धारि।<br>
अष्ट सिद्धि नवनिधि फल, लहै पदारथ चारि॥
               

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