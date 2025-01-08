<?php
function ajouter_reservation($id_utilisateur, $id_chambre, $date_arrivee, $date_depart, $prix_total) {
    require "db_connect.php";
    
    $stmt = $connect->prepare("INSERT INTO réservation (id_utilisateur, id_chambre, date_arrivée, date_départ, statut, prix_total) 
                               VALUES (?, ?, ?, ?, ?, ?)");
    
    $statut = 'En attente';  
    $stmt->execute([$id_utilisateur, $id_chambre, $date_arrivee, $date_depart, $statut, $prix_total]);

    if ($stmt->rowCount() > 0) {
        error_log("Réservation ajoutée avec succès");
        return true;
    } else {
        error_log("Erreur lors de l'ajout de la réservation");
        return false;
    }
}

?>