<?php
session_start(); // Démarrer la session

// Récupérer le contenu du panier
$panier = isset($_SESSION['panier']) ? $_SESSION['panier'] : [];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Panier</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Mon Panier</h1>
    <?php if (!empty($panier)): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Type de Service</th>
                    <th>ID Service</th>
                    <th>Date</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($panier as $index => $item): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item['type_service']); ?></td>
                        <td><?php echo htmlspecialchars($item['id_service']); ?></td>
                        <td><?php echo htmlspecialchars($item['date']); ?></td>
                        <td><?php echo htmlspecialchars($item['nom']); ?></td>
                        <td><?php echo htmlspecialchars($item['prenom']); ?></td>
                        <td><?php echo htmlspecialchars($item['email']); ?></td>
                        <td>
                            <a href="supprimer_du_panier.php?index=<?php echo $index; ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br>
        <a href="confirmer_reservation.php">Confirmer les réservations</a>
    <?php else: ?>
        <p>Votre panier est vide.</p>
    <?php endif; ?>
</body>
</html>
