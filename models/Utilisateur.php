<?php

require_once model('SimpleOrm');

class Utilisateur extends SimpleOrm {
    public $id, $pseudo, $identifiant, $mot_de_passe, $role, $avatar;
}
