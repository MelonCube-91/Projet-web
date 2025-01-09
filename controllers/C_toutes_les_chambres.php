<?php
require "../Models/m_chambre.php";

$chambres = get_toutes_les_chambres();

require "../Views/page_toutes_les_chambres.php";
?>
