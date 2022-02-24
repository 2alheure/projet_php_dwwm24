<?php require_once view('parties/header'); ?>

<h1>Tous les articles</h1>

<div class="d-flex flex-wrap justify-content-between">
    <?php foreach ($articles as $article) : ?>

        <div class="card text-left col-3 m-4">
            <img class="card-img-top" src="<?= $article->image ?>" alt="">
            <div class="card-body">
                <h4 class="card-title"><?= $article->titre ?></h4>
                <p class="card-text"><?= resume($article) ?></p>
                <p class="card-text d-flex justify-content-around">
                    <a class="btn btn-primary" href="<?= url('details-article&id=' . $article->id) ?>">Lire</a>
                    <a class="btn btn-warning" href="<?= url('modif-article&id=' . $article->id) ?>">Modifier</a>
                </p>
            </div>
        </div>

    <?php endforeach; ?>
</div>

<?php require_once view('parties/footer'); ?>