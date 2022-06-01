<?php
include 'connection.php';
session_start();

   
  ?>

    
<!DOCTYPE html>
<html>
  <style>
    
    body{
  background-image: url(images/c06z8cfc1zp6-background.jpg);
}
    a{
  color: white;
  font-family: var(--body-font);
  text-decoration: none;
 
  
}
.light-mode a {
  color: black;
 
}
h3 ,h1 {
    text-align: center;
    color: white;
  }

  .light-mode h3 {
    color: black;

  }
  .light-mode h1 {
    color: black;

  }
p{
  text-align: center;
  color: white;
}

  </style>
  <meta charset="UTF-8">
  
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="images/logo69.png">

  </head>
<body>
  <!-- videoja ne sfond -->
  <div class="video-bg">
    <video w idth="320" height="240" autoplay loop muted>
     <source src="" type="video/mp4">
   Your browser does not support the video tag.
   </video>
   </div>
<!-- dark mode -->
  <div class="dark-light">
    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
     <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" /></svg>
   </div>
   <!-- transparent menu -->
   <div class="app">
    <div class="header">
     <div class="menu-circle"></div>
     <div class="header-menu">
   
      
     </div>
     
     <!-- searchbar -->
     <div class="search-bar">
      <input type="text" placeholder="Search" id="myInput" onkeyup="myFunction()">
     </div>


<!-- profile pic & notification -->
     <div class="header-profile">
     
  
       <path d="M448.773 235.551A135.893 135.893 0 00451 211c0-74.443-60.557-135-135-135-47.52 0-91.567 25.313-115.766 65.537-32.666-10.59-66.182-6.049-93.794 12.979-27.612 19.013-44.092 49.116-45.425 82.031C24.716 253.788 0 290.497 0 331c0 7.031 1.703 13.887 3.006 20.537l.015.015C12.719 400.492 56.034 436 106 436h300c57.891 0 106-47.109 106-105 0-40.942-25.053-77.798-63.227-95.449z" />
<!--  
       <a href="login.html"><img class="profile-img" src="images/logo69.png" alt=""  ></a> -->
       <div class="content-section-title"> <a href="login.php" class="content-section-title">ADMIN</a> </div>
       
     </div>
    </div>
    


<!-- content -->

<?php

$sql = "select * from players";
       $result= mysqli_query($conn,$sql);
       $resultCheck= mysqli_num_rows($result);


       if($resultCheck>0){
         while($row= mysqli_fetch_assoc($result)){
           // $row= mysqli_fetch_assoc($result);
           

            ?>
         <p>Name <?php echo $row["name"]; ?></p>
         <p>Surname <?php echo $row["surname"]; ?></p>
         <p>Team <?php echo $row["team"]; ?></p>
         <p>Nationality <?php echo $row["nationality"]; ?></p>
         <p><?php echo $row["info"]; ?></p>
<br><br>
   <?php      
   
        }
        }
        ?>



<a  href="admin.php">Go back</a>


<!-- script -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="./script.js"></script>
   

      
</body>
</html>




        