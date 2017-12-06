    <?php
    // on se connecte à notre base
    $base = mysql_connect ('serveur', 'login', 'pass');
    mysql_select_db ('ma_base', $base) ;
    ?>
    <html>
    <head>
    <title>Insertion de tibo dans la base</title>
    </head>
    <body>
    <?php
    // lancement de la requete
    $sql = 'INSERT INTO liste_proprietaire VALUES ("", "tibo", "06-98-42-01-36")';

    // on insere le tuple (mysql_query) et au cas où, on écrira un petit message d'erreur si la requête ne se passe pas bien (or die)
    mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());

    // on ferme la connexion à la base
    mysql_close();
    ?>
    Tibo vient d'être inseré dans la base.
    </body>
    </html>
