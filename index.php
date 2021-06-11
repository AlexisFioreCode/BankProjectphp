<?php
    require "model/entity/Account.php"; 
    require "model/entity/User.php";
    require "model/accountManager.php";

    session_start();
    if(!isset($_SESSION["user"])) {
        header("Location:login.php");
        exit;
    }

    $accountModel = new AccountManager();
    // $accounts = new Account();
    $user = $_SESSION["user"];
    $accounts = $accountModel->getUserAccount($user->getId());
    
    // var_dump($accounts);

    /* $accounts = getUserAccount($db, $_SESSION["user"]["id"]); */



    require "view/indexView.php";
  ?>

