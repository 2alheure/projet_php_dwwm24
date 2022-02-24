<?php require_once view('parties/header'); ?>

<h1>Modifier un article</h1>

<form method="post">

    <?php if (!empty($errors)) {
        foreach ($errors as $error) { ?>

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?= $error ?>
            </div>

    <?php }
    } ?>

    <div class="form-group row">
        <label for="titre" class="col-sm-12 col-form-label">Titre</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="titre" id="titre" placeholder="Titre" required autofocus value="<?= !empty($_POST['titre']) ? $_POST['titre'] : $article->titre; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="image" class="col-sm-12 col-form-label">Image</label>
        <div class="col-sm-12">
            <input type="url" class="form-control" name="image" id="image" placeholder="Image" required value="<?= !empty($_POST['image']) ? $_POST['image'] : $article->image; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="auteur" class="col-sm-12 col-form-label">Auteur</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="auteur" id="auteur" placeholder="Auteur" required value="<?= !empty($_POST['auteur']) ? $_POST['auteur'] : $article->auteur; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="contenu">Contenu</label>
        <textarea class="form-control" name="contenu" id="contenu" rows="3" required><?= !empty($_POST['contenu']) ? $_POST['contenu'] : $article->contenu; ?></textarea>
    </div>

    <div class="form-group row">
        <label for="date" class="col-sm-12 col-form-label">Date de publication</label>
        <div class="col-sm-12">
            <input type="date" class="form-control" name="date" id="date" placeholder="Date de publication" required value="<?= !empty($_POST['date']) ? $_POST['date'] : substr($article->date_de_publication, 0, 10); ?>">
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </div>
</form>

<?php require_once view('parties/footer'); ?>