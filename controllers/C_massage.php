<?php
require "../Models/m_massage.php"; // Inclure le modèle des massages

$massages = get_tous_les_massages(); // Récupérer tous les massages

require "../Views/page_massage.php"; // Inclure la vue pour afficher les massages
?>
