<?php
include('bdd.php');

// reste des données obligatoires
function get_compte() {

	if (isset($_POST['username']) && isset($_POST['password']) && ($_POST['username']!= "") && ($_POST['password']!="")) {
		$bd=connexionbd();
		
		// récupération des données de connexion
		$login=$_POST['username'];
		$password=($_POST['password']);

		// requête SQL pour vérifier l'utilisateur
		$data = "SELECT * FROM identif WHERE username = '$login' AND password ='$password'";
    
    	  //echo $data;
      	$lines = requete($bd, $data);

		// tester le résultat de l'éxécution (si l'utilisateur est enregistré ou non dans la BD)
		if ($lines == 0) {
			echo "Login innexistant ou mot de passe incorrect.";
		} else {
			session_start();

			// récupérer les infos utiles de l'utilisateur
			$_SESSION['username']=$login;

         	header('Refresh: 2; url=index.php');
			echo "Vous êtes maintenant connecté en tant que " . $login;
		}
	} else {
		echo "S'il vous plaît veuillez entrer vos identifiants.";
	}
}

get_compte();

?>