<?php

require ("../config.php");


try {
    $connect = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connexion à la base de données réussie !";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
