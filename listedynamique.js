# ceci est le menu2  il s'agit d'une liste dynamique
#D'abord il faut Spécifier quelle est le fichier php contenant les données
$("#listedonnees").click(function(){
    $.ajax({

       url : 'listedonnees.php' // La ressource ciblée
       type : 'GET' // Le type de la requête HTTP.

    });

   

});
