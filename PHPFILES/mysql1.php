<?php
$server = "localhost";
$user = "phpuser";
$password = "phppassword";

try {
    $conn = new PDO("mysql:host=$server;dbname=phpdb",$user,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,            
                            PDO::ERRMODE_EXCEPTION);
    echo "Koneksi berhasil";
}
catch(PDOException $e)  {
    echo "Koneksi gagal";
}

?>