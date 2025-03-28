<?php
require_once "config.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM contacts WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["id" => $id]);
}

// Redirection vers la liste des contacts après suppression
header("Location: afficher_contacts.php");
exit();
?>
