<?php include("entete.php"); ?>
<!-- entete -->

<!-- restriction d'acces-->
        <?php
            if($logged_in) {
        ?> 

    <div id="main">
      
      <form id="liste-form">
        <div class="form-group" id="recherche">
          <br><label for="motcle">Recherche : </label>
          <input type="text" class="form-control" id="motcle" name="motcle">
        <button type="submit" class="btn btn-primary" id="rechercher">Rechercher</button>
        </div>
      </form>
      <br>
      <div id="lines">
      <!-- ici resultats de la recherche-->
      </div> 
      <br>
    </div>

<!-- redirection si non loggue-->
        <?php
            } else {
            header('Refresh: 2; url=index.php');
            echo '<div id=acces>Accès non autorisé, veuillez-vous connecter svp !</div>';
            }
        ?>

<!-- pied de page -->
<?php include("pied.php"); ?>