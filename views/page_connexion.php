<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #ff7e5f, #feb47b); /* Dégradé de couleurs douces */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8); /* Fond semi-transparent */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            color: #333;
            font-size: 2em;
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
            background-color: #FFD700; /* Bouton jaune */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #e6c100; /* Jaune plus foncé au survol */
        }

        .error-message {
            color: red;
            font-size: 0.9em;
            margin-top: 10px;
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
            <p>pas de compte </p>
            <a href="../views/page_ins">sincrisre</a>
        </form>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="error-message"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
        <?php endif; ?>
    </div>
</body>
</html>
