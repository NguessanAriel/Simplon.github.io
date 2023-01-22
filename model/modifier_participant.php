<?php
include 'connection.php';
// var_dump($_POST);
if(
    !empty($_POST['nom_participant'])
    && !empty($_POST['prenom_participant'])
    && !empty($_POST['numero_participant'])
    && !empty($_POST['email_participant'])
) {
    $sql = "UPDATE participant SET nom = ?, prenom = ?, telephone = ?, gmail = ? WHERE id = ?";
    $req = $connexion->prepare($sql);
    $req->execute(array(
        $_POST['nom_participant'],
        $_POST['prenom_participant'],
        $_POST['numero_participant'],
        $_POST['email_participant'],
        $_POST['id']
    ));
    // Conformation de l'enregistrement
    if($req->rowCount()!=0){
        $_SESSION['message']['text']="Participant modifié avec succès";
        $_SESSION['message']['type']="success";
    }else{
        $_SESSION['message']['text']="Aucune modification n'a été apportée";
        $_SESSION['message']['type']="warning";
    }
} else{
    $_SESSION['message']['text']="Une information obligatoire non renseignée";
    $_SESSION['message']['type']="danger";
}

header('Location: ../vue/liste_deS_participants.php');