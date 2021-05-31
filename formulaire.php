<?php
require "model/connexion.php";
session_start();
if(!isset($_POST["amount"]) <= 30 ): ?>  
    <div class="alert alert-secondary text-center" role="alert">
        <p >Veuillez rentrer un montant de plus de 30 euros</p>
        <meta http-equiv="refresh" content="3;url=formulaire.php"> 
    </div>
  <?php else : 
    $query = $db->prepare("INSERT INTO Accounts(account_type, account_number, amount, opening_date, user_id) VALUES(:account_type, UUID_SHORT(), :amount, NOW(), :user_id)");
    $result = $query->execute([
       'account_type' => $_POST["account_type"],
        'amount' => $_POST["amount"],
        'user_id' => $_SESSION["user"]["id"],
        ]); ?>
    <div class="alert alert-secondary text-center" role="alert">
        <h2>Votre compte a bien été créé</h2>
        <meta http-equiv="refresh" content="5;url=index.php"> 
    </div>  
 <?php endif ?> 
 <?php require "view/formulaireView.php"; ?>