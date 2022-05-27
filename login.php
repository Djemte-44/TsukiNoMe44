<?php 

include 'connection.php';

session_start();

error_reporting(0);

if (isset($_SESSION['email'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: loading.html");
	} else {
		echo "<script>alert('Woops! username or Password is Wrong.')</script>";
	}


}

?>

<html>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="login.css">
    <style>   
      label{color:white;}
    .light-mode label{color:black;}
    </style>
 
    <link rel="link" href="main.html">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="images/logo69.png">

        </head>
        
        <body>

            <div class="dark-light">
              <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
               <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" /></svg>
             </div>
             <div class="app">
              <div class="header">
               <div class="menu-circle"></div>
           
             
               </div>
             
            
         <form action="" method="POST">
              <div class="imgcontainer">
                <img src="images/logo69.png" alt="Avatar" class="calciohub" style="   width: 25%; ">
              </div>
            
              <div class="container5">
                <label for="uname"><b>Username</b></label>
<br> <br>
                <input type="text" placeholder="Enter Username" name="username" value="<?php echo $username; ?>" required>
   <br><br>
                <label for="psw"><b>Password</b></label>
    <br> <br>
                <input type="password" placeholder="Enter Password" name="password"  value="<?php echo $_POST['password']; ?>" id="myInput" required> 
              
               
              
              </div>
            
                <div class="container2" >
                  <button id="myButton1" name="submit" class="content-button" >Login</button>
                    <h3 class="or-text">or</h3>
                    <button id="myButton2" class="content-button" >Sign up</button>
                    <button id="myButton" class="content-button" >ADMIN</button>
                    
                  </div>
                  <input type="reset" class="cancelbtn" value="Cancel"></input>
            </form>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>
            
   

<script type="text/javascript">


  document.getElementById("myButton").onclick = function () {
    
      location.href = "admin.html";
  };



  
   
   
// };
document.getElementById("myButton2").onclick = function () {
    
    location.href = "register.php";
};  



</script>



          </body>
            



</html>