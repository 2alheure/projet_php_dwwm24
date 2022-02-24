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

function estAdmin() {
    return estConnecte() && $_SESSION['utilisateur']->role == 'admin';
}

function formaterDate(string $date) {
    $datetime = date_create_from_format('Y-m-d H:i:s', $date);
    return $datetime->format('d/m/Y');
}

function dd($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die;
}

function reconnecterUtilisateur() {
    if (!estConnecte() && !empty($_COOKIE['remember'])) {
        require_once model('Utilisateur');
        $utilisateur = Utilisateur::retrieveByPK(dechiffrer($_COOKIE['remember']));

        if (empty($utilisateur)) { // Cas où le cookie est corrompu
            setcookie('remember'); // On détruit le cookie
            erreur();              // On affiche une 500
        } else $_SESSION['utilisateur'] = $utilisateur;
    }

    if (!empty($_COOKIE['remember'])) // Si le cookie existe, on prolonge sa durée de vie
        setcookie('remember', $_COOKIE['remember'], time() + 3600 * 24 * 30);
}

function chiffrer($msg) {
    if (function_exists('openssl_encrypt'))
        return urlencode(openssl_encrypt(urlencode($msg), SSL_ALGO, SSL_KEY, false, SSL_IV));
    else
        return urlencode(exec("echo \"" . urlencode($msg) . "\" | openssl enc -" . urlencode(SSL_ALGO) . " -base64 -nosalt -K " . bin2hex(SSL_KEY) . " -iv " . bin2hex(SSL_IV)));
}

function dechiffrer($msg) {
    if (function_exists('openssl_decrypt'))
        return trim(urldecode(openssl_decrypt(urldecode($msg), SSL_ALGO, SSL_KEY, false, SSL_IV)));
    else
        return trim(urldecode(exec("echo \"" . urldecode($msg) . "\" | openssl enc -" . SSL_ALGO . " -d -base64 -nosalt -K " . bin2hex(SSL_KEY) . " -iv " . bin2hex(SSL_IV))));
}
