<?php 
    include "layout/nav.php";
    include "layout/header.php";
?>
<?php if(isset($account)): ?>
    <h2>Votre <?php echo $account->getAccount_type() ; ?> et ses opérations</h2>
            <div class='d-flex'>
                <ul class="list-group my-3">                 
                    <li class="list-group-item h4"> Numéro de compte : <?php echo $account->getAccount_number() ?></li>
                    <li class="list-group-item h4">Montant sur le compte : <?php echo $account->getAmount() ?></li>
                    <li class="list-group-item h4">Date de création du compte : <?php echo $account->getOpening_date() ?></li>
                </ul>              
            </div> 
<a class="btn btn-dark text-white px-5" href="operation.php?index=<?php echo $account->getId();?>">Dépot ou Retrait </a>
<a class="btn btn-dark text-white px-5" href="delete.php?index=<?php echo $account->getId();?>">Supprimer le compte </a>            
<?php else : ?>
    <div class="alert alert-secondary text-center" role="alert">
        <?php echo $error; ?>
        <p>Pourquoi ne pas retourner a l'acceuil ?</p>
        <a href=index.php class="btn btn-dark text-white">Acceuil</a>
    </div>
<?php endif ?>
<div class="row">
<?php foreach($operations as $operation): ?>
    <div class='col-6 col-md-4'>  
        <ul class="list-group my-3">                            
            <li class="list-group-item">Type d'opération : <?php echo $operation->getOperation_type(); ?></li>
            <li class="list-group-item">Montant de l'opération : <?php echo $operation->getAmount(); ?></li>
            <li class="list-group-item">Date de l'opération : <?php echo $operation->getRegistered(); ?></li>
            <li class="list-group-item">Raison : <?php echo $operation->getLabel(); ?></li>
        </ul>          
    </div> 
<?php endforeach ?> 
</div>


<?php include "layout/footer.php"; ?>