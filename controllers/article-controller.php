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
