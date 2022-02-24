<?php require_once view('parties/header'); ?>

<h1><?= $article->titre ?></h1>
<p class="subtitle">Écrit le <?= $article->date_de_publication ?>, par <?= $article->auteur ?></p>

<img src="<?= $article->image ?>" class="img-fluid object-cover mt-3 mb-5">

<p><?= $article->contenu ?></p>


<?php require_once view('parties/footer'); ?>