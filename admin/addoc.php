<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ajouter Document </title>
    <link rel="stylesheet" href="../contenu/bootstrap.min.css"/> 
    <link rel="stylesheet" href="style.css"/>
    </head>
    <body>

    <?php
   
     require_once('navbar.php');      
  
require_once('../include/config.php');

      
    
?>        

 <h2>Ajouter un Document : </h2>
 <div class="container">
   
               <form class="add" name="f1" id="f1" method="post" action="ajout.php" enctype="multipart/form-data">
              
     <legend> Un nouveau document </legend>
             <div> Titre : </div>
           <div><input name="titre" type="text" size="50" placeholder="Titre du document" required/> </div><br>
            <div> Auteur : </div>
            <div><input name="auteur" type="text" size="50" placeholder="Auteur prinicipal du document" required/> </div><br>
            <div>Edition : </div>
            <div> <input name="edition" type="text" placeholder="Maison d'édition " /></div> <br>
            <div> Année Edition : </div>
            <div><input name="annee_ed" type="text" placeholder="Année d'édition " /></div> <br>
            <div> Type : </div>
            <div class="form-check">
  <input class="form-check-input" type="radio" name="type" id="MS" value="Manuel Scolaire" >
  <label class="form-check-label" for="MS">
   Manuel Scolaire
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="type" id="cp"value="Polycopié de cours" >
  <label class="form-check-label" for="cp">
   Polycopié de cours
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="type" id="pdf" value="PDF" >
  <label class="form-check-label" for="pdf">
    PDF
  </label>
</div>
          
            <div> Niveau : </div>
           <select name="niveau">
            <option selected>Affecter à un niveau </option>
            <option value="1ere">1 ère année</option>
            <option value="2eme">2 ème année</option>
            <option value="3eme">3 ème année</option>
            <option value="Terminale">4 ème année</option>

            </select>
           


  <br> <br>         
  <div >             
<button class="btn btn-info" type="submit">Ajouter le document </button>
</div>

</form>

</div>
<?php 
require_once('footer.php');
?>
     </body>
</html>
