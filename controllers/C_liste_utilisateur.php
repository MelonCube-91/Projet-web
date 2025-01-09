<?php
require "../Models/m_utilisateur.php";

// Récupérer tous les utilisateurs
$utilisateurs = get_all_utilisateurs();

// Inclure la vue
require "../Views/page_liste_utilisateurs.php";
?>
