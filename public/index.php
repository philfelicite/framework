<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello world</h1>
    
</body>
</html> -->
<?php



    /**
     * ----------------------------------------------------
     * Bienvenue dans notre framework fait maison
     * 
     * L'index.php représente le "FrontController"
     * Ses rôles : 
     *              - Charger le fichier de configuration
     *              - Créer une nouvelle instance du noyau
     *              - Récupérer la réponse qui sera ensuite 
     *                envoyée au navigateur
     * ----------------------------------------------------
    */


    // Chargement du fichier de configuration
require dirname(__DIR__) ." /config/bootstrap.php";
 dd($_ENV);

dd("hello");
var_dump("hello");
    // Création d'une nouvelle instance du noyau de l'application
    

    // Soumission de la requête au noyau
    // Récupération de la réponse


    // Envoi de la réponse au navigateur
