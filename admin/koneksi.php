<?php
$host = 'localhost';
$db = 'db_motor';
$user = 'root';
$pass = '';

try {
    $koneksi = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "database tidak terhubung : " . $e->getMessage();
}
$url = "https://adila.id/";
