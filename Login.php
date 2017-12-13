<?php
session_start(); // Starting Session

include("bdd.php");
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
echo $error;
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = connexionbd();
//$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
//$username = stripslashes($username);
//$password = stripslashes($password);
//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);
//// Selecting Database
//$db = mysql_select_db("identif", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = "select * from identif where password='".$password."' AND usename='".$username."'";
//echo $query;
$rows = requete($connection,$query);
if ($rows != null) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
echo $error;
}
//mysql_close($connection); // Closing Connection
}
}
?>

