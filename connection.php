<?php session_start(); ?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="./controllers/style.css" rel="stylesheet">
  <!-- <script type="text/javascript"> -->
    <!-- function ChangeStatut(form) -->
    <!-- { form.Connection.disabled=!form.poste.checked; }</script> -->
  <title>DEVOIR</title>
</head>
<body>
   <header>  
    <?php require_once './templates/nav_bar.php' ?>
  </header>

  <main>
  <img class="terrain_connect" src="../terrain2.jpeg">
  <form action="./controllers/connect.php" method="POST">
      <label for="pseudo">Ton pseudo</label>
      <input type="text" name="pseudo" placeholder="pseudo" required>
      <label for="password">Ton mot de passe</label>
      <input type="password" name="password" placeholder="Ton mot de passe" required>
      <br>
      <?php $users =
        [
            [
                'pseudo' => 'Johnny',
                'password' => 'Begood',
            ],
            [
                'pseudo' => 'Dick',
                'password' => 'Rivière',
            ]
        ]
        ?>
        <?php 
            if (($_POST == $users) && ($_POST == $users))
                echo "Welcome" .$pseudo;
            else
                echo "Création de compte à faire";
        ?>
      <h2 class="apar">-->Quel est votre poste?</h2>
      <br>
      <input type="checkbox" name="poste" value="gardien de but" onClick="ChangeStatut(this.form)" />
      Gardien de but
      <input type="checkbox" name="poste" value="défenseur" onClick="ChangeStatut(this.form)"/>
      Défenseur
      <input type="checkbox" name="poste" value="milieu de terrain" onClick="ChangeStatut(this.form)"/>
      Milieu de terrain
      <input type="checkbox" name="poste" value="attaquant" onClick="ChangeStatut(this.form)"/>
      Attaquant
      <br>
      <br>
      <input class="bouton_connect" type="submit" value="Connection">
    
    
  </main>

  <footer>
    <?php require_once './templates/footer.php' ?>
  </footer>
 
</body>
</html>

