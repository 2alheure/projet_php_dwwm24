<?php // Le routeur

require_once __DIR__ . '/functions.php';

if (empty($_GET['route'])) $route = 'home';
else $route = $_GET['route'];

switch ($route) {
    case 'home':
        require_once __DIR__ . '/controllers/home-controller.php';
        accueil();
        break;

    default:
        // Une erreur
}
