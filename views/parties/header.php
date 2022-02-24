<!doctype html>
<html lang="en">

<head>
    <title>Mon super blog</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
</head>

<body class="pb-5">

    <div class="container">
        <nav class="nav justify-content-center">
            <a class="nav-link" href="<?= url('home') ?>">Accueil</a>
            <a class="nav-link" href="<?= url('liste-articles') ?>">Les articles</a>
            <a class="nav-link" href="<?= url('ajout-article') ?>">Ajouter un article</a>

            <?php if (estConnecte()) : ?>
                <a class="nav-link" href="<?= url('deconnexion') ?>">Déconnexion</a>

                <span class="ml-auto my-auto">
                    <img class="avatar" src="<?= $_SESSION['utilisateur']->avatar ?>" alt="" srcset="">
                    <?= $_SESSION['utilisateur']->pseudo ?>
                </span>
            <?php else : ?>
                <a class="nav-link" href="<?= url('connexion') ?>">Connexion</a>
            <?php endif; ?>
        </nav>