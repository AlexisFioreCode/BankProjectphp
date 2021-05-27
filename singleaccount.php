  <?php include "layout/nav.php" ;?>
  <?php include "layout/header.php";
  require "model/connexion.php";
  require "model/operationModel.php";
  require "model/accountModel.php";
  $accounts = getUserAccount($db, $_GET["index"]);
  if(isset($_GET["index"]) && isset($accounts[$_GET['index']])) {
      $account = $accounts[$_GET['index']];     
  } else {
      $error = "Nous ne parvenons pas à récupérer le compte, il n'existe peut être pas. ";        
  } 
  var_dump($accounts);
?>

<?php if(isset($accounts)): ?>
  <?php foreach($accounts as $index => $account): ?>
            <div class='col-6 col-md-4'>
                <ul class="list-group my-5">
                    <?php foreach($account as $key=>$value): ?>                      
                        <li class="list-group-item"><?php echo "$key : $value"; ?></li>
                    <?php endforeach ?>
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
<?php include "layout/footer.php"; ?>
