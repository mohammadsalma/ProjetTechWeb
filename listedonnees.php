<?php   

	include "bdd.php";// inclusion du fichier a lire
	include "entete.php";

	echo'<div id="co"><form action="login.php" method="post">
      <fieldset>
        <legend>Identifiez-vous :</legend>
       <p>
          <label for="login">Login :</label> 
          <input type="text" name="login" id="login" value="" />
          <label for="password">Password :</label> 
          <input type="password" name="password" id="password" value="" /> 
          <input type="submit" name="submit" value="Valider" />
        </p>
      </fieldset>
    </form></div><br>';

	$base= connexionbd();// me permet de me connecter a la base de donnée car ele contient toutes les informations
	$req= 'Select * from releves';
	$requete=requete($base,$req);
	//echo "$requete";
	//print_r($requete);

	// lecture du resultat
	//echo'<html><head><meta charset="utf-8"/><title>Consultation de la BD</title><link rel="stylesheet" type="text/css" href="style.css"></head><body>';
	echo'<table class="tabledonnees">';
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

		//echo $ligne['id'],$ligne['nom_plante'],$ligne['lieu'],$ligne['latitude'],$ligne['longitude'],$ligne['date_releve'],$ligne['photo'],$ligne['nom_collecteur'],$ligne['prenom_collecteur'],$ligne['commentaire'];
	
		//echo "<label>Nom: </label>";
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

	echo '</table>';
	include "pied.php";
?>
