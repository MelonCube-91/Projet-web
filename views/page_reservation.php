<h2>Réserver une chambre</h2>
<form method="POST" action="../controllers/C_reservation.php">
    <label for="chambre_id">Type de chambre</label>
    <select id="chambre_id" name="chambre_id">
        <option value="1">Classique</option>
        <option value="2">Confort</option>
        <option value="3">Standing</option>
        <option value="4">Suite</option>
    </select>

    <label for="date_debut">Date d'arrivée</label>
    <input type="date" id="date_debut" name="date_debut" required>

    <label for="date_fin">Date de départ</label>
    <input type="date" id="date_fin" name="date_fin" required>

    <button type="submit" name="reserver">Réserver</button>
</form>
