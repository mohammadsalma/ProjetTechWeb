<!-- entete --> 
<?php include("entete.php"); ?>

<?php
echo '    
    <div id="co">
        <form action="login.php" method="post">
          <fieldset>
            <legend>Identifiez-vous :</legend>
              <p>
                 <label for="login">Login : </label> 
<<<<<<< HEAD
                 <input type="text" name="login" id="login" value="test" />
                 <label for="password">Password : </label> 
                 <input type="password" name="password" id="password" value="123" />
=======
                 <input type="text" name="login" id="login" value="" />
                 <label for="password">Password : </label> 
                 <input type="password" name="password" id="password" value="" />
>>>>>>> 3c4555815039a49af935fd054d5194c3da021028
                 <br>
                 <input type="submit" name="submit" value="Valider" />
               </p>
          </fieldset>
        </form>
    </div>
    <br>'
?>

<!--<form action="formulaireajoutsuppr.php" method="post">-->
<form action="protoajout.php" method="post">
    <div id="ajoutsuppr">
<<<<<<< HEAD
        Merci de bien vouloir remplir tous les champs :<br>

=======
>>>>>>> 3c4555815039a49af935fd054d5194c3da021028
        <label for="Nom_plante">Nom plante :</label>
        <input type="text" id="Nom_plante" name="Nom_plante" />
        <br>

        <label for="Lieu">Lieu :</label>
        <input type="text" id="Lieu" name="Lieu"/>
        <br>

        <label for="Latitude">Latitude :</label>
        <input type="text" id="Latitude" name="Latitude"/>
        <br>

        <label for="Longitude">Longitude :</label>
        <input type="text" id="Longitude" name="Longitude"/>
        <br>

<<<<<<< HEAD
        <label for="date_relevé">Date_relevé :</label>
        <input type="date" id="date_releve" name="date_releve"/>
=======
        <label for="date_relevé">Date_relevé (aaaa-mm-jj) :</label>
        <input type="text" id="date_releve" name="date_releve"/>
>>>>>>> 3c4555815039a49af935fd054d5194c3da021028
        <br>

        <label for="URL_Photo">Photo (URL) :</label>
        <input type="text" id="URL_Photo" name="URL_Photo"/>
        <br>

        <label for="Nom_collecteur">Nom_collecteur :</label>
        <input type="text" id="Nom_collecteur" name="Nom_collecteur"/>
        <br>

        <label for="Prénom_collecteur">Prénom_collecteur:</label>
        <input type="text" id="Prenom_collecteur" name="Prenom_collecteur"/>
        <br>

        <label for="Commentaire">Commentaire(s) :</label>
        <input type="text" id="Commentaire" name="Commentaire"/>
        <br>

        <button type="submit" id="soumettre">Soumettre</button>
        </div>
</form>

<!-- pied de page -->
<?php include("pied.php"); ?>
