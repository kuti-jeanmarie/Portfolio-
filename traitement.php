<?php

try{
    $conn = new PDO("mysql:host=localhost;dbname=portfolio", "root", "");
}
catch(Exception $e){
    echo ("Erreur: " .$e->getMessage());
    exit();
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $sexe = $_POST['sexe'];
    $message = $_POST['message'];


    $sql = $conn->prepare("INSERT INTO contacts(nom, prenom, email, sexe, message) VALUES (:nom, :prenom, :email, :sexe, :message)");

    $sql->bindParam(':nom', $nom);
    $sql->bindParam(':email', $prenom);
    $sql->bindParam(':telephone', $email);
    $sql->bindParam(':date_heure_arrivee', $sexe);
    $sql->bindParam(':date_heure_depart', $message);

    $sql->execute();
    echo "JEAN MARIE a très bien reussi votre message";
}
?>