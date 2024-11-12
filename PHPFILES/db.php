<?php
$server = "localhost";
$user = "phpuser";
$password = "phppassword";
$dbname = "phpdb";

try {
    $pdo = new PDO("mysql:host=$server;dbname=$dbname",
            $user,$password);
    $pdo->setAttribute
            (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch( PDOEXception $e) {
    die("Connection failed: ". $e->getMessage());
}

?>