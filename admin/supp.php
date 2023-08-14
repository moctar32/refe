<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>supp/update Docum </title>

    </head>
    <body>


 
    <?php
    require_once('../include/config.php');
    $res = $dbh->prepare('DELETE FROM document WHERE id_doc =:id');
        $res->execute(array ( ':id' => $_GET['id'] ));
 
  header('Location:ListeDoc.php'); 

  $res = $dbh->prepare('DELETE FROM teacher WHERE id_teacher =:idt');
      $res->execute(array ( ':id' => $_GET['id'] ));

header('Location:ListeTeach.php'); 
?>

                    
               







 
    </body>
</html>
