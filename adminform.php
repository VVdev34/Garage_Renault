<?php

var_dump($_POST);

    $serveur = "localhost";
    $dbname = "garage";
    $user = "root";
    $pass = "";
    
    $nom = strip_tags($_POST["nom"]);
    $prix = strip_tags($_POST["prix"]);
    $descr = strip_tags($_POST["descr"]);
    $img_veh = strip_tags($_POST["img_veh"]);
    $km = strip_tags($_POST["km"]);
    $annee = strip_tags($_POST["annee"]);
    $energie = strip_tags($_POST["energie"]);
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //On insère les données reçues
        $sth = $dbco->prepare("INSERT INTO `vehicule`(`nom`, `prix`, `descr`, `img_veh`, `km`, `annee`,  `energie`)
         VALUES (:nom,:prix,:descr,:img_veh, :km, :annee, :energie)");
        $sth->bindParam(':nom',$nom);
        $sth->bindParam(':prix',$prix);
        $sth->bindParam(':descr',$descr);
        $sth->bindParam(':img_veh',$img_veh);
        $sth->bindParam(':km',$km);
        $sth->bindParam(':annee',$annee);
        $sth->bindParam(':energie',$energie);
        $sth->execute();
        
        // On renvoie l'utilisateur vers la page de remerciement
        header("Location:index.php?page=vehicules");
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>