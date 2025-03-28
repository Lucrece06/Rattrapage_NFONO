<?php
$host = "localhost";
$user = "root"; // Par défaut sous XAMPP
$password = ""; // Laisser vide sous XAMPP
$dbname = "contacts_db";

// Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
