<?php
// Pour inclure le fichier bdd.php qui contient les fonctions nécessaires
// ainsi les données de login
include "bdd.php";
// Pour se connecter à la base de données
try {
    connexionbd();
    echo " Connexion réussie! <br>";
    }
    catch (Exception $e) {
        echo " Votre login ou votre mot de passe n'est pas correcte! <br>";
    }

// Pour la creation de table
try {
    creation_table();
    vidage_table();
    echo " La table a été créée <br>";
}
    catch (Exception $e) {
        echo " La table n'a pas été créée! <br>";
        
    }
//Pour l'insertion des données d'exemples
try {
    insertion_exemples();
    echo " Les données d'exemple ont été ajoutées <br>";
}
    catch (Exception $e) {
        
    echo " Les données d'exemple n'ont pas été ajoutées! <br>";
    }
?>