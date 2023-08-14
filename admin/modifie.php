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
echo $id;
$reponse = "SELECT * FROM teacher WHERE id_teacher =:id"; 
$res = $dbh->prepare($reponse);
    $res->bindValue(':id', $id);
    $res->execute();
    


$donnees = $res->fetch();

echo '<form action="update.php" method="post">
<input type="text" name="nom" value="'.$donnees['nom'].'"/>
<input type="text" name="prenom" value="'.$donnees['prenom'].'"/>
<input type="text" name="date_naiss" value="'.$donnees['date_naiss'].'"/>
<input type="text" name="grade" value="'.$donnees['grade'].'"/>
<input type="text" name="adresse" value="'.$donnees['adresse'].'"/>
<input type="text" name="tel" value="'.$donnees['tel'].'"/>
<input type="text" name="specialite" value="'.$donnees['specialite'].'"/>
<input type="text" name="id_teacher" value="'.$donnees['id_teacher'].'"/>

<input type="submit" value="Mettre à jour"/>';

//Mise à jour données

if(isset($_POST['nom']) && isset($_POST['prenom'])&& isset($_POST['date_naiss'])
&& isset($_POST['grade'])&& isset($_POST['adresse'])&& isset($_POST['tel'])
&& isset($_POST['specialite']) && isset($_POST['id_teacher']))
{
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $date_naiss=$_POST['date_naiss'];
    $grade=$_POST['grade'];
    $adresse=$_POST['adresse'];
    $tel=$_POST['tel'];
    $specialite=$_POST['specialite']
    $id_teacher=intval($_POST['id_teacher']);
    $sql ="UPDATE teacher
        SET
            nom='$nom',
            WHERE 
            id_teacher=$id_teacher;";

       
$res1 = $dbh->prepare($sql);
   
 
       $res1->execute();


header('Location:ListeTeach.php'); 
}
?>

                    
               







 
    </body>
</html>
