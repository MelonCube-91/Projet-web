<?php
session_start();

if (isset($_GET['index'])) {
    $index = (int)$_GET['index'];

    // Supprimer l'élément du panier
    if (isset($_SESSION['panier'][$index])) {
        unset($_SESSION['panier'][$index]);
        $_SESSION['panier'] = array_values($_SESSION['panier']); // Réindexer le tableau
    }
}

header("Location: page_panier.php");
exit;
?>
