<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Projet 2017 - Techno du Web</title>
		<link rel="stylesheet" type="text/css" href="style.css">
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
				<li><a href="listedynamique.html">Rechercher</a></li>
				<li><a href="ajout.php">Ajouter des données</a></li>	
			</ul>
			</div>
		</nav>
		<div id="co">
        <form action="Login.php" method="post">
      	<fieldset>
        <legend>Identifiez-vous :</legend>
       	<p>
        	<label for="username">Username : </label> 
        	<input type="text" name="username" id="username" value="test" />
        	<label for="password">Password : </label> 
          	<input type="password" name="password" id="password" value="123" /> 
          	<br>
          	<input type="submit" name="submit" value="Valider" />
        </p>
      	</fieldset>
    	</form>
  		</div>
  	<br>