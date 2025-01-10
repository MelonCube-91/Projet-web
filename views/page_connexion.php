<?php
// Code PHP pour gérer les erreurs (si nécessaire)
$erreurs_connexion = [];
$erreurs_inscription = [];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/connexion.css">
    <title>Connexion & Inscription | La Flèche Bordeaux</title>
</head>

<body>
<header>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="logo">La Flèche d'Argent Bordeaux</div>
   
    <ul class="nav-links">
      <li><a href="page_accueil.php">Accueil</a></li>
      <li><a href="page_toutes_les_chambres.php">Chambres</a></li>
      <li><a href="#services">Restaurant</a></li>
      <li><a href="#contact">Massages</a></li>
     
      <li><a href="page_connexion.php">Connexion</a></li>
    </ul>
  </nav>

</header>
    <!-- Section Connexion et Inscription -->
    <section id="connexion-inscription">
        <div class="form-container">
            <!-- Formulaire de Connexion -->
            <div class="form-box">
                <h2>Connexion</h2>
                <form action="../Controllers/C_connexion.php" method="POST">
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" placeholder="Entrez votre email" required>

                    <label for="MDP">Mot de passe :</label>
                    <input type="password" name="MDP" id="MDP" placeholder="Entrez votre mot de passe" required>

                    <button type="submit" name="connexion">Se connecter</button>
                </form>

                <?php if (!empty($erreurs_connexion)): ?>
                    <ul class="errors">
                        <?php foreach ($erreurs_connexion as $erreur): ?>
                            <li><?= htmlspecialchars($erreur); ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>

            <!-- Formulaire d'Inscription -->
            <div class="form-box">
                <h2>Inscription</h2>
                <form action="../Controllers/C_inscription.php" method="POST">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom" placeholder="Entrez votre nom" required>

                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom" required>

                    <label for="email_inscription">Email :</label>
                    <input type="email" name="email_inscription" id="email_inscription" placeholder="Entrez votre email" required>

                    <label for="mdp_inscription">Mot de passe :</label>
                    <input type="password" name="mdp_inscription" id="mdp_inscription" placeholder="Entrez votre mot de passe" required>

                    <label for="confirm_mdp">Confirmer mot de passe :</label>
                    <input type="password" name="confirm_mdp" id="confirm_mdp" placeholder="Confirmez votre mot de passe" required>

                    <button type="submit" name="inscription">S'inscrire</button>
                </form>

                <?php if (!empty($erreurs_inscription)): ?>
                    <ul class="errors">
                        <?php foreach ($erreurs_inscription as $erreur): ?>
                            <li><?= htmlspecialchars($erreur); ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer">
            <p>© 2025 La flèche d'Argent. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>