<?php
function ajouter_reservation($id_service, $type_service, $date_reservation, $nom, $prenom, $email) {
    require "db_connect.php";
    try {
        $stmt = $connect->prepare("
            INSERT INTO reservation (id_service, type_service, date_reservation, nom, prenom, email)
            VALUES (:id_service, :type_service, :date_reservation, :nom, :prenom, :email)
        ");
        $stmt->execute([
            ':id_service' => $id_service,
            ':type_service' => $type_service,
            ':date_reservation' => $date_reservation,
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email
        ]);
        echo "Réservation effectuée avec succès !";
    } catch (PDOException $e) {
        echo "Erreur lors de la réservation : " . $e->getMessage();
    }
}

function get_reservations_par_type($type_service) {
    require "db_connect.php";
    $stmt = $connect->prepare("SELECT * FROM reservation WHERE type_service = :type_service");
    $stmt->execute([':type_service' => $type_service]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function get_toutes_les_reservations() {
    require "db_connect.php";
    $stmt = $connect->query("SELECT * FROM reservation");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
