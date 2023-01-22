<?php
include 'connection.php';

function getparticipant($id = null){
    if(!empty($id)){
        $sql = "SELECT * FROM participant WHERE id=?";
        $req = $GLOBALS['connexion']->prepare($sql);
        $req->execute(array($id));
        
        return $req->fetch();
    }else{
        $sql = "SELECT * FROM participant ORDER BY id DESC";
        $req = $GLOBALS['connexion']->prepare($sql);
        $req->execute();

        return $req->fetchAll(); 
    }
}
function getAllCommande(){
    $sql = "SELECT COUNT(*) AS nbre FROM commande";
    $req = $GLOBALS['connexion']->prepare($sql);
    $req->execute();
    
    return $req->fetch();
}

function getAllVente(){
    $sql = "SELECT COUNT(*) AS nbre FROM vente WHERE etat = ?";
    $req = $GLOBALS['connexion']->prepare($sql);
    $req->execute(array(1));
    
    return $req->fetch();
}

function getAllparticipant(){
    $sql = "SELECT COUNT(*) AS nbre FROM participant";
    $req = $GLOBALS['connexion']->prepare($sql);
    $req->execute();
    
    return $req->fetch();
}

function getAllCA(){
    $sql = "SELECT SUM(prix) AS prix FROM vente";
    $req = $GLOBALS['connexion']->prepare($sql);
    $req->execute();
    
    return $req->fetch();
}

function getBestVente(){
        $sql = "SELECT nom_participant, nom,prenom, v.quantite, prix, date_vente, v.id, a.id AS idparticipant
         FROM client AS c, vente AS v, participant AS a WHERE v.id_participant =a.id AND v.id_client = c.id and etat = ? ORDER BY date_vente DESC LIMIT 10";
        $req = $GLOBALS['connexion']->prepare($sql);
        $req->execute(array(1));

        return $req->fetchAll(); 
    
}

function getMostVente(){
        $sql = "SELECT nom_participant, v.quantite, SUM(prix) AS prix,a.id AS idparticipant
         FROM client AS c, vente AS v, participant AS a WHERE v.id_participant =a.id AND v.id_client = c.id and etat = ?
         GROUP BY a.id
         ORDER BY SUM(prix) DESC LIMIT 10";
        
        $req = $GLOBALS['connexion']->prepare($sql);
        $req->execute(array(1));

        return $req->fetchAll(); 
    
}
