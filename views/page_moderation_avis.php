<?php
require "../Models/m_avis.php"; // Inclure le modèle des avis

// Récupérer tous les avis en attente de validation
$avis_en_attente = get_avis_en_attente();

foreach ($avis_en_attente as $avis) {
    echo "<div class='avis'>";
    echo "<p><strong>Utilisateur:</strong> " . $avis['nom'] . " " . $avis['prenom'] . "</p>";
    echo "<p><strong>Chambre:</strong> " . $avis['id_chambre'] . "</p>";
    echo "<p><strong>Commentaire:</strong> " . $avis['commentaire'] . "</p>";
    echo "<p><strong>Note:</strong> " . $avis['note'] . "</p>";
    
    // Boutons pour valider ou rejeter l'avis
    echo "<form action='moderer_avis.php' method='POST'>
            <input type='hidden' name='id_avis' value='" . $avis['id_avis'] . "'>
            <button type='submit' name='valider'>Valider</button>
            <button type='submit' name='rejeter'>Rejeter</button>
          </form>";
    echo "</div>";
}
?>
