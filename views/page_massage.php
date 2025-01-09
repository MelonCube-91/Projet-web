<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Massages</title>
    <link rel="stylesheet" href="styles.css"> <!-- Lien vers votre fichier CSS -->
</head>
<body>
    <h1>Nos Massages</h1>
    <div class="massages">
        <?php
        if (isset($massages) && !empty($massages)) {
            foreach ($massages as $massage) {
                echo "<div class='massage'>";
                echo "<h3>" . htmlspecialchars($massage['type']) . "</h3>";
                echo "<p>" . htmlspecialchars($massage['description']) . "</p>";
                echo "<p>Prix: " . htmlspecialchars($massage['prix']) . "€</p>";
                echo "</div>";
            }
        } else {
            echo "<p>Aucun massage disponible pour le moment.</p>";
        }
        ?>
    </div>
</body>
</html>
