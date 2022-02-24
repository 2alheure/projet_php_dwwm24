<?php // Le routeur

require_once __DIR__ . '/functions.php';
seConnecter();

if (empty($_GET['route'])) $route = 'home';
else $route = $_GET['route'];

switch ($route) {
    case 'home':
        require_once controller('home');
        accueil();
        break;

    case 'liste-articles':
        require_once controller('article');
        liste();
        break;

    case 'details-article':
        require_once controller('article');
        details();
        break;

    case 'ajout-article':
        require_once controller('article');
        ajout();
        break;

    default:
        erreur(404);
}
