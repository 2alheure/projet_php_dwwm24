<?php

require_once model('SimpleOrm');

class Article extends SimpleOrm {
    public $id, $titre, $contenu, $auteur, $date_de_publication, $image;
}

function resume(object $article, int $taille = 200): string {
    if (strlen($article->contenu) > $taille) return substr($article->contenu, 0, $taille) . '...';
    else return $article->contenu;
}

function formaterDate(object $article) {
    $datetime = date_create_from_format('Y-m-d h:i:s', $article->date_de_publication);
    return $datetime->format('d/m/Y');
}
