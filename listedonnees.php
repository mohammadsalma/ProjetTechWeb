<?php   

include "bdd.php";// inclusion du fichier a lire
//connexion
$base= connexionbd();// me permet de me connecter a la base de donnée car ele contient toutes les informations
$req= 'Select * from releves';
$requete=requete($base,$req);
$ligne=mysqli_fetch_row($requete);
echo "$requete";



?>


