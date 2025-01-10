<?php
session_start();
require "../Models/m_reservation.php";

if (!empty($_SESSION['panier'])) {
    foreach ($_SESSION['panier'] as $reservation) {
        ajouter_reservation(
            $reservation['id_service'],
            $reservation['type_service'],
            $reservation['date'],
            $reservation['nom'],
            $reservation['prenom'],
            $reservation['email']
        );
    }

    // Vider le panier
    $_SESSION['panier'] = [];

    echo "Toutes les réservations ont été confirmées avec succès.";
    echo "<br><a href='page_toutes_les_chambres.php'>Retour à la liste des chambres</a>";
} else {
    echo "Aucune réservation à confirmer.";
}
?>
