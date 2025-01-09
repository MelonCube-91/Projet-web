<?php
function ajouter_avis($id_utilisateur, $id_chambre, $commentaire, $note) {
    require 'db_connect.php'; 

    $stmt = $connect->prepare("INSERT INTO avis (id_utilisateur, id_chambre, commentaire, note) VALUES (?, ?, ?, ?)");
    return $stmt->execute([$id_utilisateur, $id_chambre, $commentaire, $note]);
}

function moderer_avis($id_avis, $statut) {
    require 'db_connect.php';
    
    $stmt = $connect->prepare("UPDATE avis SET statut = ? WHERE id_avis = ?");
    return $stmt->execute([$statut, $id_avis]);
}

function get_avis_en_attente() {
    require 'db_connect.php';
    
    $stmt = $connect->prepare("SELECT * FROM avis WHERE statut = 'en attente'");
    $stmt->execute();
    return $stmt->fetchAll();
}

function get_utilisateur_by_id($id_utilisateur) {
    require "db_connect.php";
    $stmt = $connect->prepare("SELECT nom, prenom FROM Utilisateur WHERE id_utilisateur = ?");
    $stmt->execute([$id_utilisateur]);
    $result = $stmt->fetch();
    return $result;
}

function get_all_avis() {
    require "db_connect.php"; // Connexion à la base de données
    $stmt = $connect->prepare("SELECT * FROM avis"); // Requête pour récupérer tous les avis
    $stmt->execute(); // Exécuter la requête
    $avis = $stmt->fetchAll(); // Récupérer tous les résultats sous forme de tableau
    return $avis; // Retourner les avis
}
?>

?>
