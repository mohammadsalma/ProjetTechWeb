<?php   
include "bdd.php";
// inclusion du fichier a lire

header('Content-Type: application/json');

function getList(){
   $mot = $_REQUEST['motcle'];
   $base= connexionbd();
   // me permet de me connecter a la base de donnée car ele contient toutes les informations
   $req= "Select * from releves where lieu like '".$mot."%' 
                                      OR prenom_collecteur like '".$mot."%'
                                       OR nom_collecteur like '".$mot."%'
                                       OR latitude like '".$mot."%'
                                       OR date_releve like '".$mot."%'
                                       OR nom_plante like '".$mot."%'
                                       OR commentaire like '".$mot."%'
                                       ";
   //echo $req;                      
   $requete=requete($base,$req);
   return $requete;
}

$list_data = getList();
// Entête HTTP pour spécifier le code de retour. 200 signifie "tout va bien" (c'est le code par défaut)
http_response_code(200);

echo json_encode($list_data);

<<<<<<< HEAD
?>
=======
?>
>>>>>>> 3c4555815039a49af935fd054d5194c3da021028
