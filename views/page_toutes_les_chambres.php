<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hôtel de Luxe - Chambres</title>
  <link rel="stylesheet" href="style/chambres.css">
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

<section id="chambres" class="chambres">
  <h2>Nos Chambres</h2>
  <div class="room-container">
    <!-- Première rangée -->
    <div class="room">
      <img src="style/chambresupérieur.jpg" alt="Chambre Classique">
      <h3>Chambre Classique</h3>
      <p>Un espace raffiné avec vue sur la ville.</p>
      <p>À partir de 500€ / Nuit</p>
      <button class="btn-secondary">Réserver</button>
    </div>
    <div class="room">
      <img src="style/chambreexécutive.jpg" alt="Chambre Confort">
      <h3>Chambre Confort</h3>
      <p>Pour les amoureux d’authenticité.</p>
      <p>À partir de 1000€ / Nuit</p>
      <button class="btn-secondary">Réserver</button>
    </div>
   

    <!-- Deuxième rangée -->
    <div class="room">
      <img src="style/chambregranddeluxe.jpg" alt="Chambre Standing">
      <h3>Chambre Standing </h3>
      <p>Une échappée dans l’art de vivre à la française.</p>
      <p>À partir de 2500€ / Nuit</p>

      <button class="btn-secondary">Réserver</button>
    </div>
    <div class="room">
      <img src="style/juniorsuiteexecutive.jpg" alt="Suite ">
      <h3>Suite </h3>
      <p>Un charme très bordelais pour cette suite.</p>
      <p>À partir de 2950€ / Nuit</p>

      <button class="btn-secondary">Réserver</button>
    </div>
 
  </div>
</section>


  <footer class="footer">
    <p>© 2025 Hôtel Étoile d'Or. Tous droits réservés.</p>
  </footer>
</body>
</html>