<?php
    require "model/userModel.php";
    require "model/connexion.php";
    // Si les champ nom et mot de passe ont été remplis
    if(isset($_POST["email"]) && isset($_POST["password"])) {
        $user = getUserByEmail($db, $_POST["email"]);
        // Si la base de données a renvoyé un utilisateur avec ce mail
        if ($user) {
            // On vérifie le mot de passe
            if(password_verify($_POST["password"], $user["password"])) {
                // On démarre une session et on stocke l'utilisateur dedans avant de l'envoyer sur index
                session_start();
                $_SESSION["user"] = $user;
                header("Location:index.php");
                exit;
            }
        }       
        // Si les données rentrées dans le formulaire ne sont pas les bonnes
        $error_message = "Identifiants invalides";
    }
require "view/loginView.php";