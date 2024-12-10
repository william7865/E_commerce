<?php

require_once __DIR__ . '/../controllers/MainController.php';

$router = new AltoRouter();

// Calcul automatique de la base path (en incluant /public)
$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
$router->setBasePath($basePath);

// Routes
$router->map('GET', '/', 'MainController#home', 'home');
$router->map('GET', '/about', 'MainController#about', 'about');
$router->map('GET', '/man', 'MainController#man', 'man');
$router->map('GET', '/panier', 'MainController#panier', 'panier');
$router->map('GET', '/woman', 'MainController#woman', 'woman');
$router->map('GET', '/connexion', 'MainController#connexion', 'connexion');
$router->map('GET', '/inscription', 'MainController#inscription', 'inscription');
$router->map('GET', '/details', 'MainController#details', 'details');

// Retourne l'objet router
return $router;
