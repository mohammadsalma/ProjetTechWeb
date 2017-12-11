<!-- entete --> 
<?php include("entete.php"); ?>

<form action="formulaireajoutsuppr.php" method="post">
    <div>
        <label for="Id">Id :</label>
        <input type="text" id="Id" />
    </div>
    <div>
        <label for="Nom_plante">Nom plante :</label>
        <input type="text" id="Nom_plante" />
    </div>
    <div>
        <label for="Lieu">Lieu :</label>
        <input type="text" id="Lieu" />
    </div>
    <div>
        <label for="Latitude">Latitude :</label>
        <input type="text" id="Latitude" />
    </div>
    <div>
        <label for="Longitude">Longitude :</label>
        <input type="text" id="Longitude" />
    </div>
    <div>
        <label for="date_relevé">date_relevé :</label>
        <input type="text" id="date_relevé" />
    </div>
    <div>
        <label for="Photo">Photo :</label>
        <input type="image" id="Photo" />
    </div>
    <div>
        <label for="Nom_collecteur">Nom_collecteur :</label>
        <input type="text" id="Nom_collecteur" />
    </div>
    <div>
        <label for="Prénom_collecteur">Prénom_collecteur:</label>
        <input type="text" id="Prénom_collecteur" />
    </div>
   
    <div>
        <label for="Commentaire">Commentaire :</label>
        <input type="text" id="Commentaire" />
    </div>
    <br>
    <div class="button">
        <button type="submit">Soummettre les données</button>
    </div>
</form>
    
<!-- pied de page -->
<?php include("pied.php"); ?>
