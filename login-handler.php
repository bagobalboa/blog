<?php

include 'fonctions/fonctions_bdd.php';
include 'fonctions/mes_fonctions.php';


if (
    !empty($_POST['pseudo'])
    && !empty($_POST['password'])
) {

    $utilisateur = getUtilisateurByPseudo($_POST['pseudo']);

    
    if ($utilisateur === false) {   // s'il y a une erreur (pas d'utilisateur reconnu)
        header('location: login.php'); // on redirige vers la page de connexion
        die;
    } else {

        if (password_verify($_POST['password'], $utilisateur['password'])) {

            session_start();

            createSession($utilisateur);

            if($_POST['rester-connecte'] == 'true') {
                // on calcule le timestamp de "dans_un_an"

                $dans_un_an = time() + 365*24*60*60;

                setcookie('user_id', $utilisateur['id'],$dans_un_an);
            }

            header('location: index.php');
            die;
        } else {
            header('location: login.php');

            die;
        }
    }
} else {
    header('location: login.php');
    die;
}
