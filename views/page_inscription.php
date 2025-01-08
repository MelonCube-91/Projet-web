<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - La Flèche d’Argent</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Inscription</h1>
    </header>

    <main>
        <form method="POST" action="../Controllers/C_inscription.php">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" required> <br>

            <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" id="prenom" required> <br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required> <br>

            <label for="MDP">Mot de passe:</label>
            <input type="password" name="MDP" id="MDP" required> <br>

            <label for="CMDP">Confirmer le mot de passe:</label>
            <input type="password" name="CMDP" id="CMDP" required> <br>

            <button type="submit" name="submit">S'inscrire</button>
        </form>

        <?php
        if (isset($data['erreurs']) && count($data['erreurs']) > 0) {
            foreach ($data['erreurs'] as $erreur) {
                echo "<div class='error'>$erreur</div>";
            }
        }

        if (isset($data['message'])) {
            echo "<div class='" . ($data['success'] ? 'success' : 'error') . "'>{$data['message']}</div>";
        }
        ?>
    </main>

</body>
</html>
