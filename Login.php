<?php


include('bdd.php');

// reste des données obligatoires
function get_compte() {
	if (isset($_POST['username']) && isset($_POST['password']) && ($_POST['username']!= "") && ($_POST['password']!=""))
	{
		$bd=connexionbd();
		
		// récupération des données de connexion
		$login=$_POST['username'];
		$password=($_POST['password']);

		// requête SQL pour vérifier l'utilisateur
		$data = "SELECT * FROM identif WHERE usename = '$login' AND password ='$password'";
      //echo $data;
		$lines = $data;

		// tester le résultat de l'éxécution (si l'utilisateur est enregistré ou non dans la BD)
		if ($lines != 0)
		{
			echo "Can not log in: Non-existent login or bad password.";
		}
		else
		{
			session_start();

			// récupérer les infos utiles de l'utilisateur
			$_SESSION['login']=$login;
         header('Refresh: 3; url=session.php');
			echo "You are now logged in as " . $login;
		}
	}
	else{

		echo "Please enter your login or register.";
	}

}

get_compte();

//session_start(); // Starting Session
//
//include("bdd.php");
//include("session.php");
//
//$error=''; // Variable To Store Error Message
//
//if (isset($_POST['submit'])) {
//   if (empty($_POST['username']) || empty($_POST['password'])) {
//      $error = "Username or Password is invalid";
//      echo $error;
//   }
//   else
//   {
//
//   // Define $username and $password
//   $username=$_POST['username'];
//
//   $password=$_POST['password'];
//
//   // Establishing Connection with Server by passing server_name, user_id and password as a parameter
//   $connection = connexionbd();
//
//   //$connection = mysql_connect("localhost", "root", "");
//   // To protect MySQL injection for Security purpose
//   //$username = stripslashes($username);
//   //$password = stripslashes($password);
//   //$username = mysql_real_escape_string($username);
//   //$password = mysql_real_escape_string($password);
//   //// Selecting Database
//   //$db = mysql_select_db("identif", $connection);
//
//   // SQL query to fetch information of registerd users and finds user match.
//   $query = "select * from identif where password='".$password."' AND usename='".$username."'";
//
//   //echo $query;
//
//   $rows = requete($connection,$query);
//   //echo $rows;
//   if ($rows != null) {
//      $_SESSION['username']=$username; // Initializing Session
//      
//      header('Refresh: 10; url=index.php');
//      echo 'Connecter avec succès !';
//      //header("location: profile.php"); // Redirecting To Other Page
//      } 
//      else {
//         $error = "Username or Password is invalid";
//         
//         header('Refresh: 10; url=index.php');
//         echo $error;
//      }
//
////mysql_close($connection); // Closing Connection
//   }
//}
//
//
?>