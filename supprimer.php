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

$base= connexionbd();
// TOUJOURS utiliser cette commande quand tu récupères des variables dont on n'est pas sur de la provenance sinon on peut te faire une injection SQL
$id = $_GET["id"];
// Execution de la requête
$req= "DELETE FROM releves WHERE id ='".$id."'";
echo $req;
$requete=requete($base,$req);
?>