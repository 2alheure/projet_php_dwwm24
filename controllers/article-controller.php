<?php

function liste() {
    require_once model('Article');

    $articles = Article::all();

    require_once view('article/liste');
}
