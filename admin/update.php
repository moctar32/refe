<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>supp/update Docum </title>

    </head>
    <body>



    <?php
    //Formulaire
require_once('../include/config.php');
$id = intval($_GET['id']);

$reponse = "SELECT * FROM document WHERE id_doc =:id"; 
$res = $dbh->prepare($reponse);
    $res->bindValue(':id', $id);
    $res->execute();
    
//$reponse->execute(array(':id' => $_GET['id']));

$donnees = $res->fetch();

echo '<form action="update.php" method="post">
<input type="text" name="titre" value="'.$donnees['titre'].'"/>
<input type="text" name="auteur" value="'.$donnees['auteur'].'"/>
<input type="text" name="edition" value="'.$donnees['edition'].'"/>
<input type="text" name="annee_ed" value="'.$donnees['annee_ed'].'"/>
<input type="text" name="id_doc" value="'.$donnees['id_doc'].'"/>

<input type="submit" value="Mettre à jour"/>';

//Mise à jour données

if(isset($_POST['titre']) && isset($_POST['auteur'])&& isset($_POST['edition'])
&& isset($_POST['annee_ed'])&& isset($_POST['id_doc']))
{
    $titre=$_POST['titre'];
    $auteur=$_POST['auteur'];
    $edition=$_POST['edition'];
    $annee_ed=$_POST['annee_ed'];
    $id_doc=intval($_POST['id_doc']);
    $sql ="UPDATE document
        SET
            titre='$titre',
            WHERE 
            id_doc=$id_doc;";

       
$res1 = $dbh->prepare($sql);
   
       //$res1->bindValue(':id', $id);
       $res1->execute();


header('Location:ListeDoc.php'); 
}
?>

                    
               







 
    </body>
</html>
