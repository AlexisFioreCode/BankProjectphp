<?php
 include "layout/nav.php";
 include "layout/header.php"; ?>
  <main> 
    <form class="container border border-secondary my-5 w-50 p-3 text-center">
        <div class="dropdown container">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Choisissez le compte sur lequel vous souhaitez déposer de l'argent.
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Compte courant</a></li>
            <li><a class="dropdown-item" href="#">Livret A</a></li>
            <li><a class="dropdown-item" href="#">Compte Jeune</a></li>
            </ul>
        </div>
        <div>
            <label for="montant">Montant</label>
            <input type="text">
        </div>
    </form>  
  </main>

<?php include "layout/footer.php"; ?>

