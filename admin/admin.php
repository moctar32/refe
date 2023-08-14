<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>admin User</title>
    <link rel="stylesheet" href="../contenu/bootstrap.min.css"/> 
    <link rel="stylesheet" href="../contenu/style.css"/>
    </head>
    <body>
<form  method="POST">
    <div>
        <h2>Login</h2>
    </div>
  <div>
    <input id="username" type="text" name="username" placeholder="Nom d'utilisateur">
  </div>
  <div>
    <input id="password" type="password" name="password" placeholder="Mot de passe">
  </div>
  <div>
    <input type="submit" value="Submit">
  </div>
</form>
<?php
   

    require_once('../include/config.php');
    session_start();

    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
       
        
        $sql = "SELECT password, id_admin FROM adminuser WHERE username = :username";
        $res = $dbh->prepare($sql);
        $res->bindValue(':username', $username);
        $res->execute();
        $result = $res->fetch();
        $isValid = password_verify($password, $result[0]);
        
        if ($isValid) {
            $_SESSION['isAdmin'] = true;
            $_SESSION['authUser'] = $username; 
            $_SESSION['id'] = $result[1];
            
        }
    }
    require_once('../include/config.php');
    if ($_SESSION['isAdmin']) {
        header('Location:indexad.php?b='.$_SESSION['authUser']);
       
    }else {
        echo "Vous n'êtes pas un administarteur";
    }
?>