<?php
require "model/accountManager.php";
require "model/entity/Account.php";
require "model/entity/User.php";
session_start();

$error = null;
$success = null;
$accountManager = new AccountManager();
if(!empty($_POST)) {
  if(!isset($_POST["amount"]) || $_POST["amount"] <= 30 ){
    $error = "<div class='alert alert-danger text-center' role='alert'><h2>Montant minimum 30 euros</h2></div>";
  }     
  else {
  $account = new Account($_POST) ;
    $result =  $accountManager->addAccount($account);
    if($result) {
      $success = "<div class='alert alert-secondary text-center' role='alert'><h2>Votre compte a bien été créé</h2></div>";
     }  else {
      $error = "<div class='alert alert-danger text-center' role='alert'><h2>Nous n'avons pas réussi a créer le compte</h2></div> ";
     }
  } 
}

require "view/formulaireView.php"; ?>