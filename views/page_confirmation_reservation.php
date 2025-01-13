<?php
session_start();

// Vérifiez si les informations de réservation sont présentes dans la session (vous pouvez aussi les passer via GET ou POST)
$reservation = $_SESSION['reservation'] ?? null;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de Réservation</title>
    <link rel="stylesheet" href="style.css"> <!-- Assurez-vous que le chemin est correct -->
</head>
<body>

    <div class="confirmation-container">
        <h1>Confirmation de votre Réservation</h1>

        <?php if ($reservation): ?>
            <div class="confirmation-details">
                <p><strong>Chambre :</strong> <?php echo htmlspecialchars($reservation['type_service']); ?></p>
                <p><strong>Service :</strong> <?php echo htmlspecialchars($reservation['id_service']); ?></p>
                <p><strong>Date de réservation :</strong> <?php echo htmlspecialchars($reservation['date_reservation']); ?></p>
                <p><strong>Nom :</strong> <?php echo htmlspecialchars($reservation['nom']); ?></p>
                <p><strong>Prénom :</strong> <?php echo htmlspecialchars($reservation['prenom']); ?></p>
                <p><strong>Email :</strong> <?php echo htmlspecialchars($reservation['email']); ?></p>
            </div>

            <div class="confirmation-message">
                <p>Votre réservation a été enregistrée avec succès !</p>
                <p>Nous avons hâte de vous accueillir à La Flèche d'Argent.</p>
                <button onclick="window.location.href='page_accueil.php';">Retour à l'accueil</button>
            </div>

        <?php else: ?>
        <?php endif; ?>

    </div>

</body>.6
</html>
<style>
    /* Style de base pour la page */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.confirmation-container {
    width: 80%;
    max-width: 600px;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h1 {
    color: #4CAF50;
    margin-bottom: 20px;
}

.confirmation-details {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
}

.confirmation-details p {
    font-size: 16px;
    color: #555;
    margin: 10px 0;
}

.confirmation-message {
    font-size: 18px;
    color: #333;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #45a049;
}

</style>