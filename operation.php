<?php include "layout/nav.php" ;
 include "layout/header.php";
 require "model/connexion.php";
 if($_POST["amount"] > 0 ):
    $query = $db->prepare("INSERT INTO operation(operation_type, amount, registered, label, account_id) VALUES(dépot, :amount, NOW(), :label, :account_id");
    $result = $query->execute([
       "amount" => $_POST["amount"],
       "label" => $_POST["label"],
       "account_id" => $_GET["index"]
        ]);
    $sql =  $db->query("UPDATE Accounts SET amount = SUM(:amount) WHERE accounts_id = :account_id");    
    elseif($_POST["amount"] < 0 ) : 
        $query = $db->prepare("INSERT INTO operation(operation_type, amount, registered, label, account_id) VALUES(retrait, :amount, NOW(), :label, :account_id");
        $result = $query->execute([
           "amount" => $_POST["amount"],
           "label" => $_POST["label"],
           "account_id" => $_GET["index"]
        ]); 
    $sql =  $db->query("UPDATE Accounts SET amount = SUM(:amount) WHERE accounts_id = :account_id");  
    else : 
        $error = "Veuillez fixer un montant supérieur ou inférieur a 0";          
    endif    
 ?>



<form action="operation.php" method="post">
    <div class="mb-3">
        <label for="amount" class="form-label">Montant</label>
        <input type="number" class="form-control" name="amount">
    </div>    
    <div class="mb-3">
        <label for="label" class="form-label">Raison de l'opération</label>
        <input type="text" class="form-control" name="label">  
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
</form>
<?php if ($_POST["amount"] === 0): ?>
    <div class="alert alert-secondary text-center" role="alert">
        <?php echo $error; ?>
    </div>
<?php endif ?>
<?php include "layout/footer.php"; ?> 