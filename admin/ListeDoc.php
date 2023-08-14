<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Modifier/Supprimer </title>
    <link rel="stylesheet" href="../contenu/bootstrap.min.css"/> 
    <link rel="stylesheet" href="../contenu/style.css"/>
    </head>
    <body>


 
                <?php
                require_once('navbar.php');

    require_once('../include/config.php');
   
    $sql = "SELECT * FROM document;";
    $res = $dbh->query($sql);
 
        
?>
<h2> Listes Documents </h2>

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
                           while ($doc = $res->fetch()) 
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
                           ?>
                       </table>
                       
                    
               






                       <?php 
require_once('footer.php');
?>                     
 
    </body>
</html>
