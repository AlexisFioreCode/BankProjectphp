<?php 
  require "model/connexion.php";
  require "model/operationModel.php";
  require "model/accountModel.php";

  
  if(isset($_GET["index"]) && !empty($_GET["index"])) {
    $account = getOneAccount($db, $_GET["index"]);
    $operations = getOperationAccount($db , $_GET["index"]);
  } else {
      $error = "Nous ne parvenons pas à récupérer le compte, il n'existe peut être pas. ";     
  }


  require "view/singleView.php";
?>

