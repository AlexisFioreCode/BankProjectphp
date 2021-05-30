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
?>
<?php if(isset($accounts)): ?>
  <?php foreach($accounts as $index => $account): ?>
    <h2>Votre <?php echo $account["account_type"]; ?> et ses opérations</h2>
            <div class='col-6 col-md-4'>
                <ul class="list-group my-5">
                    <?php foreach($account as $key=>$value): ?>                      
                        <li class="list-group-item"><?php echo "$key : $value"; ?></li>
                    <?php endforeach ?>
                    <a class="btn btn-dark text-white px-5" href="operation.php?index=<?php echo $account["id"];?>">Dépot ou Retrait </a>
                </ul>
            </div> 
  <?php endforeach ?>
<?php else : ?>
    <div class="alert alert-secondary text-center" role="alert">
        <?php echo $error; ?>
        <p>Pourquoi ne pas retourner a l'acceuil ?</p>
        <a href=index.php class="btn btn-dark text-white">Acceuil</a>
    </div>
<?php endif ?>
<?php if(isset($operations)): ?>
  <?php foreach($operations as $index => $operation): ?>
            <div class='col-6 col-md-4'>
                <ul class="list-group my-5">
                    <?php foreach($operation as $key=>$value): ?>                      
                        <li class="list-group-item"><?php echo "$key : $value"; ?></li>
                    <?php endforeach ?>
                </ul>
            </div> 
  <?php endforeach ?>
<?php else : ?>
    <div class="alert alert-secondary text-center" role="alert">
        <?php echo "Il n'y a aucune opération pour ce compte"; ?>
    </div>
<?php endif ?>


<?php include "layout/footer.php"; ?>
