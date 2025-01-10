<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        }

        h1 {
            color: #333;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            background-color: #FFD700; /* Bouton jaune */
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            font-size: 1.2em;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #e6c100; /* Jaune plus foncé au survol */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Vous êtes bien inscrit(e)</h1>
        <a href="../controllers/C_connexion.php">Se Connecter</a>
    </div>
</body>
</html>
