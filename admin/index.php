<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Accueil Admin</title>
    <link rel="stylesheet" href="../contenu/bootstrap.min.css"/> 

    </head>
    <body>
   
<?php
require_once('navbar.php');
?>
<div class="container">
    <div>
        <h2>Login</h2>
    </div>
<form class="log" method="POST">

  <div>
    <input id="username" type="text" name="username" placeholder="Nom d'utilisateur">
  </div>
  <br>
  <div>
    <input id="password" type="password" name="password" placeholder="Mot de passe">
  </div>
  <br>
  <div>
    <input class="btn btn-info" type="submit" value="Submit">
  </div>
</form>
</div>
<?php 
require_once('footer.php');
?>

</body>
</html>
