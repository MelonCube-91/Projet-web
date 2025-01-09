<?php
function ajouter_message_contact($nom, $prenom, $email, $message) {
    try {
        require "db_connect.php"; // Connexion à la base de données
        $stmt = $connect->prepare("
            INSERT INTO contact (nom, prénom, email, message, date_contact) 
            VALUES (:nom, :prenom, :email, :message, NOW())
        ");
        $stmt->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':message' => $message
        ]);
        return true;
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
        return false;
    }
}
?>
