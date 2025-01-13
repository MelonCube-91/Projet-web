<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="style/page_accueil.css">
  <title>La Flèche Bordeaux</title>
</head>

<header>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="logo">La Flèche d'Argent Bordeaux</div>
   
    <ul class="nav-links">
      <li><a href="page_toutes_les_chambres.php">Chambres</a></li>
      <li><a href="#services">Restaurant</a></li>
      <li><a href="../views/page_spa.php">Massages</a></li>

      <?php if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true): ?>
        <li><a href="page_profil.php">Mon Profil</a></li>
        <li><a href="../Controllers/logout.php">Déconnexion</a></li>
      <?php else: ?>
        <li><a href="../views/page_connexion.php">Connexion</a></li>
        <li><a href="../views/page_inscription.php">S'inscrire</a></li>
      <?php endif; ?>
    </ul>
  </nav>
</header>

<body>
  <section id="home" class="hero">
    <div class="hero-content">
      <h1>Bienvenue à La Flèche d'Argent !</h1>
      <p>Un séjour 5 étoiles au cœur de Bordeaux, où chaque instant devient un souvenir précieux.</p>
      <p>58 6a Place du Maucaillou, Bordeaux.</p>
      <button class="btn-primary" onclick="window.location.href='../views/page_toutes_les_chambres.php';">
        Réserver une chambre
      </button>
      <p>ou</p>
      <button class="btn-primary" onclick="window.location.href='page_restaurants.php';">Réserver une table</button>
    </div>
  </section>
</body>

<footer>
    <div class="footer">
      <p>© 2025 La flèche d'Argent. Tous droits réservés.</p>
    </div>
</footer>
</html>
<style>
  /* style/page_accueil.css */

/* Global Styles */
body {
    margin: 0;
    font-family: 'Arial', sans-serif;
    color: #333;
    background-color: #f9f9f9;
}

a {
    text-decoration: none;
    color: inherit;
}

ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

/* Navbar Styles */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #2c3e50;
    color: #fff;
    padding: 10px 20px;
}

.navbar .logo {
    font-size: 24px;
    font-weight: bold;
    letter-spacing: 2px;
}

.nav-links {
    display: flex;
    gap: 20px;
}

.nav-links li a {
    font-size: 16px;
    color: #ecf0f1;
    padding: 5px 10px;
    transition: color 0.3s, background-color 0.3s;
}

.nav-links li a:hover {
    color: #2c3e50;
    background-color: #ecf0f1;
    border-radius: 5px;
}

/* Hero Section */
.hero {
    background: url('../views/assets/07-one-only-royal_mirage_dubai-1.jpg') no-repeat center center/cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    text-align: center;
    padding: 20px;
}

.hero-content h1 {
    font-size: 48px;
    margin-bottom: 20px;
    text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.4);
}

.hero-content p {
    font-size: 18px;
    margin-bottom: 20px;
    text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.4);
}

.hero-content .btn-primary {
    background-color: #3498db;
    color: #fff;
    padding: 10px 20px;
    font-size: 18px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
}

.hero-content .btn-primary:hover {
    background-color: #2980b9;
    transform: scale(1.05);
}

/* Footer */
.footer {
    background-color: #2c3e50;
    color: #ecf0f1;
    text-align: center;
    padding: 10px 0;
    position: relative;
    bottom: 0;
    width: 100%;
    font-size: 14px;
}

/* Responsive Design */
@media screen and (max-width: 768px) {
    .navbar .logo {
        font-size: 20px;
    }

    .hero-content h1 {
        font-size: 36px;
    }

    .hero-content p {
        font-size: 16px;
    }

    .hero-content .btn-primary {
        font-size: 16px;
        padding: 8px 16px;
    }
}

</style>