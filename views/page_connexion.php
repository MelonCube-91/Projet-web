<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <div class="container">
        <h1>Connexion</h1>
        <form action="../Controllers/C_connexion.php" method="POST">
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" required>

            <label for="MDP">Mot de passe :</label>
            <input type="password" name="MDP" id="MDP" required>

            <button type="submit" name="connexion">Se connecter</button>
            <p>pas de compte </p>
            <a href="../views/page_ins">sincrisre</a>
        </form>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="error-message"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
        <?php endif; ?>
    </div>
</body>
</html>
