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
  <?php include("accounts.php");?>
  <main class="my-5"> 
    <section class="container">
      <?php foreach (get_accounts() as $value) { ?>    
          <div class="card">
            <h5 class="card-header"><?php echo 'Type de compte : '. $value['name'];?></h5>
            <div class="card-body">
              <h5 class="card-title"><?php echo 'Compte : '. $value['number']; ?></h5>
              <p class="card-text"><?php echo 'Proprio : '. $value['owner']; ?></p>
              <p class="card-text"><?php echo 'Montant : '. $value['amount']; ?></p>
              <p class="card-text"><?php echo 'Dernière opération : '. $value['last_operation']; ?></p>
              <a href="infos.php?name=<?php echo ($value['name']);?>&number=<?php echo ($value['number']);?>&owner=<?php echo ($value['owner']);?>&amount=<?php echo ($value['amount']);?>&last_operation=<?php echo ($value['last_operation']);?>" class="btn btn-primary">Infos</a>
              <a href="dépot.php" class="btn btn-primary">Dépot</a>
              <a href="retrait.php" class="btn btn-primary">Retrait</a>
            </div>
          </div>    
      <?php } ?>
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
