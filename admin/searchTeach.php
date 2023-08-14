<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Listes Enseignants </title>
    <link rel="stylesheet" href="../contenu/bootstrap.min.css"/> 
    <link rel="stylesheet" href="../contenu/style.css"/>
    </head>
    <body>


 
                <?php
                require_once('navbar.php');
    require_once('../include/config.php');
    if(isset($_POST["cherche"])){
        $cherche=$_POST["cherche"];
        $sql = 'SELECT *  FROM teacher WHERE nom=:cherche;';
            $res = $dbh->prepare($sql);
            $res->bindValue(':cherche', $cherche);
            $res->execute();
         }
  
 ?>
          
    
      
       


<h2> Listes Enseignants </h2>
<div class="container">
               <table class='table'>
                   <tr>
                    <th class="table-active">  code </th>
                    <th class="table-active">  Nom </th>
                    <th class="table-active">  Prénom </th>
                    <th class="table-active">  Date Naissance </th>
                    <th class="table-active">  Grade </th>
                    <th class="table-active">  Adresse  </th>
                    <th class="table-active">  Phone </th>
                    <th class="table-active">  Spécialité </th>
                    <th class="table-active">  Action </th>
                </tr>
                <tr>
                <?php
                           while ($tec = $res->fetch()) 
                           {
                            
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
                       
                    
               




                       <?php 
require_once('footer.php');
?> 

                        </div>

    </body>
</html>
