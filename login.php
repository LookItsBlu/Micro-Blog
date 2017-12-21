<!DOCTYPE html>
<html lang='fr'>

<?php
    include('includes/verifLogin.inc.php');
    include('includes/header.inc.php');
?>

<body id='page-top' class='connexion'>

<?php include('includes/haut.inc.php'); ?>

<!-- Header -->
<header>
    <div class='container'>
        <div class='row'>
            <div class='col-lg-12'>
                <div class='intro-text'>
                    <span class='name'>Connexion</span>
                    <hr class='star-light'>
                </div>
            </div>
        </div>
    </div>
</header>


<?php

$loginform = <<<EOT
    <form action='login.php' method='POST' style='width: 50%; margin: 20px auto;'>
        <div class='form-group'>
          <label for='email'>Email:</label>
          <input type='email' class='form-control' id='email' name='email'>
        </div>
        <div class='form-group'>
          <label for='pwd'>Mot de Passe:</label>
          <input type='password' class='form-control' id='pwd' name='pwd'>
        </div>

        <input class='btn btn-primary' type='submit'>
    </form>
EOT;

if(isset($_POST['email'])){

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    include('php/conndb.php');

    $sql = 'select * from utilisateurs where email = :email and mdp = :mdp';
    $prep = $pdo->prepare($sql);
    $prep->bindValue(':email', $email);
    $prep->bindValue(':mdp', $pwd);
    $prep->execute();

    if($prep->fetch() != null){

        include('php/updateSession.php');

        header('Location: index.php');

    } else {

        echo "<span class='error' style='display: block; width: 50%; margin: 20px auto; color: red; font-size: 20px;'>email ou mot de passe incorrect</span>" . $loginform;

    }

} else {

    echo $loginform;

}

include('includes/bas.inc.php');

?>

</body>
</html>
