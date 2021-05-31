  <?php include "layout/nav.php" ;?>
  <?php include "layout/header.php";
  require "model/connexion.php";
  require "model/operationModel.php";
  require "model/accountModel.php";
  $accounts = getOneAccount($db, $_GET["index"]);
  $operations = getOperationAccount($db , $_GET["index"]);
  if(isset($_GET["index"]) && isset($accounts)) {
      $account = $accounts;     
  } else {
      $error = "Nous ne parvenons pas à récupérer le compte, il n'existe peut être pas. ";     
  }
  require "view/singleView.php";
?>

