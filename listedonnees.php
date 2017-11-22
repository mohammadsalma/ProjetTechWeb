<?php   

include "bdd.php";// inclusion du fichier a lire
$base= connexionbd();// me permet de me connecter a la base de donnée car ele contient toutes les informations
$req= 'Select * from releves';
$requete=requete($base,$req);
//echo "$requete";
//print_r($requete);
// lecture du resultat
echo"<table>";
echo"<tr><th> Nom</th><th> Lieu</th>
		<th> Latitude</th>
		<th> Date du releve</th>
		<th> Photo</th>
		<th> Nom du collecteur</th>
		<th> Prenom du collecteur</th>
		<th> Commentaire</th>
		</tr>";
// Pour acceder a des colonnes ligne/ligne(le echo dans la boucle)
foreach ($requete as $ligne) {
//echo $ligne['id'],$ligne['nom_plante'],$ligne['lieu'],$ligne['latitude'],$ligne['longitude'],$ligne['date_releve'],$ligne['photo'],$ligne['nom_collecteur'],$ligne['prenom_collecteur'],$ligne['commentaire'];
	
	//echo "<label>Nom: </label>";
	echo "<tr><td>",$ligne['nom_plante']," </td><td> ",
	$ligne['lieu']," </td><td> ",
	$ligne['latitude'], " </td><td> ",
	$ligne['date_releve'], " </td><td> ",
	"<img src=",$ligne['photo'],">"," </td><td> ",
	$ligne['nom_collecteur'], " </td><td> ",
	$ligne['prenom_collecteur'], " </td><td> ",
	$ligne['commentaire'], " </td>",
	"</tr>";
	
	
	
	/*echo "<label>lieu: </label>";
	echo $ligne['lieu'];
	echo "<label>latitude: </label>";
	echo $ligne['latitude'];
	echo "<label>date_releve: </label>";
	echo $ligne['date_releve'];
	echo "<label>photo: </label>";
	echo "<img src=",$ligne['photo'],">";*/
	
	//echo "<br>";
}

echo "</table>";

?>
