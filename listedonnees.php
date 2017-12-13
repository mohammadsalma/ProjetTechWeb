<?php   
	include "bdd.php";// inclusion du fichier a lire
	include "entete.php";

	$base= connexionbd();
	// me permet de me connecter a la base de donnée car ele contient toutes les informations
	$req= 'Select * from releves';

	$requete=requete($base,$req);

	// lecture du resultat
	echo'<table class="tabledonnees" id="tableaudonnees">';
	echo'<thead><tr>
			<th> Nom</th>
			<th> Lieu</th>
			<th> Latitude</th>
			<th> Longitude</th>
			<th> Date du relevé</th>
			<th> Photo</th>
			<th> Nom du collecteur</th>
			<th> Prenom du collecteur</th>
			<th> Commentaire(s)</th></tr></thead>';

	// Pour acceder a des colonnes ligne/ligne(le echo dans la boucle)
	foreach ($requete as $ligne) {
		echo '<tbody><tr>
		<td>',$ligne['nom_plante'],' </td><td> ',
		$ligne['lieu'],' </td><td> ',
		$ligne['latitude'], ' </td><td> ',
		$ligne['longitude'], ' </td><td> ',
		$ligne['date_releve'], ' </td><td id="td_img"> ',
		"<img src=",$ligne['photo'],">"," </td><td> ",
		$ligne['nom_collecteur'], ' </td><td> ',
		$ligne['prenom_collecteur'], ' </td><td> ',
		$ligne['commentaire'], ' </td>',
		'</tr></tbody>';		
	}

	echo '</table>';
	include "pied.php";
?>