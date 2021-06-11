<?php 
  require "model/operationManager.php";
  require "model/accountManager.php";
  require "model/entity/Account.php";
  require "model/entity/Operation.php";

  $accountModel = new AccountManager();
  $operationModel = new OperationManager();
  if(isset($_GET["index"]) && !empty($_GET["index"])) {
    $account = $accountModel->getOneAccount($_GET["index"]);
    $operations = $operationModel->getOperationAccount($_GET["index"]);
  } else {
      $error = "Nous ne parvenons pas à récupérer le compte, il n'existe peut être pas. ";     
  }


  require "view/singleView.php";
?>

