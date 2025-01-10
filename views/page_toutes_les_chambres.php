<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toutes les Chambres Disponibles</title>
</head>
<body>
    <h1>Nos Chambres Disponibles</h1>

    <?php if (isset($_SESSION['success'])): ?>
        <div style="color: green;"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></div>
    <?php endif; ?>

    <div class="chambres">
        <?php foreach ($chambres as $chambre): ?>
            <div class="chambre">
                <h2><?= htmlspecialchars($chambre['type']); ?></h2>
                <p><?= htmlspecialchars($chambre['description']); ?></p>
                <p>Prix : <?= htmlspecialchars($chambre['prix']); ?> €</p>
                <a href="C_chambres.php?action=reserver&id=<?= $chambre['id_chambre']; ?>">Réserver</a>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
