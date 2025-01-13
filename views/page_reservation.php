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
<style>
    /* Style général du formulaire */
form {
  width: 80%;
  max-width: 600px;
  margin: 20px auto;
  padding: 20px;
  background-color: #f4f4f4;
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

form label {
  font-size: 16px;
  margin-bottom: 8px;
  display: block;
}

form input, form select {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

form input[type="date"], form input[type="email"], form input[type="text"], form input[type="number"], form select {
  display: block;
  width: 100%;
}

form button {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  width: 100%;
  transition: background-color 0.3s ease;
}

form button:hover {
  background-color: #45a049;
}

/* Style des éléments dans le formulaire */
form input:focus, form select:focus {
  border-color: #4CAF50;
  outline: none;
}

form input[type="email"], form input[type="text"], form input[type="number"] {
  background-color: #fff;
}

form .form-group {
  margin-bottom: 15px;
}

form .form-group input {
  width: calc(50% - 10px);
  margin-right: 10px;
}

form .form-group input:last-child {
  margin-right: 0;
}


</style>