<?php

require "model/connexion.php";
if(!empty($_POST["amount"]) > 0 ):
    $query = $db->prepare("INSERT INTO operation(operation_type, amount, registered, label, account_id) VALUES(dépot, :amount, NOW(), :label, :account_id");
    $result = $query->execute([
    "amount" => $_POST["amount"],
    "label" => $_POST["label"],
    "account_id" => $_GET["index"]
        ]);
    $sql =  $db->query("UPDATE Accounts SET amount = SUM(:amount) WHERE accounts_id = :account_id");    
    elseif(!empty($_POST["amount"]) < 0 ) : 
        $query = $db->prepare("INSERT INTO operation(operation_type, amount, registered, label, account_id) VALUES(retrait, :amount, NOW(), :label, :account_id");
        $result = $query->execute([
        "amount" => $_POST["amount"],
        "label" => $_POST["label"],
        "account_id" => $_GET["index"]
        ]); 
    $sql =  $db->query("UPDATE Accounts SET amount = SUM(:amount) WHERE accounts_id = :account_id");  
    else : 
        $error = "Veuillez fixer un montant supérieur ou inférieur a 0";          
    endif;
    require "view/operationView.php";
 ?>
 
 