<?php
session_start();// Starting Session

include("bdd.php");

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = connexionbd();
// Selecting Database
//$db = mysql_select_db("identif", $connection);

// Storing Session
$user_check=$_SESSION['login_user'];


// SQL Query To Fetch Complete Information Of User
$ses_sql= "select usename from identif where username='".$user_check."'";

$row = requete($connection,$ses_sql);

$login_session =$row['username'];

if(!isset($login_session)){
	$connection = null; // Closing Connection
	header('Location: index.php'); // Redirecting To Home Page

// SQL Query To Fetch Complete Information Of User
$ses_sql= "select usename from identif where username='".$user_check."'";
$row = requete($connection,$ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
$connection = null; // Closing Connection
header('Location: index.php'); // Redirecting To Home Page

}
?>