<form action="../controllers/C_avis.php" method="POST">
    <label for="id_chambre">Chambre:</label>
    <select name="id_chambre" id="id_chambre">
        <!-- Liste des chambres à afficher ici -->
    </select>

    <label for="commentaire">Commentaire:</label>
    <textarea name="commentaire" id="commentaire" required></textarea>

    <label for="note">Note (1 à 5):</label>
    <input type="number" name="note" min="1" max="5" required>

    <button type="submit" name="ajouter_avis">Ajouter l'avis</button>
</form>
