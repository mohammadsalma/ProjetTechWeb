// Ceci est le fichier Javascript qui rend notre application dynamique !

// On attend que la page soit chargée
document.addEventListener('DOMContentLoaded', function () {

    // Cette fonction construit une portion de HTML en fonction d'un message; cela permet
    // d'injecter ce HTML dans la page et ainsi rendre le message visible à l'écran
    function build_list_html(line) {
        var ret = '';
        ret += '<div class="panel-heading">' + '<table class= "tabledonnees"><thead><tr>' + 
                '<th> </th> <th> Nom</th>'+ '<th> Lieu</th>'+
                '<th> Latitude</th>'+
                '<th> Longitude</th>'+
                '<th> Date du relevé</th>'+
                '<th> Photo </th>'+
                '<th> Nom du collecteur</th>'+
                '<th> Prenom du collecteur</th>'+
                '<th> Commentaire(s)</th></tr>'+
                '</thead>'+
                '</h3>';
        ret += '</div>';
        ret += '<div class="panel-body">';
        ret += '<tbody><tr>';
        ret += '<td> <input type="checkbox" name="delete" value="idLine">';
		ret += ' </td><td>' +line.nom_plante;
		ret += ' </td><td>' +line.lieu;
		ret += ' </td><td>' +line.latitude;
		ret += ' </td><td>' +line.longitude;
		ret += ' </td><td>' +line.date_releve;
		ret += ' </td><td id="td_img"> <img src="'+ line.photo +'">';
		ret += ' </td><td>' +line.nom_collecteur;
		ret += ' </td><td>' +line.prenom_collecteur;
		ret += ' </td><td>' +line.commentaire+ '</td></tr></tbody></table>';
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
        request.open("GET", "listedynamique.php"+"?motcle="+mtcle.value);
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
    

    
    
    
	// On ajoute un écouteur d'événement sur le formulaire, pour intercepter l'action "submit" (quelqu'un
	// a cliqué sur le bouton "envoyer"), et appeler le Webservice d'écriture dans ce cas
    var formajout = document.getElementById('ajoutsuppr');
    form.addEventListener("submit", function(event) {
    	// On n'exécute pas l'action par défaut
        event.preventDefault();

		// On prépare une requête AJAX
        var request = new XMLHttpRequest();
		// On définit ce qu'elle fera lorsqu'elle aura reçu une réponse
        request.addEventListener('load', function(data) {
            console.log(JSON.parse(data.target.responseText));
            // Si le code de retour est "erreur du serveur"
            if (data.target.status == 500) {
            	// On fait sauter une erreur explicite au nez de l'utilisateur (il serait
            	// mieux d'afficher un message plus discret dans la page)
            	alert("erreur lors de l'envoi du message");
            } else if (data.target.status == 200) { // Sinon, si le code d'erreur est "ok"
            	// On vide le champ du message (juste pour faire joli)
	            var textarea = document.getElementById('msg');
	            textarea.value = '';
	        }
        });
		// ... et ce qu'elle fera en cas d'erreur
        request.addEventListener('error', function(data) {
        	// On affiche une erreur
            console.log('error', data);
        });

		// On envoie la requête avec la méthode POST (car on transmet des données)
        request.open("POST", "php/ajoutsuppr.php");
        // On envoie les données que l'utilisateur a tapées dans le formulaire
        request.send(new FormData(form));
    });

});
