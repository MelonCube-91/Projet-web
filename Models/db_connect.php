<?php

require ("../config.php");

try {
  $connect = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
  echo "La connexion a échoué :" . $e->getMessage();
};

?>