<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe); /* Dégradé bleu */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Fond semi-transparent */
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            color: #333;
            text-align: center;
            font-size: 1.8em;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 1em;
            color: #555;
            text-align: left;
            display: block;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            box-sizing: border-box;
        }

        button {
            background-color: #4facfe; /* Bouton bleu */
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #00c3fe; /* Bleu plus clair au survol */
        }

        .error-message {
            color: red;
            font-size: 0.9em;
            margin-top: 10px;
        }

        .success-message {
            color: green;
            font-size: 0.9em;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Inscription</h1>
        <form action="../Controllers/C_inscription.php" method="POST">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" required>

            <label for="email">Email :</label>
            <input type="email" name="email" id="email" required>

            <label for="MDP">Mot de passe :</label>
            <input type="password" name="MDP" id="MDP" required>

            <label for="CMDP">Confirmer le mot de passe :</label>
            <input type="password" name="CMDP" id="CMDP" required>

            <button type="submit" name="submit">S'inscrire</button>
        </form>

        <!-- Affichage des messages d'erreur -->
        <?php if (!empty($erreurs)): ?>
            <div class="error-message">
                <?php foreach ($erreurs as $erreur): ?>
                    <p><?php echo $erreur; ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Affichage des messages de succès -->
        <?php if (!empty($messages)): ?>
            <div class="success-message">
                <?php foreach ($messages as $message): ?>
                    <p><?php echo $message; ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
