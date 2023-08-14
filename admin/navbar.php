<!DOCTYPE html>
<html>
<head>
<meta charset="iso-8859-1"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="contenu/bootstrap.min.js"> </script> 
<link rel="stylesheet" href="bootstrap.min.css"/> 
<link rel="stylesheet" href="style.css"/> 

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Ecole Privée</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
    aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
       <li>
        <div class="menu">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" 
            aria-haspopup="true" aria-expanded="false" role="button">Enseignants</a>
            
            <div class="dropdown-menu">
              <div class="menu">
              <a class="dropdown-item" href='ListeTeach.php'>Consulter</a>
              <a class="dropdown-item" href='addtech.php'>Ajouter</a>
              <a class="dropdown-item" href='ListeTeach.php'>Modifier</a>
            </div>

          </div>
          </li>
          <li>
          <div class="Doc">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" 
            aria-haspopup="true" aria-expanded="false" role="button">Documents</a>
            
            <div class="dropdown-menu">
              <div class="menu">
              <a class="dropdown-item" href='ListeDoc.php'>Consulter</a>
              <a class="dropdown-item" href='addoc.php'>Ajouter</a>
              <a class="dropdown-item" href='ListeDoc.php'>Supprimer</a>
            </div>
          </div>
</li>
      </ul>
     
     

    </div>
  </div>
</nav>
  <header class="banners">
    <h1 class="tit"> ECOLE PRIVEE </h1>
    <form class="d-flex" method="POST" action ="searchDoc.php">
        <input class="form-control me-2" type="search" name="cherche" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

</header>

</body>

