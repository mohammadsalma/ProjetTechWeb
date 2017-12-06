    <?php
    // connexion à bdd.php
    //$base = mysql_connect ('serveur', 'login', 'pass');
    $bd = new PDO($dsn, $username, $password);
    //mysql_select_db ('ma_base', $base) ;
     mysql_select_db ('releves', $base) ;
    ?>
    <html>
    <head>
    <title>Insertion dune new plante dans la base</title>
    </head>
    <body>
    <?php
    // lancement de la requete
    $sql = 'INSERT INTO releves VALUES ("id","nom_plante","lieu","latitude","longitude","date_releve"," photo","nom_collecteur","prenom_collecteur","commentaire");

    // on insere le tuple (mysql_query) et au cas où, on écrira un petit message d'erreur si la requête ne se passe pas bien (or die)
    mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());

    // on ferme la connexion à la base
    mysql_close();
    ?>
    Tibo vient d'être inseré dans la base.
    </body>
    </html>
