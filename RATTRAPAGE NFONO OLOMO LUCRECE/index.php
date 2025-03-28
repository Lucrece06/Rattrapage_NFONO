<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Contacts</title>
    <link rel="stylesheet" href="style.css">
    

</head>
<body>

    <h1>➕ Ajouter un Contact</h1>

    <?php if (isset($_GET['success'])): ?>
        <p style="color: green;">✅ Contact ajouté avec succès !</p>
    <?php endif; ?>

    <form action="ajouter.php" method="post">
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Ajouter</button>
    </form>

    <a href="afficher_contacts.php">Voir la liste des contacts</a>

</body>
</html>
