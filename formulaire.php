<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>
<body>
  <?php include("layout/nav.php");?>
  <?php include("layout/header.php"); ?>
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










  <?php include("layout/footer.php"); ?>
  <script src="https://kit.fontawesome.com/6dd1f33a58.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="js/index.js"></script>
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>