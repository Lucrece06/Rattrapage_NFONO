<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];

    if (!empty($nom) && !empty($email)) {
        $sql = "INSERT INTO contacts (nom, email) VALUES (:nom, :email)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["nom" => $nom, "email" => $email]);

        // Redirection avec message de succès
        header("Location: index.php?success=1");
        exit();
    }
}
?>
