<?php

function get_tous_les_massages() {
    require "db_connect.php"; // Connexion à la base de données
    $stmt = $connect->prepare("SELECT * FROM massage");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC); // Récupère tous les massages sous forme de tableau associatif
}
?>
