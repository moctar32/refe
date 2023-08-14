<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Search Document </title>
    <link rel="stylesheet" href="../contenu/bootstrap.min.css"/> 
    <link rel="stylesheet" href="../contenu/style.css"/>
    </head>
    <body>


 
                <?php
                require_once('navbar.php');
    require_once('../include/config.php');
    if(isset($_POST["cherche"])){
        $cherche=$_POST["cherche"];
        $sql1 = 'SELECT *  FROM document WHERE titre=:cherche;';
            $res1 = $dbh->prepare($sql1);
            $res1->bindValue(':cherche', $cherche);
            $res1->execute();
            $nbr=$res1->rowCount();    
    }
   
    if ($nbr!=0){
        
         
                
 ?>
          
    
      
       


<h2> Document </h2>
<div class="container">
<table class='table'>
                   <tr>
                    <th class="table-active">  code </th>
                    <th class="table-active">  Titre </th>
                    <th class="table-active">  Auteur </th>
                    <th class="table-active">  Type </th>
                    <th class="table-active">  Edition </th>
                    <th class="table-active">  Année  </th>
                    <th class="table-active">  Niveau </th>
                    <th class="table-active">  Date </th>
                    <th class="table-active">   Agent </th>
                    <th class="table-active">  Action </th>
                </tr>
                <tr>
                <?php
                           while ($doc = $res1->fetch()) 
                           {
                            
                            echo "<td>" .$doc['id_doc']."</td>
                            <td>" .$doc['titre']."</td>
                            <td>" .$doc['auteur']."</td>
                            <td>" .$doc['type']."</td>
                            <td>" .$doc['edition']."</td>
                            <td>" .$doc['annee_ed']."</td>
                            <td>" .$doc['niveau']."</td>
                            <td>" .$doc['date_add']."</td>
                            <td>" .$doc['id_admin']."</td>
                             <td>
                    <div class='btn btn-info'> 
                    <a href='supp.php?id=".$doc["id_doc"]."'> Supprimer </a> </div>
                    <div class='btn btn-info'> 
                    <a href='update.php?id=".$doc["id_doc"]."'> Modifier </a> </div>
                    </td> </tr>";

                           }
                        }
                        
                        ?>
                        </table>

          
    
 <?php

    if(isset($_POST["cherche"])){
        $cherche=$_POST["cherche"];
        $sql = 'SELECT *  FROM teacher WHERE nom=:cherche;';
            $res = $dbh->prepare($sql);
            $res->bindValue(':cherche', $cherche);
            $res->execute();
         }     
       
        


               
                           while ($tec = $res->fetch()) 
                           {
                        echo "
                        <h2> Listes Enseignants </h2>
<div class='container'>
               <table class='table'>
                   <tr>
                    <th class='table-active'>  code </th>
                    <th class='table-active'>  Nom </th>
                    <th class='table-active'>  Prénom </th>
                    <th class='table-active'>  Date Naissance </th>
                    <th class='table-active'>  Grade </th>
                    <th class='table-active'>  Adresse  </th>
                    <th class='table-active'>  Phone </th>
                    <th class='table-active'>  Spécialité </th>
                    <th class='table-active'>  Action </th>
                </tr>
                <tr>";
                            
                            echo "<td>" .$tec['id_teacher']."</td>
                            <td>" .$tec['nom']."</td>
                            <td>" .$tec['prenom']."</td>
                            <td>" .$tec['date_naiss']."</td>
                            <td>" .$tec['grade']."</td>
                            <td>" .$tec['adresse']."</td>
                            <td>" .$tec['tel']."</td>
                            <td>" .$tec['specialite']."</td>
                           
                             <td>
                    <div class='btn btn-info'> 
                    <a href='supp.php?id=".$tec["id_teacher"]."'> Supprimer </a> </div>
                    <div class='btn btn-info'> 
                    <a href='update.php?id=".$tec["id_teacher"]."'> Modifier </a> </div>
                    </td> </tr>";

                          
                        }
                           ?>
                       </table>


                          
                       
                    
               






                        </div>
                        <?php 
require_once('footer.php');
?>
 
    </body>
</html>
