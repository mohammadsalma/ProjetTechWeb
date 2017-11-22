<?php   

include "bdd.php";// inclusion du fichier a lire
$base= connexionbd();// me permet de me connecter a la base de donnée car ele contient toutes les informations
$req= 'Select * from releves';
$requete=requete($base,$req);
//echo "$requete";
//print_r($requete);
// lecture du resultat

// Pour acceder a des colonnes ligne/ligne(le echo dans la boucle)
foreach ($requete as $ligne) {
//echo $ligne['id'],$ligne['nom_plante'],$ligne['lieu'],$ligne['latitude'],$ligne['longitude'],$ligne['date_releve'],$ligne['photo'],$ligne['nom_collecteur'],$ligne['prenom_collecteur'],$ligne['commentaire'];
	echo "<label>Nom: </label>";
	echo $ligne['nom_plante'];
	echo "<label>lieu: </label>";
	echo $ligne['lieu'];
	echo "<br>";
}


?>
