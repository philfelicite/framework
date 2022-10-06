<?php

//chargement de l'autoloader de composer
require_once __DIR__ . "/../vendor/autoload.php";

//  Chargement des variables d'environnement
//  APP_URL = http:localhost:8000
//  APP_ENV = dev
//  APP_NAME = framework

# Configuration de la base de données

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();


