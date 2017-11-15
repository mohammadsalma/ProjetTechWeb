<?php
// Pour inclure le fichier bdd.php qui contient les fonctions nécessaires
// ainsi les données de login
include "bdd.php";
// Pour se connecter à la base de données
connexionbd();

// Pour la creation de table
creation_table();

//Pour l'insertion des données d'exemples
insertion_exemples();

?>