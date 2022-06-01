<?php 

include 'connection.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>






<html>
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="./style.css">
  <style>   
    label{color:white;}
    .light-mode label{color:black;}

  .see{
    text-align:center;
  }
  </style>

    <script type="text/javascript" src="path-to-javascript-script.js"></script>
    <script src="script.js"></script>
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
             
            
               <form action=""    method="POST">
                <div class="imgcontainer">
                  <img src="images/logo69.png" alt="Avatar" class="calciohub" style="   width: 25%; ">
                </div>
            
              <div class="container5">



                <label for="uname"><b>Username</b></label>
                <br> <br>
                <input type="text" placeholder="Enter Username" name="username"   value="<?php echo $username; ?>"   required>
                <br><br>
                <label for="email"><b>Email</b></label>
                <br> <br>
                <input type="email" placeholder="Enter Email" name="email"  value="<?php echo $email; ?> "  required> 
                <br><br>
                <label for="psw"><b>Password</b></label>
                <br> <br>
                <input type="password" placeholder="Enter Password" name="password" id="myInput" value="<?php echo $_POST['password']; ?>"  required> 
                <br><br>
                <label for="psw"><b>Confirm Password</b></label>
                <br> <br>
                <input type="password" placeholder="Confirm Password" name="cpassword" id="myInput1" value="<?php echo $_POST['cpassword']; ?>"  required> 
              
              </div>

              <div class="see" >
                    <label for="checkbox">Show Password</label>
                    <input type="checkbox"  onclick="showPass() ">
                    <br><br>
                    <button  name="submit" class="content-button">Register</button>
                    <button type="button" class="cancelbtn" id="myButton4">Cancel</button> 
                    <p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
                  </div>
              <div class="container2" >
                
                   
                    
                 
                  </div>
               
              
            </form>
  
                    
               
              </div>
            

               
            
           
          </body>
      


          <script>
            function showPass() {
var x = document.getElementById("myInput");
var y = document.getElementById("myInput1");
if (x.type === "password"&&y.type === "password") {
  x.type = "text";
  y.type = "text";
} 

else {
  x.type = "password";
  y.type = "password";
}
}


 


          </script>
</html>







