<?php

    $login = isset($_POST["uname"]) ? $_POST["uname"] : "";
    $psw = isset($_POST["psw"]) ? $_POST["psw"] : "";
    //paire (utilisateur => mot de passe) stockés dans le serveur

    //on utilise 3 paires juste pour montrer un exemple
    $logs = array(
        "toto" => "totomdp",
        "titi" => "titimdp",
        "tutu" => "123tutu456",
    );


    $connexion = false;
    for ($i = 0; $i < count($logs); $i++) { if ($logs[$login] == $pass) {
                $connexion = true;
    break; }
    }
        if ($connexion) {
            echo "Connexion ŕeussie.";
    } else {
            echo "Connexion refusée.";
        }
?>

