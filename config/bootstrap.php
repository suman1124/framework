<?php

use Dotenv\Dotenv;
// chargement de  l'autoloader de composer 
require_once __DIR__ . "/../vendor/autoload.php";


// chargement de variable d'evironnement 
$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

// Chargement du conteneur de dépendances
$container = require_once __DIR__ . "/dependenciesInjection/container.php";
