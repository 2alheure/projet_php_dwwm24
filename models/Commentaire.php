<?php

require_once model('SimpleOrm');

class Commentaire extends SimpleOrm {
    public $id, $id_utilisateur, $id_article, $contenu, $date_publication;
}
