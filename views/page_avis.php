<?php
session_start(); // Vérifiez que la session est démarrée
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tous les Avis</title>
  <link rel="stylesheet" href="style.css"> <!-- Si vous avez un fichier CSS externe -->
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="page_accueil.php">Accueil</a></li>
        <li><a href="page_toutes_les_chambres.php">Chambres</a></li>
        <li><a href="page_avis.php">Avis</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <h1>Tous les avis</h1>
    
    <?php if (empty($avis)): ?>
      <p>Aucun avis n'a été ajouté pour le moment.</p>
    <?php else: ?>
      <div class="avis-container">
        <?php foreach ($avis as $avis_item): ?>
          <div class="avis-item">
            <h3>Avis sur la <?php echo htmlspecialchars($avis_item['chambre_nom']); ?> par <?php echo htmlspecialchars($avis_item['utilisateur_nom']); ?></h3>
            <p><strong>Note:</strong> <?php echo htmlspecialchars($avis_item['note']); ?> / 5</p>
            <p><strong>Commentaire:</strong> <?php echo nl2br(htmlspecialchars($avis_item['commentaire'])); ?></p>
            <p><strong>Date de l'avis:</strong> <?php echo htmlspecialchars($avis_item['date_avis']); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </main>

  <footer>
    <p>© 2025 La Flèche d'Argent. Tous droits réservés.</p>
  </footer>
</body>
</html>
<style>
    /* Container des avis */
.avis-container {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  padding: 20px;
  background-color: #f9f9f9;
}

.avis-item {
  background-color: white;
  border-radius: 5px;
  padding: 20px;
  margin: 10px 0;
  width: 100%;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.avis-item h3 {
  font-size: 18px;
  margin-bottom: 10px;
}

.avis-item p {
  font-size: 16px;
  margin-bottom: 10px;
}

footer {
  text-align: center;
  padding: 10px;
  background-color: #333;
  color: white;
}

footer p {
  margin: 0;
}

</style>