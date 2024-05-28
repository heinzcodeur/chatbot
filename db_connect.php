<?php
session_start();
// Définir le niveau de rapport d'erreur pour signaler toutes les erreurs
error_reporting(E_ALL);

$hollst = "localhost"; // Variable non définie intentionnellement
$username = "root";
$password = "Lazerty_94";
$dbname = "bot";

// Définir un gestionnaire d'erreurs personnalisé pour intercepter les avertissements PHP
set_error_handler(function ($errno, $errstr) {
    if ($errno === E_WARNING) {
        // die('bim');
        throw new ErrorException($errstr);
    }
});

try {
    // Utilisation de la variable non définie
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    
    $conn = new PDO($dsn, $username, $password);
    // Vérifier si la connexion a réussi
    // if ($conn) {
    //     echo 'Connexion à la base de données établie';
    // } else {
    //     throw new PDOException("Erreur lors de la connexion à la base de données.");
    // }
} catch (PDOException $e) {
    // Gérer les exceptions PDO ici
    echo "Erreur PDO : " . $e->getMessage();
} catch (ErrorException $e) {
    // Gérer les exceptions d'avertissement PHP ici
    $_SESSION['error'] = "Avertissement PHP : " . $e->getMessage();
}
