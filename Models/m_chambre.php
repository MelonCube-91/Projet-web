<?php
function get_chambres_disponibles() {
    require "db_connect.php";
    $stmt = $connect->prepare("SELECT * FROM chambre WHERE disponibilité = 1");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function ajouter_chambre($type, $prix, $description, $disponibilité, $nombre_total) {
    require "db_connect.php";
    $stmt = $connect->prepare("INSERT INTO chambre (type, prix, description, disponibilité, nombre_total) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$type, $prix, $description, $disponibilité, $nombre_total]);
    return true;
}

// Fonction pour récupérer toutes les chambres
function get_toutes_les_chambres() {
    require "db_connect.php";  // Assurez-vous que le fichier db_connect.php existe et est correctement configuré.
    
    try {
        // Préparer la requête SQL
        $stmt = $connect->prepare("SELECT * FROM chambre");
        $stmt->execute();
        // Récupérer les résultats sous forme de tableau associatif
        $chambres = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Retourner les résultats
        return $chambres;
    } catch (PDOException $e) {
        // Si une erreur survient, afficher un message d'erreur
        echo "Erreur lors de la récupération des chambres : " . $e->getMessage();
        return [];
    }
}


function modifier_chambre($id_chambre, $type, $prix, $description, $disponibilité, $nombre_total) {
    require "db_connect.php";
    $stmt = $connect->prepare("UPDATE chambre SET type = ?, prix = ?, description = ?, disponibilité = ?, nombre_total = ? WHERE id_chambre = ?");
    $stmt->execute([$type, $prix, $description, $disponibilité, $nombre_total, $id_chambre]);
    return true;
}

function supprimer_chambre($id_chambre) {
    require "db_connect.php";
    $stmt = $connect->prepare("DELETE FROM chambre WHERE id_chambre = ?");
    $stmt->execute([$id_chambre]);
    return true;
}


?>
