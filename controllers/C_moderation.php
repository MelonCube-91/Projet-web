<?php
require "../Models/m_avis.php";  // Inclure le modèle des avis

// Supposons que vous récupérez les avis et les utilisateurs à afficher
$avis = get_all_avis(); // Récupérer tous les avis

// Pour chaque avis, récupérez les informations de l'utilisateur
foreach ($avis as &$avis_item) {
    $id_utilisateur = $avis_item['id_utilisateur'];  // L'id de l'utilisateur qui a posté l'avis
    $utilisateur = get_utilisateur_by_id($id_utilisateur);  // Fonction pour récupérer l'utilisateur
    $avis_item['nom'] = $utilisateur['nom'];  // Ajouter le nom de l'utilisateur à l'avis
    $avis_item['prenom'] = $utilisateur['prenom'];  // Ajouter le prénom de l'utilisateur à l'avis
}

// Passer les avis et leurs informations à la vue
require "../Views/page_moderation_avis.php"; 
?>
