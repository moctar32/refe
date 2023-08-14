<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ajouter teacher </title>
    <link rel="stylesheet" href="../contenu/bootstrap.min.css"/> 
    <link rel="stylesheet" href="style.css"/>
    </head>
    <body>


      

  <?php
  require_once('navbar.php');      
?>
 <h2>Ajouter un Enseignant : </h2>
 <div class="container">
               <form name="f" class="add" id="f" method="post" action="ajout.php" enctype="multipart/form-data">
        
             <div> Nom : </div>
            <div> <input name="nom" type="text" size="50" placeholder="Nom de l'enseignant" required/></div> <br>
            <div> Prénom : </div>
            <div> <input name="prenom" type="text" size="50" placeholder="Prénom de l'enseignant" required/></div> <br>
            <div> Date de naissance : </div>
            <div> <input name="date_naiss" type="date" placeholder="Date de naissance " /></div> <br>
            <div> Grade : </div>
            <div class="form-check">
  <input class="form-check-input" type="radio" name="grade" id="pp" value="pp" >
  <label class="form-check-label" for="pp">
    PP
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="grade" id="pphc" value="pphc" >
  <label class="form-check-label" for="pphc">
    PPHC
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="grade" id="pp1" value="pp1">
  <label class="form-check-label" for="pp1">
    PP1
  </label>
</div>
            <div> Téléphone : </div>
            <div> <input name="tel" type="text" size="50" placeholder="Numéro de téléphone" /></div> <br>
            <div> Adresse : </div>
            <div> <input name="adresse" type="text" size="50" placeholder="Adresse de l'enseignant" /></div> <br>
            <div> Spécialité : </div>
            <div> <select name="specialite">
            <option selected>Choisir une spécialité </option>
            <option value="Langues">Langues</option>
            <option value="Technique">Technique</option>
            <option value="Informatique">Informatique</option>
            <option value="Histoire">Histoire</option>
            <option value="Mathématiques">Mathématiques</option>
            <option value="Sciences">Sciences</option>
            <option value="Philosophie">Philosophie</option>
            <option value="Art">Art</option>
            <option value="Musique">Musique</option>
            </select>

            </div>
           
<br>            
<div>              
<button class="btn btn-info" type="submit">Ajouter Enseignant</button>
</div>
</form>
</div>
     </body>
</html>
