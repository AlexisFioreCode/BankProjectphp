<?php 
 include "layout/nav.php";
 include "layout/header.php";
 ?> 
<h2 class="mb-4">Créer un nouveau compte</h2>
  
<form action="formulaire_post.php" method="post">
  <div class="mb-3">
    <select class="form-select" for="account_type" name="account_type">
      <option selected value="Compte courant">Compte courant</option>
      <option value="Livret A">Livret A</option>
      <option value="PEL">PEL</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="amount" class="form-label">Montant du compte</label>
    <input type="number" class="form-control" name="amount">

    </div>
  </div>
  <button type="submit" class="btn btn-primary">Valider</button>
</form>
  <?php include "layout/footer.php"; ?>