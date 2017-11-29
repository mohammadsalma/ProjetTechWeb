<?php   
include "bdd.php";// inclusion du fichier a lire

header('Content-Type: application/json');

function getList(){
   $base= connexionbd();// me permet de me connecter a la base de donnée car ele contient toutes les informations
   $req= 'Select * from releves';
   $requete=requete($base,$req);
   return $requete;
   
}

$list_data = getList();
// Entête HTTP pour spécifier le code de retour. 200 signifie "tout va bien" (c'est le code par défaut)
http_response_code(200);
echo json_encode($list_data);

?>
