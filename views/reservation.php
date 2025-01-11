<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation de Chambre</title>
    <style>
        /* Vous pouvez ajouter un peu de style pour rendre la page plus agréable */
    </style>
</head>
<body>
    <h1>Réservation de Chambre</h1>
    <div>
        <h3>Chambre : <?php echo htmlspecialchars($chambre['type']); ?></h3>
        <p>Description : <?php echo htmlspecialchars($chambre['description']); ?></p>
        <p>Prix : <?php echo htmlspecialchars($chambre['prix']); ?>€</p>
        
        <h3>Vos Informations :</h3>
        <form action="finaliser_reservation.php" method="POST">
            <p>Nom : <input type="text" name="nom" value="<?php echo htmlspecialchars($nom); ?>" required></p>
            <p>Prénom : <input type="text" name="prenom" value="<?php echo htmlspecialchars($prenom); ?>" required></p>
            <p>Email : <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required></p>
            <p>Date de la réservation : <input type="date" name="date_reservation" required></p>
            <input type="hidden" name="id_chambre" value="<?php echo $chambre['id_chambre']; ?>">
            <button type="submit">Confirmer la réservation</button>
        </form>
    </div>
</body>
</html>
