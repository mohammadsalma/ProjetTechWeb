<!-- entete -->	
<?php include("entete.php"); ?>

<hr>

<!-- menu -->
<?php include("menu.php"); ?>

<!-- corps -->
	<br>
	<div id="bienvenue">
		<h1>Bienvenue sur notre application</h1>

		<p>Cette application web va vous permettre de consulter des relevés botaniques. 
			Connectez-vous pour ajouter ou supprimer des relevés.</p>
	</div>
	<br>
	<div id="login">
		<p>Veuillez vous identifier :</p>

		<form action="main.html" method="post">

		<p>
			<label><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="usename" required>
			<label>password:</label>
			<input type="password" name="password" />
			<input type="submit" value="Valider" />
		</p>
		</form>
	</div>
	<br>
	<div id="corps">
		<center>
			[corps de la page]<br>
			TTTTTTTTTTTTTTTTTT<br>
			TTTTTTTTTTTTTTTTTT<br>
			TTTTTTTTTTTTTTTTTT<br>
		</center>
	</div>
	<br>
	
<!-- pied de page -->
<?php include("pied.php"); ?>
