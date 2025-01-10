<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            color: rgb(174, 133, 83); /* Couleur de l'en-tête */
        }

        label {
            font-size: 16px;
            color: #555;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 15px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        input[type="email"]:focus, input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #FFD700; /* Bouton jaune */
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #e6c100; /* Couleur plus foncée au survol */
        }

        .error {
            color: red;
            margin-top: 10px;
            font-size: 14px;
        }

        .form-footer {
            text-align: center;
            margin-top: 20px;
        }

        .form-footer a {
            color: #007bff;
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
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

            <?php if (!empty($erreurs)): ?>
                <div class="error">
                    <ul>
                        <?php foreach ($erreurs as $erreur): ?>
                            <li><?= htmlspecialchars($erreur); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </form>

        <div class="form-footer">
            <p>Pas encore de compte ? <a href="inscription.php">Inscrivez-vous</a></p>
        </div>
    </div>
</body>
</html>
