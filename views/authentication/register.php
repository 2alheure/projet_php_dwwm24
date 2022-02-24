<?php require_once view('parties/header'); ?>

<h1>Créer un compte</h1>

<form method="post">
    <?php if (!empty($errors)) erreursFormulaire($errors); ?>

    <div class="form-group row">
        <label for="pseudo" class="col-sm-12 col-form-label">Pseudo</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Pseudo" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="login" class="col-sm-12 col-form-label">Identifiant</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="login" id="login" placeholder="Identifiant" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="psw" class="col-sm-12 col-form-label">Mot de passe</label>
        <div class="col-sm-12">
            <input type="password" class="form-control" name="psw" id="psw" placeholder="Mot de passe" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="psw2" class="col-sm-12 col-form-label">Confirmation du mot de passe</label>
        <div class="col-sm-12">
            <input type="password" class="form-control" name="psw2" id="psw2" placeholder="Confirmation du mot de passe" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="avatar" class="col-sm-12 col-form-label">Image de profil</label>
        <div class="col-sm-12">
            <input type="url" class="form-control" name="avatar" id="avatar" placeholder="Image de profil" required>
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </div>
</form>

<p>
    Vous avez déjà un compte ? <a href="<?= url('connexion') ?>">Connectez-vous</a> !
</p>

<?php require_once view('parties/footer'); ?>