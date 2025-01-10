<?php
require 'Db_connect.php'; // Fichier de connexion à la base de données

class M_Reservation {
    private $db;

    public function __construct() {
        global $connect; // Connexion à la base de données
        $this->db = $connect;
    }

    /**
     * Ajouter une réservation
     * @param int $idService : ID du service réservé (chambre, massage, plat)
     * @param string $typeService : Type du service (chambre, massage, plat)
     * @param string $dateReservation : Date de la réservation
     * @param string $nom : Nom de l'utilisateur
     * @param string $prenom : Prénom de l'utilisateur
     * @param string $email : Email de l'utilisateur
     * @return bool : Résultat de l'opération
     */
    public function ajouterReservation($idService, $typeService, $dateReservation, $nom, $prenom, $email) {
        // Préparer la requête pour insérer une réservation
        $sql = "INSERT INTO reservation (id_service, type_service, date_reservation, nom, prenom, email)
                VALUES (:id_service, :type_service, :date_reservation, :nom, :prenom, :email)";
        $stmt = $this->db->prepare($sql);

        // Lier les paramètres
        $stmt->bindParam(':id_service', $idService);
        $stmt->bindParam(':type_service', $typeService);
        $stmt->bindParam(':date_reservation', $dateReservation);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);

        // Exécuter la requête
        return $stmt->execute();
    }

    /**
     * Vérifier si un service existe
     * @param int $idService : ID du service
     * @param string $typeService : Type du service (chambre, massage)
     * @return bool : Résultat de la vérification
     */
    public function verifierService($idService, $typeService) {
        // Déterminer la table cible selon le type de service
        $table = $typeService === 'chambre' ? 'chambre' : ($typeService === 'massage' ? 'massage' : null);
        if (!$table) {
            return false; // Retourner faux si le type n'est pas valide
        }

        // Vérifier si le service existe dans la table correspondante
        $sql = "SELECT COUNT(*) FROM $table WHERE id_{$typeService} = :id_service";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id_service', $idService);
        $stmt->execute();

        return $stmt->fetchColumn() > 0;
    }

    /**
     * Récupérer toutes les réservations d'un utilisateur
     * @param string $email : Email de l'utilisateur
     * @return array : Liste des réservations
     */
    public function recupererReservationsUtilisateur($email) {
        $sql = "SELECT * FROM reservation WHERE email = :email ORDER BY date_reservation DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
