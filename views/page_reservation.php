<!DOCTYPE html>
<html>
<head>
    <title>Réserver un Service</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Réserver un Service</h1>

    <form action="../controllers/C_reservation.php" method="POST">
        <input type="hidden" name="id_service" value="<?php echo htmlspecialchars($id_service); ?>">
        <input type="hidden" name="type_service" value="<?php echo htmlspecialchars($type_service); ?>">

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="date">Date :</label>
        <input type="date" id="date" name="date" required>

        <button type="submit">Réserver</button>
    </form>
</body>
</html>
