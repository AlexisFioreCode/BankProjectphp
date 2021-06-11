<?php
require "model/operationManager.php";
require "model/accountManager.php";
require "model/entity/Account.php";
require "model/entity/Operation.php";

$error = null;
$success = null;
$accountModel = new AccountManager();
$account = new Account();
$account = $accountModel->getOneAccount($_GET["index"]);
$amount = $account->getAmount(); 
$operationModel = new OperationManager();
$operation = new Operation($_POST);
// var_dump($operation);

 if (!empty($operation)) {
     // Demander a Thomas pk ça marche pas si je met $operation->getAmount()
    if(!empty($_POST["amount"]) > 0 ){
        $operationModel->addDepot($operation);
        $total = $amount + $operation->getAmount();
        $result = $accountModel->updateAccount($total, $_GET["index"]);
        if($result) {
        $success = "<div class='alert alert-secondary text-center' role='alert'><h2>Opération réussite</h2></div>";           
        } 
    }                
    else if(!empty($_POST["amount"]) < 0 ) {
        $operationModel->addRetrait($operation);
        $total = $amount + $operation->getAmount();
        $result = $accountModel->updateAccount($total, $_GET["index"]);
        if($result) {
            $success = "<div class='alert alert-secondary text-center' role='alert'><h2>Opération réussite</h2></div>";
        } 
    } else {
        $error = "<div class='alert alert-danger text-center' role='alert'><h2>Veuillez fixer un montant supérieur ou inférieur a 0</h2></div> ";
    }
}    
     

    

    require "view/operationView.php";
 ?>
 
 
