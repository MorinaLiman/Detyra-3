<?php
// Lidhja me bazën e të dhënave MySQL
$host = 'localhost'; // Adresa e mysql
$dbname = 'contact_form'; // Emri i mysql
$username = 'root'; // Perdoruesi i mysql
$password = ''; // Passwordi i mysql

try {
    // Lidhja me kodet e html dhe php
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Menyra e permirsimit gabimeve
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Te shfaqet nje mesazh per gabimin
    echo "Gabim: " . $e->getMessage();
}
?>
