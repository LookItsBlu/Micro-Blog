<!DOCTYPE html>
<html lang="fr">

<?php include('includes/header.inc.php'); ?>

<body id="page-top" class="connexion">

<?php include('includes/haut.inc.php'); ?>

<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text">
                    <span class="name">Connexion</span>
                    <hr class="star-light">
                </div>
            </div>
        </div>
    </div>
</header>

<form action='connexion.php' method='POST' style='width: 50%; margin: 20px auto;'>
    <div class='form-group'>
      <label for='email'>Email:</label>
      <input type='email' class='form-control' id='email'>
    </div>
    <div class='form-group'>
      <label for='pwd'>Mot de Passe:</label>
      <input type='password' class='form-control' id='pwd'>
    </div>

    <input class='btn btn-primary' type='submit'>
</form>

<?php include('includes/bas.inc.php'); ?>

</html>
