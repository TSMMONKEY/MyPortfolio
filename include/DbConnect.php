<?php
$serverName = 'localhost';
$username = 'root';
$password = '';

try {
    $conn = new PDO( "mysql:host=$serverName;dbname=portfolio", $username, $password );
    // set the PDO error mode to exception
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

        echo 'successfully connected';
} catch( PDOException $e ) {
    echo 'Connection failed: ' . $e->getMessage();
}