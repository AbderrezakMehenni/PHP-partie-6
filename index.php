<?php
    // Exercice 1
    // if (isset($_GET['firstname']) && isset($_GET['lastname'])) {
    //     echo "Prénom: ".$_GET['firstname']."<br>"."Nom: ".$_GET['lastname'];
    // };

    // Exercice 2
    // if (isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['age'])) {
    //     echo "Prénom: ".$_GET['firstname']."<br>"."Nom: ".$_GET['lastname'];
    // } else {
    //     echo "Vous n'avez pas indiqué votre âge";
    // };

    // Exercice 3
    // if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
    //     echo "Abonnement pris le: ".$_GET['startDate']."<br>"."Résiliation le: ".$_GET['endDate'];
    // }

    // Exercice 4
    // if (isset($_GET['language']) && isset($_GET['server'])) {
    //     echo "Vous utilisez le langage ".$_GET['language']." sur le serveur ".$_GET['server'];
    // }

    // Exercice 5
    // if (isset($_GET['week'])) {
    //     echo "Vous êtes inscrit depuis ".$_GET['week']." semaines.";
    // }

    // Exercice 6
    if (isset($_GET['building']) && isset($_GET['room'])) {
        echo "Votre bâtiment est le ".$_GET['building']." et l'appartement est au numéro ".$_GET['room'];
    }
?>