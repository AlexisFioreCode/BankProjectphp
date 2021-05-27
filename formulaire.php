<?php 
 include "layout/nav.php";
 include "layout/header.php"; ?>
  <main class="my-5"> 
    <section class="container">
    <form action="formulaire.php" method="post">
        <label for="prenom">Votre prénom</label>
        <input type="text" name="prenom" />
        <label for="nom">Votre nom</label>
        <input type="text" name="nom" />
        <label for="number">Téléphone</label>
        <input type="number" name="phone" />
        <label for="email">Votre email</label>
        <input type="email" name="mail" />
        
        <input type="submit" value="Valider" />

        <h5 class="card-header"><?php if($_POST) { echo $_POST['prenom'];}?></h5>
            <div class="card-body">
              <h5 class="card-title"><?php if($_POST) { echo $_POST['nom'];}?></h5>
              <p class="card-text"><?php if($_POST) { echo $_POST['phone'];}?></p>
              <p class="card-text"><?php if($_POST) { echo $_POST['mail'];}?></p>
            </div>
          </div>    

    </form>
    </section>
  </main> 
  <?php include "layout/footer.php"; ?>