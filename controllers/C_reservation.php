<?php
require '../models/M_Reservation.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $typeService = $_POST['type_service'];
    $idService = $_POST['id_service'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $dateReservation = $_POST['date_reservation'];

    $reservationModel = new M_Reservation();

    $result = $reservationModel->ajouterReservation($idService, $typeService, $dateReservation, $nom, $prenom, $email);

    if ($result) {
        $_SESSION['success'] = "Réservation effectuée avec succès.";
    } else {
        $_SESSION['error'] = "Erreur lors de la réservation.";
    }

    header("Location: page_toutes_les_chambres_disponibles.php");
    exit();
}
?>
