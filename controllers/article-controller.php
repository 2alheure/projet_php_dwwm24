<?php

function liste() {
    require_once __DIR__ . '/../models/Article.php';

    $articles = Article::all();

    require_once __DIR__ . '/../views/article/liste.php';
}
