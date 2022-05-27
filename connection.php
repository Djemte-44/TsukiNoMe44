
<?php 

$server = "localhost:3307";
$user = "root";
$password = "";
$database = "login_register";

$conn = mysqli_connect($server, $user, $password, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>