<?php
// Code PHP pour gérer les erreurs (si nécessaire)
$erreurs_connexion = [];
$erreurs_inscription = [];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="style/connexion.css">
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

    <?php if (isset($_SESSION['error'])): ?>
        <div style="color: red;"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
    <?php endif; ?>
</body>
</html>