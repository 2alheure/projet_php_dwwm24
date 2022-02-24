<?php

require_once __DIR__ . '/../models/Commentaire.php';

function ajout() {
    if (!estConnecte()) erreur(403);
    if (empty($_GET['id_article'])) erreur(404);

    $errors = [];

    if (empty($_POST['commentaire'])) $errors[] = 'Le commentaire est requis.';

    if (empty($errors)) {
        $commentaire = new Commentaire;
        $commentaire->contenu = $_POST['commentaire'];
        $commentaire->id_article = $_GET['id_article'];
        $commentaire->id_utilisateur = $_SESSION['utilisateur']->id;

        $commentaire->save();
    }

    redirection('details-article&id=' . $_GET['id_article']);
}
