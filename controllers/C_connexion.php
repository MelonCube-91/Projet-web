<?php
require "../Models/m_utilisateur.php";

session_start();

// Afficher la page par défaut
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    require "../Views/page_Connexion.php";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["connexion"])) {
    $email = trim($_POST["email"]);
    $motdepasse = $_POST["MDP"];
    $erreurs = array();

    // Vérification des champs
    if (empty($email) || empty($motdepasse)) {
        array_push($erreurs, "Veuillez remplir tous les champs.");
    }

    // Si pas d'erreur, vérifier l'utilisateur
    if (empty($erreurs)) {
        $utilisateur = identification_utilisateur($email);

        if (!$utilisateur) {
            array_push($erreurs, "Votre email n'existe pas.");
        } else {
            if (password_verify($motdepasse, $utilisateur["motdepasse"])) {
                require "../views/page_accueil.php";
                exit();
            } else {
                array_push($erreurs, "Mot de passe incorrect.");
            }
        }
    }

    // Si des erreurs, passez-les à la vue
    require "../Views/page_Connexion.php";
}
?>