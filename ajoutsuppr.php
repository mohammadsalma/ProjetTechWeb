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
        <input type="text" id="date_relevé" />
        <br>

        <label for="URL_Photo">URL_Photo :</label>
        <input type="text" id="Photo" />
        <br>

        <label for="Nom_collecteur">Nom_collecteur :</label>
        <input type="text" id="Nom_collecteur" />
        <br>

        <label for="Prénom_collecteur">Prénom_collecteur:</label>
        <input type="text" id="Prénom_collecteur" />
        <br>

        <label for="Commentaire">Commentaire :</label>
        <input type="text" id="Commentaire" />
        <br>

        <button type="submit" id="soumettre">Soumettre</button>
        </div>
</form>

<!-- emplacement liste donnees statiquee-->


    
<!-- pied de page -->
<?php include("pied.php"); ?>
