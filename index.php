<?php
  session_start();
  if(!isset($_SESSION["user"])) {
      header("Location:login.php");
      exit;
  }
  include "layout/nav.php";
  include "layout/header.php"; 
  require "model/connexion.php";
  require "model/accountModel.php";
  $accounts = getUserAccount($db, $_SESSION["user"]["id"]);
  ?>
<a href="logout.php" class="btn btn-dark text-white">Déconnexion</a>
<div class="row">
    <!-- On parcours le tableau de compte à l'aide d'une foreach à syntaxe simplifiée -->
    <?php foreach($accounts as $index => $account): ?>
            <div class='col-6 col-md-4'>
                <ul class="list-group my-5">
                    <?php foreach($account as $key=>$value): ?>                      
                        <li class="list-group-item"><?php echo "$key : $value"; ?></li>
                    <?php endforeach ?>
                        <li class="list-group-item text-center">
                            <!-- On passe dans l'url la position du compte à afficher sur la page single -->
                            <a class="btn btn-dark text-white px-5" href="singleAccount.php?index=<?php echo $account["id"];?>">Voir</a>
                        </li>
                </ul>
            </div>
    <!-- On ferme la foreach (équivalent de l'accolade fermante) -->
    <?php endforeach; ?>
</div> 

  <?php include "layout/footer.php"; ?>
