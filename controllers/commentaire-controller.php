<?php

require_once __DIR__ . '/../models/Commentaire.php';

function ajout() {
    $errors = [];

    if (empty($_POST['commentaire'])) $errors[] = 'Le commentaire est requis.';

    if (empty($errors)) {
        $commentaire = new Commentaire;
        $commentaire->contenu = $_POST['commentaire'];

        $commentaire->save();
    }

    redirection('liste-articles');
}
