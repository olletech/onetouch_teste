<?php
define( 'DB_HOST', 'localhost' );
define( 'DB_NAME', 'onetouch_teste' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', '' );

function getConnection() {
    try {
        return new PDO( 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ] );
    } catch ( PDOException $e ) {
        die( 'Erro na conexão: ' . $e->getMessage() );
    }
}