<!-- entete --> 
<?php include("entete.php"); ?>

<form action="formulaireajoutsuppr.php" method="post">
    <div id="ajoutsuppr">
        <label for="Nom_plante">Nom plante :</label>
        <input type="text" id="Nom_plante" />
        <br>

        <label for="Lieu">Lieu :</label>
        <input type="text" id="Lieu" />
        <br>

        <label for="Latitude">Latitude :</label>
        <input type="text" id="Latitude" />
        <br>

        <label for="Longitude">Longitude :</label>
        <input type="text" id="Longitude" />
        <br>

        <label for="date_relevé">Date_relevé :</label>
        <input type="text" id="date_releve" />
        <br>

        <label for="Photo">Photo :</label>
        <input type="file" id="Photo" />
        <br>

        <label for="Nom_collecteur">Nom_collecteur :</label>
        <input type="text" id="Nom_collecteur" />
        <br>

        <label for="Prénom_collecteur">Prénom_collecteur:</label>
        <input type="text" id="Prenom_collecteur" />
        <br>

        <label for="Commentaire">Commentaire :</label>
        <input type="text" id="Commentaire" />
        <br>

        <button type="submit" id="soumettre">Soummettre</button>
        </div>
</form>

<!-- emplacement liste donnees statiquee-->
<?php
function addList(){
   $motnom = $_REQUEST['Nom_plante'];
   $motlieu = $_REQUEST['Lieu'];
   $motalti = $_REQUEST['Latitude'];
   $motlong = $_REQUEST['Longitude'];
   $motdat = $_REQUEST['date_releve'];
   $motphoto = $_REQUEST['Photo'];
   $motn_col = $_REQUEST['Nom_collecteur'];
   $motpre_col = $_REQUEST['Prenom_collecteur'];
   $motComm = $_REQUEST['Commentaire'];
   $base= connexionbd();// me permet de me connecter a la base de donnée car ele contient toutes les informations
   $req= "INSERT INTO releves VALUES (DEFAULT, '".$motnom."', 
                                      '".$motlieu."',
                                        '".$motalti."',
                                        '".$motlong."',
                                        '".$motdat."',
                                        '".$motphoto."',
                                        '".$motn_col."',
                                        '".$motpre_col."',
                                        '".$motComm."')"
                                       ;
   //echo $req;                      
   $requete=requete($base,$req);
   return $requete;
   
}

$list_data = addList();
?>    
<!-- pied de page -->
<?php include("pied.php"); ?>
