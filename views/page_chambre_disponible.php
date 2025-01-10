<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Chambres</title>
    <style>
        /* Vous pouvez ajouter ici un peu de CSS pour le style */
        .chambre {
            margin-bottom: 20px;
        }
        .chambre h3 {
            margin: 0;
        }
        .chambre p {
            margin: 5px 0;
        }
        .btn-reserver {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-reserver:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Liste des Chambres</h1>
    <div class="chambres">
        <?php
        if (isset($chambres) && !empty($chambres)) {
            foreach ($chambres as $chambre) {
                echo "<div class='chambre'>";
                echo "<h3>" . htmlspecialchars($chambre['type']) . "</h3>";
                echo "<p>" . htmlspecialchars($chambre['description']) . "</p>";
                echo "<p>Prix: " . htmlspecialchars($chambre['prix']) . "€</p>";
                echo "<p>Disponibilité: " . ($chambre['disponibilité'] ? 'Disponible' : 'Indisponible') . "</p>";
                // Lien de réservation
                echo "<a href='?action=reserver&id=" . $chambre['id_chambre'] . "' class='btn-reserver'>Réserver</a>";
                echo "</div>";
            }
        } else {
            echo "<p>Aucune chambre disponible.</p>";
        }
        ?>
    </div>
</body>
</html>
