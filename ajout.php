<?php include("entete.php"); ?>
<!-- entete --> 

<!-- restriction d'acces-->
        <?php
            if($logged_in) {
        ?>

<form action="protoajout.php" method="post">
    <div id="ajoutsuppr">
        Merci de bien vouloir remplir tous les champs :<br>

        <label for="Nom_plante">Nom plante : </label>
        <input type="text" id="Nom_plante" name="Nom_plante" />
        <br>

        <label for="Lieu">Lieu : </label>
        <input type="text" id="Lieu" name="Lieu"/>
        <br>

        <label for="Latitude">Latitude : </label>
        <input type="number" id="Latitude" name="Latitude"/>
        <br>

        <label for="Longitude">Longitude : </label>
        <input type="number" id="Longitude" name="Longitude"/>
        <br>

        <label for="date_relevé">Date_relevé : </label>
        <input type="date" id="date_releve" name="date_releve"/>
        <br>

        <label for="URL_Photo">Photo (URL) : </label>
        <input type="url" id="URL_Photo" name="URL_Photo"/>
        <br>

        <label for="Nom_collecteur">Nom_collecteur : </label>
        <input type="text" id="Nom_collecteur" name="Nom_collecteur"/>
        <br>

        <label for="Prénom_collecteur">Prénom_collecteur: </label>
        <input type="text" id="Prenom_collecteur" name="Prenom_collecteur"/>
        <br>

        <label for="Commentaire">Commentaire(s) : </label>
        <input type="text" id="Commentaire" name="Commentaire"/>
        <br>

        <button type="submit" id="soumettre">Soumettre</button>
        </div>
</form>

<!-- redirection si non loggue-->
        <?php
            } else {
            header('Refresh: 2; url=index.php');
            echo '<div id=acces>Accès non autorisé, veuillez-vous connecter svp!</div>';
            }
        ?>

<!-- pied de page -->
<?php include("pied.php"); ?>