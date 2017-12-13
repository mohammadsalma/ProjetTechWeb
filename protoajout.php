<?php
include ("bdd.php");

try {
    $bdd = connexionbd();
    // Connexion à la base de données
}
catch (Exception $e) {
	// Entête HTTP pour spécifier le code de retour. 500 signifie "erreur interne du serveur"
	http_response_code(500);
	// On envoie l'erreur (qu'on récupère dans $e) au client, histoire qu'il ait des précisions sur pourquoi ça ne marche pas
	echo 'erreur pas de connexion';
	// Et on sort du programme, car on est dans un cas d'erreur
	exit;
}

function addList(){
   $motnom = $_POST['Nom_plante'];
   $motlieu = $_POST['Lieu'];
   $motalti = $_POST['Latitude'];
   $motlong = $_POST['Longitude'];
   $motdat = $_POST['date_releve'];
   $motphoto = $_POST['URL_Photo'];
   $motn_col = $_POST['Nom_collecteur'];
   $motpre_col = $_POST['Prenom_collecteur'];
   $motComm = $_POST['Commentaire'];

   $base= connexionbd();
   // me permet de me connecter a la base de donnée car ele contient toutes les informations

   $req= "INSERT INTO releves VALUES "."(DEFAULT, '".$motnom."', '".$motlieu."', ".$motalti.", ".$motlong.", '".$motdat."', '".$motphoto."', '".$motn_col."', '".$motpre_col."', '".$motComm."')";
   //insertion dans la base de données  
   $requete=requete($base,$req);

   echo 'Données envoyées avec succès !';
}

addList();
//appel fonction

header('Refresh: 2; url=listedynamique.html');
?>