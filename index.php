<?php
    session_start();
    if(!isset($_SESSION["user"])) {
        header("Location:login.php");
        exit;
    }
    require "model/connexion.php";
    require "model/accountModel.php";
    $accounts = getUserAccount($db, $_SESSION["user"]["id"]);



    require "view/indexView.php";
  ?>

