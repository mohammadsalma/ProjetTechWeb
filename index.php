<!-- entete -->	
<?php include("entete.php"); ?>

<!-- menu -->
<?php include("menu.php"); ?>

<!-- corps -->
	<div id="corps">
		<h1>Bienvenue</h1>

		<p>
			Voilà le rôle du site.
		</p>
	</div>

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
	
<!-- pied de page -->

<?php include("pied.php"); ?>
