<?php
session_start(); // Pour vérifier si l'utilisateur est connecté
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajouter un avis</title>
</head>
<body>
  <h1>Ajouter un avis pour la chambre</h1>

  <!-- Formulaire d'ajout d'avis -->
  <form action="../controllers/C_avis.php" method="POST">
    <label for="id_chambre">Chambre:</label>
    <select name="id_chambre" id="id_chambre">
        <!-- Liste des chambres à afficher ici -->
        <option value="1">Chambre 1</option>
        <option value="2">Chambre 2</option>
        <option value="3">Chambre 3</option>
        <option value="4">Chambre 4</option>
        <!-- Ajoutez ici d'autres chambres -->
    </select>

    <label for="commentaire">Commentaire:</label>
    <textarea name="commentaire" id="commentaire" required></textarea>

    <label for="note">Note (1 à 5):</label>
    <input type="number" name="note" min="1" max="5" required>

    <button type="submit" name="ajouter_avis">Ajouter l'avis</button>
  </form>

  <?php if (isset($_SESSION['message'])): ?>
      <p><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></p>
  <?php endif; ?>

</body>
</html>
<style>
    /* Général */
body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
}

h1 {
  text-align: center;
  margin-top: 50px;
  color: #333;
}

/* Conteneur du formulaire */
form {
  width: 50%;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  margin-top: 30px;
}

label {
  display: block;
  font-weight: bold;
  margin: 15px 0 5px;
  color: #333;
}

select, textarea, input[type="number"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

textarea {
  resize: vertical;
  height: 100px;
}

button {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width: 100%;
}

button:hover {
  background-color: #45a049;
}

/* Message de confirmation */
p {
  text-align: center;
  font-size: 18px;
  font-weight: bold;
  color: green;
  margin-top: 20px;
}

/* Style des erreurs (si nécessaire) */
.error {
  color: red;
  text-align: center;
  font-size: 18px;
  font-weight: bold;
  margin-top: 20px;
}

</style>