<?php

require_once model('Utilisateur');

function connexion() {
    if (!empty($_POST)) {
        $errors = [];

        if (empty($_POST['login'])) $errors[] = 'L\'identifiant est requis.';
        if (empty($_POST['psw'])) $errors[] = 'Le mot de passe est requis.';

        if (empty($errors)) {

            $utilisateur = Utilisateur::retrieveByField('identifiant', $_POST['login'], SimpleOrm::FETCH_ONE);

            if (empty($utilisateur)) $errors[] = 'Identifiant inconnu.';
            elseif (!password_verify($_POST['psw'], $utilisateur->mot_de_passe))
                $errors[] = 'Le mot de passe ne correspond pas.';
            else {
                // on crée la session
                $_SESSION['utilisateur'] = $utilisateur;

                if (!empty($_POST['remember_me']))
                    setcookie('remember', $utilisateur->id, time() + 3600 * 24 * 30);

                redirection('home');
            }
        }
    }

    require_once view('authentication/connexion');
}

function deconnexion() {
    session_destroy();
    redirection('home');
}

function register() {
    if (!empty($_POST)) {
        $errors = [];

        if (empty($_POST['pseudo'])) $errors[] = 'Le pseudo est requis.';
        if (empty($_POST['login'])) $errors[] = 'L\'identifiant est requis.';
        if (empty($_POST['psw'])) $errors[] = 'Le mot de passe est requis.';
        if (empty($_POST['psw2'])) $errors[] = 'La confirmation du mot de passe est requise.';
        if (empty($_POST['avatar'])) $errors[] = 'L\'image de profil est requise.';

        $u = Utilisateur::retrieveByField('identifiant', $_POST['login'], SimpleOrm::FETCH_ONE);
        if (!empty($u)) $errors[] = 'Cet identifiant est déjà pris.';

        if (!validerUrl($_POST['avatar'])) $errors[] = 'L\'image de profil doit être une URL valide.';
        if ($_POST['psw'] != $_POST['psw2']) $errors[] = 'Le mot de passe et sa confirmation ne correspondent pas.';

        if (empty($errors)) {
            $utilisateur = new Utilisateur;

            $utilisateur->mot_de_passe = password_hash($_POST['psw'], PASSWORD_BCRYPT);
            $utilisateur->avatar = $_POST['avatar'];
            $utilisateur->pseudo = $_POST['pseudo'];
            $utilisateur->identifiant = $_POST['login'];

            $utilisateur->save();

            redirection('connexion');
        }
    }

    require_once view('authentication/register');
}
