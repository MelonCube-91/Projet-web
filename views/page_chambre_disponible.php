<!DOCTYPE html>
<html>
<head>
    <title>Chambres disponibles</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Chambres disponibles</h1>
    <div class="chambres">
        <?php if (empty($chambres)): ?>
            <p>Aucune chambre disponible pour le moment.</p>
        <?php else: ?>
            <?php foreach ($chambres as $chambre): ?>
                <div class="chambre">
                    <h2>Type : <?= htmlspecialchars($chambre['type']) ?></h2>
                    <p>Prix : <?= htmlspecialchars($chambre['prix']) ?> €</p>
                    <p>Description : <?= htmlspecialchars($chambre['description']) ?></p>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>
</html>
