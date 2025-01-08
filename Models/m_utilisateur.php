<?php

function ajouter_utilisateur($nom,$prenom,$email,$hash_motdepasse){
        require "db_connect.php";
        $stmt = $connect->prepare("INSERT INTO Utilisateur (nom,prenom,email,motdepasse) VALUES (?,?,?,?)");
        $stmt->execute(array($nom,$prenom,$email,$hash_motdepasse));
        return true;
};

function identification_utilisateur($email){
    require "db_connect.php";
    $stmt = $connect->prepare("SELECT * FROM Utilisateur WHERE email = ?");
    $stmt->execute([$email]);
    $utilisateur = $stmt->fetch();
    return $utilisateur ?: false;
}


function verification_utilisateur($email){
    require "db_connect.php";
    $stmt = $connect->prepare("SELECT * FROM Utilisateur WHERE email = ?");
    $stmt->execute(array($email));
    $result = $stmt->fetch();
    return $result;
};



