// On attend que la page soit chargée
document.addEventListener('DOMContentLoaded', function() {

	// Cette fonction construit une portion de HTML en fonction d'un message; cela permet
	// d'injecter ce HTML dans la page et ainsi rendre le message visible à l'écran
	function build_list_html(line) {
		var ret = '';
		ret += '<div class="panel-heading">' + '<table class="tabledonnees"><thead><tr>' +
			'<th> </th> <th> Nom</th>' + '<th> Lieu</th>' +
			'<th class="hidden"> Latitude</th>' +
			'<th class="hidden"> Longitude</th>' +
			'<th> Date du relevé</th>' +
			'<th> Photo </th>' +
			'<th> Nom du collecteur</th>' +
			'<th class="hidden"> Prenom du collecteur</th>' +
			'<th class="hidden"> Commentaire(s)</th></tr>' +
			'</thead>' +
			'</h3>';
		ret += '</div>';
		ret += '<div class="panel-body">';
		ret += '<tbody><tr>';
		ret += '<td> <form action="supprimer.php" method="post"> <input type="hidden" name="id" value="'+line.id+'"/><input type="submit" value="Supprimer" name="Supprimer"></form>';
		ret += ' </td><td>' + line.nom_plante;
		ret += ' </td><td>' + line.lieu;
		ret += ' </td><td class="hidden">' + line.latitude;
		ret += ' </td><td class="hidden">' + line.longitude;
		ret += ' </td><td>' + line.date_releve;
		ret += ' </td><td id="td_img"> <img src="' + line.photo + '">';
		ret += ' </td><td>' + line.nom_collecteur;
		ret += ' </td><td class="hidden">' + line.prenom_collecteur;
		ret += ' </td><td class="hidden">' + line.commentaire + '</td></tr></tbody></table>';
		ret += '</div></div>';
		return ret;
	}

	// Cette fonction va chercher les messages en appelant le Webservice de lecture

	function refresh() {
		
		// On prépare une requête AJAX
		var request = new XMLHttpRequest();

		// On définit ce qu'elle fera lorsqu'elle aura reçu une réponse
		request.addEventListener('load', function(data) {
			// Debug: on affiche les données dans la console
			//console.log(data.target.responseText));

			// On décode les données renvoyées par le Webservice
			var ret = JSON.parse(data.target.responseText);
			console.log(ret);
			var new_html = '';

			// Pour chaque message du jeu de données renvoyé, on construit une portion de HTML
			for (var i = 0; i < ret.length; i++) {
				new_html += build_list_html(ret[i]);
			}

			// On injecte ce HTML dans le <div> prévu dans la page HTML
			document.querySelector('#lines').innerHTML = new_html;
		});

		// On envoie la requête avec la méthode GET (car on ne transmet pas de données)
		var mtcle = document.getElementById('motcle');
		request.open("GET", "protodynamique.php" + "?motcle=" + mtcle.value);
		request.send();
	}

	// Recherche des que click
	var form = document.getElementById('liste-form');
	form.addEventListener("submit", function(event) {
		event.preventDefault();
		refresh();
	});

	// Recherche en temps réel
	var formchamp = document.getElementById('motcle');
	formchamp.addEventListener("keyup", function(event) {
		event.preventDefault();
		refresh();
	});

	refresh();
});