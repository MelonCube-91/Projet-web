<?php

require "..\Models\m_utilisateur.php";

if (isset($_POST["submit"])) {

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $motdepasse = $_POST["MDP"];
    $confirm_motdepasse = $_POST["CMDP"];
    $erreurs = array();
    $messages = array();

    $hash_motdepasse = password_hash($motdepasse, PASSWORD_DEFAULT);

    if (empty($nom) || empty($prenom) || empty($email) || empty($motdepasse) || empty($confirm_motdepasse)) {
        array_push($erreurs,"vous devez remplir tout les elements");
    } 
    if (strlen($motdepasse)<8) {
        array_push($erreurs,"Le mot de passe doit contenir au moins 8 caractères ");
    }
    if ($motdepasse !== $confirm_motdepasse) {
        array_push($erreurs,"Le mot de passe ne correspond pas");
    }

    if (count($erreurs)>0) {
        require "..\Views\page_inscription.php";
       
    } else { 
        $utilisateur = ajouter_utilisateur($nom,$prenom,$email,$hash_motdepasse);
        require"../Views/confirmation.php";
    }
}
    else{
        require "..\Views\page_inscription.php";

    }
?>
    
    

