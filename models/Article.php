<?php

require_once model('SimpleOrm');

class Article extends SimpleOrm {
    public $id, $titre, $contenu, $auteur, $date_de_publication, $image;
}

function resume(object $article, int $taille = 200): string {
    if (strlen($article->contenu) > $taille) return substr($article->contenu, 0, $taille) . '...';
    else return $article->contenu;
}
