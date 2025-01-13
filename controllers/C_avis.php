<?php
require "../Models/m_avis.php"; 

// Vérifier si le formulaire a été soumis
if (isset($_POST['ajouter_avis'])) {
    // Récupérer les données du formulaire
    $id_utilisateur = $_POST['id_utilisateur']; 
    $id_chambre = $_POST['id_chambre'];
    $commentaire = $_POST['commentaire'];
    $note = $_POST['note'];

    // Validation de la note et du commentaire
    if (!empty($commentaire) && $note >= 1 && $note <= 5) {
        // Appeler la fonction pour ajouter l'avis
        $resultat = ajouter_avis($id_utilisateur, $id_chambre, $commentaire, $note);
        
        if ($resultat) {
            echo "Avis ajouté avec succès!";
        } else {
            echo "Une erreur s'est produite.";
        }
    } else {
        echo "Veuillez remplir tous les champs correctement.";
    }
}

// Récupérer tous les avis
$avis = get_all_avis();

// Charger la vue pour afficher les avis
require"../views/page_avis.php";
?>

?>
