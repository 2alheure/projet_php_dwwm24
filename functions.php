<?php

function url(string $route) {
    return 'index.php?route=' . $route;
}

function seConnecter() {
    // Include the Simple ORM class
    require_once __DIR__ . '/models/SimpleOrm.php';
    require_once __DIR__ . '/config.php';

    // Connect to the database using mysqli
    $conn = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD);

    if ($conn->connect_error)
        die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

    // Tell Simple ORM to use the connection you just created.
    SimpleOrm::useConnection($conn, DATABASE_NAME);
}
