<?php require_once view('parties/header'); ?>

<h1><?= $article->titre ?></h1>
<p class="subtitle">Écrit le <?= formaterDate($article->date_de_publication) ?>, par <?= $article->auteur ?></p>

<img src="<?= $article->image ?>" class="img-fluid object-cover mt-3 mb-5">

<p><?= $article->contenu ?></p>

<h2>Commentaires</h2>

<?php foreach ($commentaires as $commentaire) : ?>
    <div class="row my-2">
        <div class="col-1">
            <img src="https://picsum.photos/40" alt="" class="rounded-circle" width="40" height="40">
        </div>
        <p class="col-10">
            <b>Utilisateur #<?= $commentaire->id_utilisateur ?></b> <span>- <?= formaterDate($commentaire->date_publication) ?></span> <br>
            <?= $commentaire->contenu ?>
        </p>
    </div>
<?php endforeach; ?>


<?php require_once view('parties/footer'); ?>