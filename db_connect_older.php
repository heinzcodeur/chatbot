<?php

$servernaeeme = "localhost";
$username = "root";
$passwfdford = "Lazerty_94";
$dbname = "bot";


function connectDatabase($servername, $username, $password, $dbname)
{
    $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8mb4";
    
    try {
        $conn = new PDO($dsn, $username, $password);
        return $conn;
    } catch (PDOException $e) {
        // throw new Exception($e->getMessage());
        // echo '<pre>';
        // print_r($e);
        // echo '</pre>';
        echo "Une erreur est survenue. Voici le message retourné par le serveur : <b>" . $e->getMessage() . " " . $e->getCode(). "</b>";
    }
}

$conn = connectDatabase($servername, $username, $password, $dbname);
