<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" media="all" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
  

    <title>Document</title>
    <style>
    .delete{
        font-size:20px;
    }
    </style>
</head>
<body>
<?php
    session_start();
    include('connection.php');
    
    try
    {
        $email=$_SESSION['email'];
        $sqll="delete from pandit_registration where Email=?";
        $stm=$conn->prepare($sqll);
      if($stm->execute([$email]))   
      {
        echo '<script> alert("YOUR ACCOUNT DELETED")'; 
        unset($_SESSION['pfname']);
        unset($_SESSION['plname']);
        header('location: home.php');    
    }
      
    

    }
     catch(PDOException $e)
     {
        echo "Error : " .$e->getmessage();
     }
    
    ?>


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>