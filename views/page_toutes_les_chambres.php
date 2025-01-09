<!DOCTYPE html>
<html>
<head>
    <title>Liste des chambres</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>Liste des chambres</h1>
    <div class="chambres">
    <?php
    if (isset($chambres) && !empty($chambres)) {
        foreach ($chambres as $chambre) {
            echo "<div>";
            echo "<h3>" . htmlspecialchars($chambre['type']) . "</h3>";
            echo "<p>" . htmlspecialchars($chambre['description']) . "</p>";
            echo "<p>Prix: " . htmlspecialchars($chambre['prix']) . "€</p>";
            echo "<p>Disponibilité: " . ($chambre['disponibilité'] ? 'Disponible' : 'Indisponible') . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>Aucune chambre disponible.</p>";
        }
    ?>
    </div>
</body>
</html>