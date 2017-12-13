<?php
session_start();// Starting Session

// Un commentaire
// Encore un autre commentaire

include("bdd.php");

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = connexionbd();
// Selecting Database
//$db = mysql_select_db("identif", $connection);

$logged_in = false;
// Storing Session
if (isset($_SESSION['username'])){
	$user_check=$_SESSION['username'];

	// SQL Query To Fetch Complete Information Of User
	$ses_sql= "select username from identif where username='".$user_check."'";
	
	$result = requete($connection,$ses_sql);
	echo "1<br>";
	
	if(sizeof($result) > 0){
		$logged_in = true;
		echo "2<br>";
	} else {
		// Session invalide : l'utilisateur n'existe pas !
		session_destroy();
		session_start();
		echo "3<br>";
	}
}

?>
