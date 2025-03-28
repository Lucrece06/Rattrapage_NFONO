<?php
require_once "config.php";

// Récupérer les contacts depuis la base de données
$sql = "SELECT * FROM contacts";
$stmt = $pdo->query($sql);
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Contacts</title>
    <link rel="stylesheet" href="style.css">
    

    <script>
        function confirmerSuppression(contactId) {
            let confirmation = confirm("Êtes-vous sûr de vouloir supprimer ce contact ?");
            if (confirmation) {
                window.location.href = "supprimer.php?id=" + contactId;
            }
        }
    </script>
</head>
<body>

    <h1>📋 Liste des Contacts</h1>

    <?php if (empty($contacts)): ?>
        <p>📭 Aucun contact enregistré.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($contacts as $contact): ?>
                <li>
                    <?php echo htmlspecialchars($contact["nom"]); ?> - <?php echo htmlspecialchars($contact["email"]); ?>
                    <a href="#" onclick="confirmerSuppression(<?php echo $contact['id']; ?>)">🗑️ Supprimer</a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <a href="index.php">⬅️ Retour à l'ajout</a>

</body>
</html>
