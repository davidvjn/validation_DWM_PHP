<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="./controllers/style.css" rel="stylesheet">
  <title>DEVOIR</title>
</head>
<body>
   <header>  
    <?php require_once './templates/nav_bar.php' ?>
    
    <?php if (isset($_SESSION['pseudo'])): ?>
      <h4>Bon retour parmi nous <?= $_SESSION['pseudo'] ?></h4>
    <?php else: ?>
      <h4>Connecte-toi!</h4>
    <?php endif ?>

  </header>

  <main>
  <h1 class="h1">FAITES VIBRER VOTRE REGION SUR UN TERRAIN DE FOOT</h1>
  <h2>Connecte-toi et remplis le formulaire! <button><a href="./connection.php">Connection</a></button></h2>
    <img src="../terrain.png">
    
  </main>

  <footer>
    <?php require_once './templates/footer.php' ?>
  </footer>
</body>
</html>