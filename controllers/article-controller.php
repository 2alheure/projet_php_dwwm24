<?php
require_once model('Article');

function liste() {
    $articles = Article::all();

    require_once view('article/liste');
}

function details() {
    if (empty($_GET['id'])) erreur(404);

    $article = Article::retrieveByPK($_GET['id']);
    if (empty($article)) erreur(404);

    require_once view('article/details');
}

function ajout() {

    if (!empty($_POST)) {
        // Le POST n'est pas vide
        // Le formulaire a été soumis
        // On procède à son traitement

        $errors = [];

        if (empty($_POST['date'])) $errors[] = 'La date est requise.';
        if (empty($_POST['contenu'])) $errors[] = 'Le contenu est requis.';
        if (empty($_POST['image'])) $errors[] = 'L\'image est requise.';
        if (empty($_POST['auteur'])) $errors[] = 'L\'auteur est requis.';
        if (empty($_POST['titre'])) $errors[] = 'Le titre est requis.';

        if (!validerUrl($_POST['image'])) $errors[] = 'L\'image doit être une URL valide.';
        if (!validerDate($_POST['date'])) $errors[] = 'La date doit être valide.';

        if (empty($errors)) {
            $article = new Article;

            $article->date_de_publication = $_POST['date'];
            $article->auteur = $_POST['auteur'];
            $article->image = $_POST['image'];
            $article->titre = $_POST['titre'];
            $article->contenu = $_POST['contenu'];

            $article->save();

            redirection('liste-articles');
        }
    }

    require_once view('article/ajout');
}

function modif() {
    if (empty($_GET['id'])) erreur(404);

    $article = Article::retrieveByPK($_GET['id']);
    if (empty($article)) erreur(404);

    if (!empty($_POST)) {
        // Le POST n'est pas vide
        // Le formulaire a été soumis
        // On procède à son traitement

        $errors = [];

        if (empty($_POST['date'])) $errors[] = 'La date est requise.';
        if (empty($_POST['contenu'])) $errors[] = 'Le contenu est requis.';
        if (empty($_POST['image'])) $errors[] = 'L\'image est requise.';
        if (empty($_POST['auteur'])) $errors[] = 'L\'auteur est requis.';
        if (empty($_POST['titre'])) $errors[] = 'Le titre est requis.';

        if (!validerUrl($_POST['image'])) $errors[] = 'L\'image doit être une URL valide.';
        if (!validerDate($_POST['date'])) $errors[] = 'La date doit être valide.';

        if (empty($errors)) {
            $article->date_de_publication = $_POST['date'];
            $article->auteur = $_POST['auteur'];
            $article->image = $_POST['image'];
            $article->titre = $_POST['titre'];
            $article->contenu = $_POST['contenu'];

            $article->save();

            redirection('liste-articles');
        }
    }

    require_once view('article/modif');
}

function suppr() {
    if (empty($_GET['id'])) erreur(404);

    $article = Article::retrieveByPK($_GET['id']);
    if (empty($article)) erreur(404);

    $article->delete();

    redirection('liste-articles');
}
