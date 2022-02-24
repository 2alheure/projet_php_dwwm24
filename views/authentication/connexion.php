<?php require_once view('parties/header'); ?>

<h1>Connexion</h1>

<form method="post">
    <?php if (!empty($errors)) erreursFormulaire($errors); ?>

    <div class="form-group row">
        <label for="login" class="col-sm-12 col-form-label">Identifiant</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="login" id="login" placeholder="Identifiant" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="psw" class="col-sm-12 col-form-label">Mot de passe</label>
        <div class="col-sm-12">
            <input type="password" class="form-control" name="psw" id="psw" placeholder="Mot de passe" required>
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Connexion</button>
        </div>
    </div>
</form>

<p>
    Vous n'avez pas encore de compte ? <a href="<?= url('creer-compte') ?>">Créez-en-un</a> !
</p>

<?php require_once view('parties/footer'); ?>