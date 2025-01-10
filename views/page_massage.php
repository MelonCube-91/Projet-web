<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Massages</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <h1>Nos Massages</h1>
    <div class="massages">
    <?php
    if (isset($massages) && !empty($massages)) {
        foreach ($massages as $massage) {
            echo "<div>";
            echo "<h3>" . htmlspecialchars($massage['type']) . "</h3>";
            echo "<p>" . htmlspecialchars($massage['description']) . "</p>";
            echo "<p>Prix: " . htmlspecialchars($massage['prix']) . "€</p>";
            echo "<a href='../Views/page_reservation_service.php?id_service=" 
                . htmlspecialchars($massage['id_massage']) 
                . "&type_service=massage' class='btn-reserver'>Réserver</a>";
            echo "</div>";
        }
    }
    ?>
    </div>
</body>
</html>


