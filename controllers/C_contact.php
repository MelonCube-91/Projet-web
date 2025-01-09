<?php
require "../Models/m_contact.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validation des champs
    if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($message)) {
        // Enregistrement du message dans la base de données
        $success = ajouter_message_contact($nom, $prenom, $email, $message);

        if ($success) {
            $message_success = "Votre message a été envoyé avec succès.";
        } else {
            $message_error = "Une erreur s'est produite. Veuillez réessayer.";
        }
    } else {
        $message_error = "Veuillez remplir tous les champs.";
    }
}

// Inclure la vue pour afficher le formulaire de contact
require "../Views/page_contact.php";
?>
