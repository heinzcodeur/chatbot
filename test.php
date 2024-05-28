<?php

$serverrrrname = "localhost"; // Variable avec une faute de frappe
$username = "root";
$password = "Lazerty_94";
$dbname = "bot";

function connectDatabase($servername, $username, $password, $dbname)
{
    $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8mb4";

    try {
        $conn = new PDO($dsn, $username, $password);
        return $conn;
    } catch (PDOException $e) {
        // Renvoyer l'exception pour qu'elle soit traitée à un niveau supérieur
        echo 'erreur';
        // $e->getMessage();
    }
}


try {
    $conn = connectDatabase($kk, $username, $password, $dbname); // Utilisation de la variable avec une faute de frappe
} catch (Exception $e) {
    echo "erreur";
    print_r($e);
}
