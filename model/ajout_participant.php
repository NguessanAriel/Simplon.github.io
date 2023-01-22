<?php
include 'connection.php'; 
if(
    !empty($_POST['nom_participant'])
    && !empty($_POST['prenom_participant'])
    && !empty($_POST['numero_participant'])
    && !empty($_POST['email_participant'])
) {
     
    $req = $connexion->prepare("INSERT INTO participant(nom, prenom, telephone, gmail) VALUES(?, ?, ?, ?)");
    $req->execute(array(
        $_POST['nom_participant'],
        $_POST['prenom_participant'],
        $_POST['numero_participant'],
        $_POST['email_participant']
    ));
    // Conformation de l'enregistrement
    if($req->rowCount()!=0){
        $_SESSION['message']['text']="Participant ajouté avec succès";
        $_SESSION['message']['type']="success";
    }else{
        $_SESSION['message']['text']="Une erreur s'est produite lors de l'ajout du participant";
        $_SESSION['message']['type']="danger";
    }
} else{
    $_SESSION['message']['text']="Une information obligatoire non renseignée";
    $_SESSION['message']['type']="danger";
}

header('Location: ../vue/ajout_participant.php');