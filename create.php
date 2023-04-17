<?php

//Connexion a la base

$servername     = "localhost";
$username       = "root";
$password       = "";
$dbname         = "portfolio";

$connexion =  new mysqli($servername, $username ,$password, $dbname);
$db = new PDO ("mysql:host=localhost;dbname=portfolio;", "root", "");

    $req = $db->prepare("SELECT * FROM contacts WHERE email = :email");
    $req-> bindParam(":email", $_POST["email"]);
    $execution = $req->execute();

    $result = $req->fetch(PDO::FETCH_ASSOC);
if($result){
    $message = "Vos cordonnées ont déja été envoyé";
    header("Location:contact.php?message=$message");
}
else{

    $req = $db->prepare("INSERT INTO contacts (nom,prenom,email,telephone) VALUES (:nom, :prenom, :email, :telephone)");
    //récupération des données

    $req->bindParam(":nom", $_POST["nom"]);
    $req->bindParam(":prenom", $_POST["prenom"]);
    $req->bindParam(":email", $_POST["email"]);
    $req->bindParam(":telephone", $_POST["telephone"]);
    $t=$req->execute();

    $message = "Vos coordonnées ont été bien envoyé";
    header("Location:contact.php?message=$message&type=success");
}


?>