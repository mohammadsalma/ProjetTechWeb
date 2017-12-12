
<!-- emplacement liste donnees statiquee-->
<?php
include ("bdd.php");


try {
    $bdd = connexionbd();
    // Connexion à la base de données (pensez à changer vos identifiants)
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
   $motnom = $_REQUEST['Nom_plante'];
   //$motnom = "hhh";
   $motlieu = $_REQUEST['Lieu'];
   $motalti = $_REQUEST['Latitude'];
   $motlong = $_REQUEST['Longitude'];
   $motdat = $_REQUEST['date_releve'];
   $motphoto = $_REQUEST['URL_Photo'];
   $motn_col = $_REQUEST['Nom_collecteur'];
   $motpre_col = $_REQUEST['Prenom_collecteur'];
   $motComm = $_REQUEST['Commentaire'];

   $base= connexionbd();// me permet de me connecter a la base de donnée car ele contient toutes les informations

   $req= "INSERT INTO releves VALUES "."(DEFAULT, '".$motnom."', 'Mauguio, dans un champ', 43.61085, 4.02314, '1992-04-30', 'http://api.tela-botanica.org/img:000276001O.jpg', 'Passure', 'Alice', 'Je ne suis pas certaine du nom de la plante')";
   //$req= "INSERT INTO releves VALUES (DEFAULT, '".$motnom."', 
   //                                   '".$motlieu."',
   //                                     '".$motalti."',
   //                                     '".$motlong."',
   //                                     '".$motdat."',
   //                                     '".$motphoto."',
   //                                     '".$motn_col."',
   //                                     '".$motpre_col."',
   //                                     '".$motComm."')"
   //                                    ;
   echo $req;                      
   $requete=requete($base,$req);
}

$list_data = addList();
?>    

