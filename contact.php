<?php

    $servername     = "localhost";
    $username       = "root";
    $password       = "";
    $dbname         = "portfolio";

    $connexion =  new mysqli($servername, $username ,$password, $dbname);
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>Portfolio ABLEFONLIN Fred</title>
    <link rel="stylesheet" href="style.css" />
  </head>
<body>

    <nav class="navbar">
        <img src="R.png" class="lzy1Td" role="img" aria-label="Accueil du site" jsname="SwcDWb"></a>
        <div class="nav-links ">
            <ul>
                <li class="active"><a href="index1.html">Qui suis je ?</a></li>
                <li><a href="parcs.html">Parcours</a></li>
                <li><a href="btsio.html">BTS SIO</a></li>
                <li><a href="projetpro.html">Projets Professionnels</a></li>
                <li><a href="veille.html">Veilles</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>
    <header>
      <br>
      <h1>Contact </h1>
    </header><br>


<form action="create.php" style= "width: 450px; height: 570px" method="post">
  <div class="balise">
    <?php if(isset($_GET["message"])):?>
      <div class="alert alert danger alert-dismissble fade show" role="alert">
        <?= $_GET["message"];?>
        <button type="button" class="close" data.dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif ?>
  </div>

    <section class="formulaire">
        <h2> Contactez nous !</h2><br>
        <h4> Laissez moi vos cordonnées afin de vous recontactez.</h4><br>
        
        <div class="row mb-3" style= "height: 100px">
            <label for="inputLogin3" class="col-sm-2 col-form-label">Nom</label><br>
            <div class="col-sm-10">
                <input type="text" placeholder="Entrer votre nom" style= "width: 400px; height: 30px" class="form-control" name="nom" autocomplete="off">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputName3" class="col-sm-2 col-form-label">Prénom</label>
            <br>
            <div class="col-sm-10">
                <input type="text" placeholder="Entrer votre prénom" style= "width: 400px; height: 30px" class="form-control" name="prenom">
            </div><br>
        </div><br>
        <div class="row mb-3" style= "height: 100px">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label><br>
            <div class="col-sm-10">
                <input type="email" placeholder="Entrer votre email" style= "width: 400px; height: 30px" class="form-control" name="email">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputNumber3" class="col-sm-2 col-form-label">Téléphone</label>
            <br>
            <div class="col-sm-10">
                <input type="number" placeholder="Entrer votre téléphone" style= "width: 400px; height: 30px" class="form-control" name="telephone">
            </div><br>
        </div><br>
        <div class="boutons">
            <button type="submit" style= "width: 400px; height: 30px; background-color: rgb(47, 104, 180)" class="btn btn-primary">Envoyer</button><br><br>
            <h5  style= "height: 30px"> Vous serez recontactez très prochainement.</h5>
        </div>
    </section>
</form>
<!-- body section end -->

</body>

<footer>
    <p>Copyright © 2023 ABLEFONLIN Fred</p>
</footer>

</html>
