<?php include "layout/nav.php" ;
 include "layout/header.php"; ?>

<form action="operation.php" method="post">
    <div class="mb-3">
        <label for="amount" class="form-label">Montant</label>
        <input type="number" class="form-control" name="amount">
    </div>    
    <div class="mb-3">
        <label for="label" class="form-label">Raison de l'opération</label>
        <input type="text" class="form-control" name="label">  
    </div>
    <button type="submit" class="btn btn-dark text-white">Valider</button>
</form>
<?php if (!empty($_POST["amount"]) === 0): ?>
    <div class="alert alert-secondary text-center" role="alert">
        <?php echo $error; ?>
    </div>
<?php endif ?>
<?php include "layout/footer.php"; ?>