<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" media="all" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
  
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    include('connection.php');
   try{
    $qury="select * from pandit_registration where Email=?";
     $stt=$conn->prepare($qury);
     $stt->execute([$_SESSION['email']]);
    $result=$stt->fetch(PDO :: FETCH_ASSOC);
 
   }
   catch(PDOException $e)
   {
       echo "Error : " .$e->grtmessage();
   }
?>
<div class="clearfix">    
<div class="modal-fade ">
<div class="modal-dialog  shadow modal-lg "> 
<div class="modal-content bg-light ">
<div class="modal-heading ">
<div class="row">
<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
<img  src="upload/<?php echo $result['Image'] ;?>" class="img-fluid rounded" width="400" height="300"> 
</div>
<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 py-3 px-2  text-muted">
<h4 class="pl-3">Name :<span class="pl-3"><?php echo $result['Salutation']. " " .$result['F_name']. " ".$result['L_name'] ;?></span></h4>
<h5 class="pl-3">E-Mail : <span class="pl-2"><?php echo $result['Email'];?></span></h5>
<h5 class="pl-3">Mobile No. : <span class="pl-2"><?php echo $result['Mobile'];?></span></h5>
<h5 class="pl-3">Age : <span class="pl-2"><?php echo $result['Age'];?></span></h5>
<h5 class="pl-3">Experience : <span class="pl-2"><?php echo $result['Experience'];?></span></h5>
<h5 class="pl-3">City : <span class="pl-2"><?php echo $result['City'];?></span></h5>
<h5 class="pl-3">Address : <span class="pl-2"><?php echo $result['Address'];?></span></h5>
<h5 class="pl-3">About : <span class="pl-2"><?php echo $result['About'];?></span></h5>
</div>
</div>
</div>
</div>
</div>
</div>   
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>