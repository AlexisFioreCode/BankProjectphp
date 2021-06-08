<?php 
    include "layout/nav.php";
    include "layout/header.php";
?>
<?php if(isset($account)): ?>
    <h2>Votre <?php echo $account["account_type"]; ?> et ses opérations</h2>
            <div class='col-6 col-md-4'>
                <ul class="list-group my-3">
                    <?php foreach($account as $key=>$value): ?>                      
                        <li class="list-group-item"><?php echo "$key : $value"; ?></li>
                    <?php endforeach ?>
                </ul>
                <a class="btn btn-dark text-white px-5" href="operation.php?index=<?php echo $account["id"];?>">Dépot ou Retrait </a>
            </div> 
<?php else : ?>
    <div class="alert alert-secondary text-center" role="alert">
        <?php echo $error; ?>
        <p>Pourquoi ne pas retourner a l'acceuil ?</p>
        <a href=index.php class="btn btn-dark text-white">Acceuil</a>
    </div>
<?php endif ?>
<div class="row">
    <?php if(isset($operations)): ?>
        <?php foreach($operations as $index => $operation): ?>
        <div class='col-6 col-md-4'>    
            <ul class="list-group my-3">       
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
</div>


<?php include "layout/footer.php"; ?>