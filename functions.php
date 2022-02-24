<?php

function url(string $route) {
    return 'index.php?route=' . $route;
}

function asset(string $nom) {
    return 'assets/' . $nom;
}

function seConnecter() {
    // Include the Simple ORM class
    require_once model('SimpleOrm');
    require_once __DIR__ . '/config.php';

    // Connect to the database using mysqli
    $conn = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD);

    if ($conn->connect_error)
        die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

    // Tell Simple ORM to use the connection you just created.
    SimpleOrm::useConnection($conn, DATABASE_NAME);
}

function redirection(string $route) {
    header('Location: ' . url($route));
    die;
}

function model(string $nom) {
    return __DIR__ . '/models/' . $nom . '.php';
}

function controller(string $nom) {
    return __DIR__ . '/controllers/' . $nom . '-controller.php';
}

function view(string $nom) {
    return __DIR__ . '/views/' . $nom . '.php';
}

function erreur(int $code = 500) {
    if (file_exists(view('erreurs/' . $code))) require_once view('erreurs/' . $code);
    else require_once view('erreurs/500');

    die();
}

function validerUrl(string $url): bool {
    return filter_var($url, FILTER_VALIDATE_URL) !== false;
}

function validerDate(string $date): bool {
    return date_create_from_format('Y-m-d', $date) !== false;
}

function erreursFormulaire(array $errors) {
    foreach ($errors as $error) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?= $error ?>
        </div>
<?php }
}

function estConnecte() {
    return !empty($_SESSION['utilisateur']);
}
