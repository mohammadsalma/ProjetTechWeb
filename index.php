<!-- entete -->	
<?php include("entete.php"); ?>

<hr>

<!-- corps -->
	<br>
	<div id="bienvenue">
		<h1>Bienvenue sur notre application !</h1>

		<p>Cette application web va vous permettre de consulter gratuitement et rapidement des relevés botaniques. <br>
			Connectez-vous pour ajouter ou supprimer vos relevés !</p>
	</div>
	<br>
	<div id="co">
		    <form action="Login.php" method="post">
      <fieldset>
        <legend>Identifiez-vous :</legend>
       <p>
          <label for="username">Username : </label> 
<<<<<<< HEAD
          <input type="text" name="username" id="username" value="test" />
          <label for="password">Password : </label> 
          <input type="password" name="password" id="password" value="123" /> 
=======
          <input type="text" name="username" id="username" value="username" />
          <label for="password">Password : </label> 
          <input type="password" name="password" id="password" value="password" /> 
>>>>>>> 3c4555815039a49af935fd054d5194c3da021028
          <br>
          <input type="submit" name="submit" value="Valider" />
        </p>
      </fieldset>
    </form>
	</div>
	<br>
	<br>
	
<!-- pied de page -->
<?php include("pied.php"); ?>