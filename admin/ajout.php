<?php
require_once('../include/config.php');
    

// Ajout Enseignant
 if (isset($_POST["nom"]) && isset($_POST["prenom"])&& isset($_POST["tel"])
  && isset($_POST["adresse"])&& isset($_POST["grade"])&& isset($_POST["specialite"])&& isset($_POST["date_naiss"])){
      $nom=$_POST["nom"];
      $prenom=$_POST["prenom"];
      $tel=$_POST["tel"];
      $naiss=$_POST["date_naiss"];
      $adresse=$_POST["adresse"];
      $grade=$_POST["grade"];
      $specialite=$_POST["specialite"];
     
     
     
      $sql1 = "INSERT INTO teacher
      VALUES ('','$nom','$prenom','$naiss',' $grade','$adresse','$tel','$specialite','111');";
      
      $res1 = $dbh->prepare($sql1);
         
      $res1->execute();
        
    header('Location:addtech.php');  
  }
// Ajout Document

if (isset($_POST["titre"]) && isset($_POST["auteur"])&& isset($_POST["edition"])
&& isset($_POST["niveau"])&& isset($_POST["annee_ed"])&& isset($_POST["type"])){
    $titre=$_POST["titre"];
    $auteur=$_POST["auteur"];
    $edition=$_POST["edition"];
    $niveau=$_POST["niveau"];
    $annee_ed=$_POST["annee_ed"];
    $type=$_POST["type"];
    $dateadd=date("Y-m-d");
   
   
   
    $sql2 = "INSERT INTO document
    VALUES ('','$titre','$auteur','$type','$edition','$annee_ed',' $niveau','$dateadd','222');";
    
    $res2 = $dbh->prepare($sql2);
       
    $res2->execute();
      
  header('Location:addoc.php');  
}

?>