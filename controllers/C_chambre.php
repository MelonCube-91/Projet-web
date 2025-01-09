<?php
require "../Models/m_chambre.php";

// Récupérer les chambres disponibles
$chambres = get_chambres_disponibles();

// Charger la vue
require "../Views/page_chambre_disponible.php";

?>
