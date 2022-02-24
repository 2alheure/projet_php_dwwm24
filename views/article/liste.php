<?php require_once __DIR__ . '/../parties/header.php'; ?>

<h1>Tous les articles</h1>

<div class="d-flex gap-4">
    <?php foreach ($articles as $article) : ?>

        <div class="card text-left">
            <img class="card-img-top" src="<?= $article->image ?>" alt="">
            <div class="card-body">
                <h4 class="card-title"><?= $article->titre ?></h4>
                <p class="card-text"><?= resume($article) ?></p>
            </div>
        </div>

    <?php endforeach; ?>
</div>

<?php require_once __DIR__ . '/../parties/footer.php'; ?>