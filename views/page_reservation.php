<form action="../controllers/C_reservation.php" method="POST">
    <label for="type_service">Type de service :</label>
    <select name="type_service" id="type_service" required>
        <option value="chambre">Chambre</option>
        <option value="massage">Massage</option>
        <option value="plat">Plat</option>
    </select>

    <label for="id_service">ID du service :</label>
    <input type="number" name="id_service" id="id_service" required>

    <label for="date_reservation">Date de réservation :</label>
    <input type="date" name="date_reservation" id="date_reservation" required>

    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" required>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" required>

    <label for="email">Email :</label>
    <input type="email" name="email" id="email" required>

    <button type="submit">Réserver</button>
</form>
