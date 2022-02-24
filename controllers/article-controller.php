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

        if (
            !empty($_POST['date'])
            && !empty($_POST['contenu'])
            && !empty($_POST['image'])
            && !empty($_POST['auteur'])
            && !empty($_POST['titre'])

            && validerUrl($_POST['image'])
            && validerDate($_POST['date'])
        ) {
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
