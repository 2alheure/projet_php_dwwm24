<?php // Le routeur

require_once __DIR__ . '/functions.php';
seConnecter();

// J'ai besoin du modèle Utilisateur
// Parce que dans ma session je stocke un Utilisateur
require_once model('Utilisateur');
session_start();


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

    case 'modif-article':
        require_once controller('article');
        modif();
        break;

    case 'suppr-article':
        require_once controller('article');
        suppr();
        break;

    case 'connexion':
        require_once controller('authentication');
        connexion();
        break;

    case 'deconnexion':
        require_once controller('authentication');
        deconnexion();
        break;

    default:
        erreur(404);
}
