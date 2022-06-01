
<?php
include 'connection.php';
require_once("playerclass.php");


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">  
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="createplayerstyle.css">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
   
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="login.css">

  <style>

  body{
    background-image: url(images/abstract-pink-purple-blue-diagonal-overlay-layer-background-free-vector.jpg);
}
label{color:white;}
    .light-mode label{color:black;}

  .see{
    text-align:center;
  }

  a {
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

  p {
    text-align: center;
    color: white;
  }
  select{

width: 18%;
padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  box-shadow: 0 0 0 2px rgb(134 140 160 / 2%);
  border-radius: 10px;
  font-family: var(--body-font);
 

  font-family: var(--body-font);


}
input , textarea{
  
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  box-shadow: 0 0 0 2px rgb(134 140 160 / 2%);
  border-radius: 4px;
  font-family: var(--body-font);
}


</style>

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
     <div class="header-menu">
        <a class="menu-link " href="admin.php">Home</a>
        <a class="menu-link is-active" href="createPlayer.php">Add</a>
       
      </div>
      
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

  


<!-- take the inputs -->

<h3>Create a new Player</h3>
<form class="" action="createPlayer.php" method="post">
<div class="container5">
 
   
 <label for="text">Name</label>
 <br>
 <input type="text" name="name" placeholder="Enter Name" >
 <br> <br>
    <label for="">Surname</label>
    <br>
    <input type="text" name="surname"  placeholder="Enter Surname">
    <br> <br>
      <label for="">Team</label>
      <br>
      <input type="text" name="team"  placeholder="Enter Team" >
      <br> <br>
  <label for="">Kit Number</label>
  <br>
  <input type="text" name="kitnumber" placeholder="Enter Kit Number">
  <br> <br>
     <label for="">Nationality</label>
     <br>
     <select id="nationality" name="nationality"  >
  <option value="">Select Nationality</option>
  <option value="afghan">Afghan</option>
  <option value="albanian">Albanian</option>
  <option value="algerian">Algerian</option>
  <option value="american">American</option>
  <option value="andorran">Andorran</option>
  <option value="angolan">Angolan</option>
  <option value="antiguans">Antiguans</option>
  <option value="argentinean">Argentinean</option>
  <option value="armenian">Armenian</option>
  <option value="australian">Australian</option>
  <option value="austrian">Austrian</option>
  <option value="azerbaijani">Azerbaijani</option>
  <option value="bahamian">Bahamian</option>
  <option value="bahraini">Bahraini</option>
  <option value="bangladeshi">Bangladeshi</option>
  <option value="barbadian">Barbadian</option>
  <option value="barbudans">Barbudans</option>
  <option value="batswana">Batswana</option>
  <option value="belarusian">Belarusian</option>
  <option value="belgian">Belgian</option>
  <option value="belizean">Belizean</option>
  <option value="beninese">Beninese</option>
  <option value="bhutanese">Bhutanese</option>
  <option value="bolivian">Bolivian</option>
  <option value="bosnian">Bosnian</option>
  <option value="brazilian">Brazilian</option>
  <option value="british">British</option>
  <option value="bruneian">Bruneian</option>
  <option value="bulgarian">Bulgarian</option>
  <option value="burkinabe">Burkinabe</option>
  <option value="burmese">Burmese</option>
  <option value="burundian">Burundian</option>
  <option value="cambodian">Cambodian</option>
  <option value="cameroonian">Cameroonian</option>
  <option value="canadian">Canadian</option>
  <option value="cape verdean">Cape Verdean</option>
  <option value="central african">Central African</option>
  <option value="chadian">Chadian</option>
  <option value="chilean">Chilean</option>
  <option value="chinese">Chinese</option>
  <option value="colombian">Colombian</option>
  <option value="comoran">Comoran</option>
  <option value="congolese">Congolese</option>
  <option value="costa rican">Costa Rican</option>
  <option value="croatian">Croatian</option>
  <option value="cuban">Cuban</option>
  <option value="cypriot">Cypriot</option>
  <option value="czech">Czech</option>
  <option value="danish">Danish</option>
  <option value="djibouti">Djibouti</option>
  <option value="dominican">Dominican</option>
  <option value="dutch">Dutch</option>
  <option value="east timorese">East Timorese</option>
  <option value="ecuadorean">Ecuadorean</option>
  <option value="egyptian">Egyptian</option>
  <option value="emirian">Emirian</option>
  <option value="equatorial guinean">Equatorial Guinean</option>
  <option value="eritrean">Eritrean</option>
  <option value="estonian">Estonian</option>
  <option value="ethiopian">Ethiopian</option>
  <option value="fijian">Fijian</option>
  <option value="filipino">Filipino</option>
  <option value="finnish">Finnish</option>
  <option value="french">French</option>
  <option value="gabonese">Gabonese</option>
  <option value="gambian">Gambian</option>
  <option value="georgian">Georgian</option>
  <option value="german">German</option>
  <option value="ghanaian">Ghanaian</option>
  <option value="greek">Greek</option>
  <option value="grenadian">Grenadian</option>
  <option value="guatemalan">Guatemalan</option>
  <option value="guinea-bissauan">Guinea-Bissauan</option>
  <option value="guinean">Guinean</option>
  <option value="guyanese">Guyanese</option>
  <option value="haitian">Haitian</option>
  <option value="herzegovinian">Herzegovinian</option>
  <option value="honduran">Honduran</option>
  <option value="hungarian">Hungarian</option>
  <option value="icelander">Icelander</option>
  <option value="indian">Indian</option>
  <option value="indonesian">Indonesian</option>
  <option value="iranian">Iranian</option>
  <option value="iraqi">Iraqi</option>
  <option value="irish">Irish</option>
  <option value="israeli">Israeli</option>
  <option value="italian">Italian</option>
  <option value="ivorian">Ivorian</option>
  <option value="jamaican">Jamaican</option>
  <option value="japanese">Japanese</option>
  <option value="jordanian">Jordanian</option>
  <option value="kazakhstani">Kazakhstani</option>
  <option value="kenyan">Kenyan</option>
  <option value="kittian and nevisian">Kittian and Nevisian</option>
  <option value="kuwaiti">Kuwaiti</option>
  <option value="kyrgyz">Kyrgyz</option>
  <option value="laotian">Laotian</option>
  <option value="latvian">Latvian</option>
  <option value="lebanese">Lebanese</option>
  <option value="liberian">Liberian</option>
  <option value="libyan">Libyan</option>
  <option value="liechtensteiner">Liechtensteiner</option>
  <option value="lithuanian">Lithuanian</option>
  <option value="luxembourger">Luxembourger</option>
  <option value="macedonian">Macedonian</option>
  <option value="malagasy">Malagasy</option>
  <option value="malawian">Malawian</option>
  <option value="malaysian">Malaysian</option>
  <option value="maldivan">Maldivan</option>
  <option value="malian">Malian</option>
  <option value="maltese">Maltese</option>
  <option value="marshallese">Marshallese</option>
  <option value="mauritanian">Mauritanian</option>
  <option value="mauritian">Mauritian</option>
  <option value="mexican">Mexican</option>
  <option value="micronesian">Micronesian</option>
  <option value="moldovan">Moldovan</option>
  <option value="monacan">Monacan</option>
  <option value="mongolian">Mongolian</option>
  <option value="moroccan">Moroccan</option>
  <option value="mosotho">Mosotho</option>
  <option value="motswana">Motswana</option>
  <option value="mozambican">Mozambican</option>
  <option value="namibian">Namibian</option>
  <option value="nauruan">Nauruan</option>
  <option value="nepalese">Nepalese</option>
  <option value="new zealander">New Zealander</option>
  <option value="ni-vanuatu">Ni-Vanuatu</option>
  <option value="nicaraguan">Nicaraguan</option>
  <option value="nigerien">Nigerien</option>
  <option value="north korean">North Korean</option>
  <option value="northern irish">Northern Irish</option>
  <option value="norwegian">Norwegian</option>
  <option value="omani">Omani</option>
  <option value="pakistani">Pakistani</option>
  <option value="palauan">Palauan</option>
  <option value="panamanian">Panamanian</option>
  <option value="papua new guinean">Papua New Guinean</option>
  <option value="paraguayan">Paraguayan</option>
  <option value="peruvian">Peruvian</option>
  <option value="polish">Polish</option>
  <option value="portuguese">Portuguese</option>
  <option value="qatari">Qatari</option>
  <option value="romanian">Romanian</option>
  <option value="russian">Russian</option>
  <option value="rwandan">Rwandan</option>
  <option value="saint lucian">Saint Lucian</option>
  <option value="salvadoran">Salvadoran</option>
  <option value="samoan">Samoan</option>
  <option value="san marinese">San Marinese</option>
  <option value="sao tomean">Sao Tomean</option>
  <option value="saudi">Saudi</option>
  <option value="scottish">Scottish</option>
  <option value="senegalese">Senegalese</option>
  <option value="serbian">Serbian</option>
  <option value="seychellois">Seychellois</option>
  <option value="sierra leonean">Sierra Leonean</option>
  <option value="singaporean">Singaporean</option>
  <option value="slovakian">Slovakian</option>
  <option value="slovenian">Slovenian</option>
  <option value="solomon islander">Solomon Islander</option>
  <option value="somali">Somali</option>
  <option value="south african">South African</option>
  <option value="south korean">South Korean</option>
  <option value="spanish">Spanish</option>
  <option value="sri lankan">Sri Lankan</option>
  <option value="sudanese">Sudanese</option>
  <option value="surinamer">Surinamer</option>
  <option value="swazi">Swazi</option>
  <option value="swedish">Swedish</option>
  <option value="swiss">Swiss</option>
  <option value="syrian">Syrian</option>
  <option value="taiwanese">Taiwanese</option>
  <option value="tajik">Tajik</option>
  <option value="tanzanian">Tanzanian</option>
  <option value="thai">Thai</option>
  <option value="togolese">Togolese</option>
  <option value="tongan">Tongan</option>
  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
  <option value="tunisian">Tunisian</option>
  <option value="turkish">Turkish</option>
  <option value="tuvaluan">Tuvaluan</option>
  <option value="ugandan">Ugandan</option>
  <option value="ukrainian">Ukrainian</option>
  <option value="uruguayan">Uruguayan</option>
  <option value="uzbekistani">Uzbekistani</option>
  <option value="venezuelan">Venezuelan</option>
  <option value="vietnamese">Vietnamese</option>
  <option value="welsh">Welsh</option>
  <option value="yemenite">Yemenite</option>
  <option value="zambian">Zambian</option>
  <option value="zimbabwean">Zimbabwean</option>
</select>
  
     <br> <br>
     <label for="">Text</label>
     <br>
     <textarea  name="info"  placeholder="Enter info" >

</textarea>
    
     <br> <br>
     <button  name="submit" class="content-button"> Create New Player</button>
   
    
      
    
  </div>
</form>


<?php

 

if (isset($_POST['submit'])) {


  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $team = $_POST['team'];
  $kitnumber = $_POST['kitnumber'];
  $nationality = $_POST['nationality'];
  $info = $_POST['info'];

  $sql = "SELECT * FROM players WHERE name='$name' AND surname='$surname' AND team='$team' AND kitnumber='$kitnumber' AND nationality='$nationality' AND info='$info'";
	$result = mysqli_query($conn, $sql);

  if (!$result->num_rows > 0) {
    $sql = "INSERT INTO players (name,surname,team,kitnumber,nationality,info )
        VALUES ( '$name', '$surname','$team','$kitnumber','$nationality','$info')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo "<script>alert('Wow! Player Registration Completed.')</script>";
    }

    else {
      echo "<script>alert('Woops! Something Wrong Went.')</script>";
    }
}

else {
  echo "<script>alert('Woops! PLayer Already Exists.')</script>";
}
}




?>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'>

</script>
<script  src="./script.js"></script>
             <script type="text/javascript"> </script>
            
            
</body>
</html>
