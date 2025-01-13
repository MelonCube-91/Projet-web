<?php
require 'db_connect.php'; // Fichier de connexion à la base de données

function ajouter_avis($id_utilisateur, $id_chambre, $commentaire, $note) {
    global $connect; // Connexion PDO

    // SQL d'insertion
    $sql = "INSERT INTO avis (id_utilisateur, id_chambre, commentaire, note) 
            VALUES (:id_utilisateur, :id_chambre, :commentaire, :note)";

    // Préparer la requête
    $stmt = $connect->prepare($sql);
    
    // Lier les paramètres
    $stmt->bindParam(':id_utilisateur', $id_utilisateur, PDO::PARAM_INT);
    $stmt->bindParam(':id_chambre', $id_chambre, PDO::PARAM_INT);
    $stmt->bindParam(':commentaire', $commentaire, PDO::PARAM_STR);
    $stmt->bindParam(':note', $note, PDO::PARAM_INT);

    // Exécuter la requête
    try {
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        // Gérer l'erreur si l'insertion échoue
        echo "Erreur lors de l'ajout de l'avis: " . $e->getMessage();
        return false;
    }
}

function get_all_avis() {
    global $connect; // Assurez-vous que la connexion est bien définie dans db_connect.php
    
    try {
        // Récupérer tous les avis
        $sql = "SELECT a.id_avis, a.commentaire, a.note, a.date_avis, c.nom AS chambre_nom, u.nom AS utilisateur_nom 
                FROM avis a
                JOIN chambre c ON a.id_chambre = c.id_chambre
                JOIN utilisateur u ON a.id_utilisateur = u.id_utilisateur
                ORDER BY a.date_avis DESC"; // Tri par date d'avis
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Récupère tous les résultats sous forme de tableau associatif
    } catch (PDOException $e) {
        echo "Erreur lors de la récupération des avis : " . $e->getMessage();
    }
}
?>

?>
