<?php include "layout/nav.php";?>  
<?php include "layout/header.php"; ?>
  <main class=""> 
    <form class="container border border-secondary my-5 w-50 p-3 text-center">
        <div class="dropdown ">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Choisissez le compte sur lequel vous souhaitez retirez de l'argent.
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
