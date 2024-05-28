<?php

// $servername = "localhost";
// $username = "root";
// $password = "Lazerty_/94";
// $dbname = "bot";

// // Créer une connexion
// try{

//     $conn = mysqli_connect($servername, $username, $password, $dbname);
//     echo 'connexion bdd établie';
// }catch(Exception $e){
//     die('erreur ' . $e->getMessage());
// }

// Vérifier la connexion
// if (!$conn) {
//     echo "erreur";
//     // die("Erreur de connexion à la base de données: " . mysqli_connect_error());
// }
// die('lola');

$servername = "localhost";
$username = "roojt";
$password = "Lazerty_94";
$dbname = "bot";

// Fonction pour se connecter à la base de données
function connectDatabase($servername, $username, $password, $dbname)
{
    $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8mb4";
    
    try {
        $conn = new PDO($dsn, $username, $password);
        return $conn;
    }catch (PDOException $e) {
        throw new Exception("Erreur de connexion à la base de données: ");
    }
}

$conn = connectDatabase($servername, $username, $password, $dbname);



// $conn = new mysqli($servername, $username, $password, $dbname);
        //  $conn = mysqli_connect($servername, $username, $password, $dbname);
        //return $conn;
    // } catch (Exception $e) {
    //         throw new Exception("Erreur de connexion à la base de données: " . $e->getMessage());