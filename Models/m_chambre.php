<?php

class M_Chambres {
    private $db;

    public function __construct() {
        global $connect; // Utiliser la connexion définie dans db_connect.php
        $this->db = $connect;
    }

    // Récupère toutes les chambres disponibles
    public function getChambresDisponibles() {
        $sql = "SELECT * FROM chambre WHERE disponibilité = 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Récupère une chambre spécifique par ID
    public function getChambreById($idChambre) {
        $sql = "SELECT * FROM chambre WHERE id_chambre = :id_chambre";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id_chambre', $idChambre, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>



