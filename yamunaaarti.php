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
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
       <img src="image/logo.png" width="150" height="100" class="d-inline-block align-top m-0" alt="logo">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav justify-content-lg-end justify-content-md-start justify-content-sm-start " id="navbarNavDropdown" ;>
        <ul class="  navbar-nav pl-5 mx-1 " style="font-size: 1.5rem">
          <li class="nav-item  ">
            <a class="nav-link fl" href="home.php">Home </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="pandit.php">Book Pandit </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="aarti.php">Aarti <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="chalisa.php">Chalisa</a>
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
            <h1 class="text-center display-4 pt-4 pb-3">YAMUNA MATA<br>(यमुना माता)</h1>
            
            <div class="mb-5  mx-lg-5 mx-md-5 mx-sm-3 mx-xs-2">
                यमुना, जिसे जुम्ना या जमना के नाम से भी जाना जाता है, गंगा की दूसरी सबसे बड़ी सहायक नदी और भारत की सबसे लंबी सहायक नदी है। उत्तराखंड में लोअर हिमालय के बांदरपोख चोटियों के दक्षिण-पश्चिमी ढलान पर 6,387 मीटर (20,955 फीट) की ऊंचाई पर यमुनोत्री ग्लेशियर से निकलते हुए, यह 1,376 किलोमीटर (855 मील) की कुल लंबाई की यात्रा करती है और इसमें 366,223 वर्ग किलोमीटर का ड्रेनेज सिस्टम है। (141,399 वर्ग मील), संपूर्ण गंगा बेसिन का 40.2%। यह त्रिवेणी संगम, प्रयागराज में गंगा के साथ विलीन हो जाता है, जो प्रत्येक 12 वर्षों में आयोजित होने वाला एक हिंदू त्योहार कुंभ मेला है।<br>

यह कई राज्यों को पार करता है: हरियाणा और उत्तर प्रदेश, उत्तराखंड और बाद में दिल्ली से गुजरते हुए, और टोंस, चंबल सहित रास्ते में अपनी सहायक नदियों से मिलते हुए, इसकी सबसे लंबी सहायक नदी है जिसका अपना बड़ा बेसिन है, इसके बाद सिंध, बेतवा और केन हैं। उत्तराखंड से, नदी हिमाचल प्रदेश राज्य में बहती है। पांवटा साहिब से गुजरने के बाद, यमुना हरियाणा और उत्तर प्रदेश की सीमा के साथ बहती है और हरियाणा से निकलने के बाद यह तब तक बहती रहती है जब तक यह संगम (या उत्तर प्रदेश) में संगम या प्रयाग में गंगा (गंगा) नदी के साथ विलय नहीं हो जाती। यह भारत और गंगा के मैदान में अपने और गंगा के बीच अत्यधिक उपजाऊ जलोढ़ यमुना-गंगा दोआब क्षेत्र बनाने में मदद करता है।
            </div>
        
            <div >
                <img src="image/yamuna.jpg" alt="" class="mx-auto d-block img-fluid" width="300" height="200">
            </div>
        <div class="pr-lg-5 pr-md-5">
            <a href="aarti pdf/श्री यमुना माता जी की आरती.pdf" class="btn btn-info float-right  py-2 px-4 my-5 mr-lg-5  download" role="button">
              <i class="fa fa-download text-light pr-3"></i>Download PDF</a>
            <br><br><br><br><br>
            <div class="text-center pb-4 container aarti"><br><br>
              <h1 class="text-lg-center text-md-center text-sm-left text-xs-left text-muted ">
                श्री यमुना माता जी की आरती</h1><br><br>


ॐ जय यमुना माता, हरि जय यमुना माता ।<br>
जो नहावे फल पावे सुख दुःख की दाता ॥<br>
॥ ॐ जय यमुना माता... ॥<br><br>

पावन श्रीयमुना जल अगम बहै धारा, ।<br>
जो जन शरण में आया कर दिया निस्तारा ॥<br>
॥ ॐ जय यमुना माता... ॥<br><br>

जो जन प्रातः ही उठकर नित्य स्नान करे, ।<br>
यम के त्रास न पावे जो नित्य ध्यान करे ॥<br>
॥ ॐ जय यमुना माता... ॥<br><br>


कलिकाल में महिमा तुम्हारी अटल रही, ।<br>
तुम्हारा बड़ा महातम चारो वेद कही ॥<br>
॥ ॐ जय यमुना माता... ॥<br><br>

आन तुम्हारे माता प्रभु अवतार लियो, ।<br>
नित्य निर्मल जल पीकर कंस को मार दियो ॥<br>
॥ ॐ जय यमुना माता... ॥<br><br>

नमो मात भय हरणी शुभ मंगल करणी ।<br>
मन बेचैन भया हैं तुम बिन वैतरणी ॥<br>
॥ ॐ जय यमुना माताा... ॥


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