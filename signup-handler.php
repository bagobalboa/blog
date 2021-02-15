<?php

if(

    // on vérifie que nos champs ne sont pas vides s'ils sont requis
    !empty($_POST['pseudo'])
    && !empty($_POST['email'])
    && !empty($_POST['password'])
    && !empty($_POST['password_conf'])

    // on vérifie que le mot de passe et sa confirmation sont identiques
    && $_POST['password'] == $_POST['password_conf']

    // on vérifie que le mot de passe fait au moins 6 caractères
    && strlen($_POST['password']) >= 6

    // on vérifie la validité de l'email
    && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)

) {

    

    include 'fonctions/fonctions_bdd.php';

    createUser();
    
    header('location: index.php');

} else {
    echo 'Tu as mal rempli le formulaire !';
    die;
}