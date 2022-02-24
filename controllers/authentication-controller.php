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

                redirection('home');
            }
        }
    }

    require_once view('authentication/connexion');
}
