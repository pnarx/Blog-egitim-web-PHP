<?php

$user = 'root';
$password = 'mysql';
$db = 'egitimakademisi';
$host = 'localhost';
$port = 3307;

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8;port=$port";
    $baglanti = new PDO($dsn, $user, $password);

    // Hata modunu etkinleştir
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "Veritabanına bağlantı başarılı!";
    
} catch (PDOException $e) {
    die("Bağlantı hatası: " . $e->getMessage());
}

?>
