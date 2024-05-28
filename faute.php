<?php

error_reporting(E_ALL);

$kkty = "incorrect"; // Variable non définie intentionnellement
$username = "root";
$password = "Lazerty_94";
$dbname = "bot";

// Définition du gestionnaire d'erreurs pour capturer les erreurs de variable non définie
set_error_handler(function ($errno, $errstr) {
    if ($errno === E_NOTICE && strpos($errstr, 'Undefined variable') !== false) {
        throw new ErrorException("Variable non définie : " . $errstr);
    } else {
        return false;
    }
});

try {
    $dsn = "mysql:host=$kk;dbname=$dbname;charset=utf8mb4";
    
    $conn = new PDO($dsn, $username, $password);
    // Vérifier si la connexion a réussi
    if ($conn) {
        echo 'Connexion à la base de données établie';
    } else {
        throw new PDOException("Erreur lors de la connexion à la base de données.");
    }
} catch (Exception $e) {
    // Gérer l'exception ici
    echo "Erreur : " . $e->getMessage();
}
