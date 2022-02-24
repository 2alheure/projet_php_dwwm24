<?php

function url(string $route) {
    return 'index.php?route=' . $route;
}

function seConnecter() {
    // Include the Simple ORM class
    require_once __DIR__ . '/models/SimpleOrm.php';

    // Connect to the database using mysqli
    $conn = new mysqli('localhost', 'root', '');

    if ($conn->connect_error)
        die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

    // Tell Simple ORM to use the connection you just created.
    SimpleOrm::useConnection($conn, 'projet_php');
}
