<?php 

$server = "127.0.0.1";
$user = "root";
$pass = "";
$database = "login_register_toanowo";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>