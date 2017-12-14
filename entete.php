<?php include 'session.php'; ?>

<html>
	<head>
		<meta charset="utf-8"/>
		<title>Projet 2017 - Techno du Web</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="listedynamique.js"></script>
	</head>

	<body>

		<header id="entete">
			<center>
				<a href="index.php"><img src="https://image.freepik.com/free-icon/plant-with-leaves_318-56717.jpg" width="15%" alt="logo" id="ancre"></a>
			</center>
		</header>

		<nav id="menu">
			<div class="element_menu">
			<ul>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="listedonnees.php">Consulter</a></li>
				<li><a href="listedynamique.php">Rechercher</a></li>
				<li><a href="ajout.php">Ajouter des données</a></li>	
			</ul>
			</div>
		</nav>
		<?php
		if(!$logged_in) {
			?>
			<div id="co">
			<form action="Login.php" method="post">
			<fieldset>
			<legend>Identifiez-vous : </legend>
			<p>
				<label for="username">Username : </label> 
				<input type="text" name="username" id="username" value="" />
				<label for="password">Password : </label> 
				<input type="password" name="password" id="password" value="" /> 
				<br>
				<input type="submit" name="submit" value="Valider" />
			</p>
			</fieldset>
			</form>
			</div>
			<?php
		} else {
			?>
			<div id="co">
				Vous êtes connecté en tant que <?php echo $_SESSION['username']; ?><br>
				<a href="logout.php">Se déconnecter</a>
			</div>
			<?php
		}
		?>
  	<br>