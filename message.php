<?php

require_once 'db_connect.php';

if($_SESSION['error']){
    echo 'erreur';
}else{

    
    // Autre code ici...
    
    // Fermer la connexion lorsque vous avez terminé
    //mysqli_close($conn);
    
    // getting user message through ajax
    $getMesg = trim($_POST['text']);
    
    //checking user query to database query
    // Supposons que $conn soit votre connexion PDO
    
    // Récupérer la valeur de $_POST['text']
    $getMesg = $_POST['text'];
    
    // Préparer la requête avec un paramètre lié
    $stmt = $conn->prepare("SELECT replies FROM chatbot WHERE queries LIKE :getMesg");
    
    // Liaison du paramètre :getMesg avec la variable $getMesg en ajoutant les caractères de joker %
    $getMesg = "%$getMesg%";
    $stmt->bindParam(':getMesg', $getMesg, PDO::PARAM_STR);
    
    // Exécuter la requête
    $stmt->execute();
    
    // Vérifier s'il y a des résultats
    if($stmt->rowCount() > 0) {
        // Récupérer la réponse de la base de données selon la requête de l'utilisateur
        $fetch_data = $stmt->fetch(PDO::FETCH_ASSOC);
        // Stocker la réponse dans une variable que nous enverrons à Ajax
        $reply = $fetch_data['replies'];
        echo $reply;
    } else {
        echo "Désolé, je ne peux pas vous comprendre !";
    }
    
    
}
    ?>