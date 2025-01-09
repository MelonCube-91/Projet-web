<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form action="../Controllers/C_connexion.php" method="POST">
        
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required>
        <br>

        <label for="MDP">Mot de passe :</label>
        <input type="password" name="MDP" id="MDP" required>
        <br>

        <button type="submit" name="connexion">Se connecter</button>
    </form>

    <?php if (!empty($erreurs)): ?>
        <ul>
            <?php foreach ($erreurs as $erreur): ?>
                <li style="color: red;"><?= htmlspecialchars($erreur); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
