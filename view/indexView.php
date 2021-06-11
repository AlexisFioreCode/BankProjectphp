<?php
    include "layout/nav.php";
    include "layout/header.php";  ?>

<h2 class="mb-4">Vos comptes</h2>
<a href="logout.php" class="btn btn-dark text-white">Déconnexion</a>
<div class="row">
    <?php foreach($accounts as $account): ?>
            <div class='col-6 col-md-4'>
                <ul class="list-group my-5">                   
                    <li class="list-group-item"> Type de compte : <?php echo $account->getAccount_type() ?></li>
                    <li class="list-group-item"> numéro du compte : <?php echo $account->getAccount_number() ?></li>
                    <li class="list-group-item">Montant : <?php echo $account->getAmount() ?></li>
                    <li class="list-group-item">Date d'ouverture : <?php echo $account->getOpening_date() ?></li>
                    <li class="list-group-item text-center">
                    <a class="btn btn-dark text-white px-5" href="singleAccount.php?index=<?php echo $account->getId(); ?>">Voir</a>
                    </li>
                </ul>
            </div>
    <?php endforeach; ?>
</div> 

  <?php include "layout/footer.php"; ?>