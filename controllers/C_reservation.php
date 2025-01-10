<?php
require "../Models/m_reservation.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_service = (int) $_POST['id_service'];
    $type_service = $_POST['type_service'];
    $date = $_POST['date'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

    $reservation_success = ajouter_reservation($id_service, $type_service, $date, $nom, $prenom, $email);

    if ($reservation_success) {
        echo "Réservation effectuée avec succès pour un(e) " . htmlspecialchars($type_service) . ".";
    } else {
        echo "Erreur lors de la réservation. Veuillez réessayer.";
    }
}
?>
