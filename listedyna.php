    <!-- entete --> 
    <?php include("entete.php"); ?>

    <div id="main">
      <div class="page-header" id="title">

      <form id="liste-form">
        <div class="form-group">
          <label for="motcle">Recherche</label>
          <input type="text" class="form-control" id="motcle" name="motcle">
        </div>
        <button type="submit" class="btn btn-primary">Rechercher</button>
      </form>

	<!-- un <div> est prévu pour accueillir les messages, qui seront ajoutés par Javascript -->
     <br>Resultat de la recherche :
     
     <div id="lines">
      
      </div>

    </div>
    <!-- pied de page -->
    <?php include("pied.php"); ?>
