<?php
    require_once('../php/smarty/Smarty.class.php');
    $smarty = new Smarty();

    $smarty->template_dir = 'templates/';
    $smarty->compile_dir = 'templates_c/';
    $smarty->config_dir = 'configs/';
    $smarty->cache_dir = 'cache/';

    include('../php/conndb.php');

    $signupError = '';
    if(isset($_POST['email']) && isset($_POST['pwd']) && isset($_POST['pwdconfirm'])) {
        if ($_POST['pwd'] == $_POST['pwdconfirm']) {
            $sql = "insert into utilisateurs(email, mdp) values (:email, :pwd)";
            $prep = $pdo->prepare($sql);
            $prep->bindvalue(':email', htmlspecialchars($_POST['email']));
            $prep->bindvalue(':pwd', $_POST['pwd']);
            $prep->execute();
        } else {
            $signupError = 'les mots de passe entrées ne sont pas identique, veuillez réessayer';
        }
    }

	include('../includes/verifLogin.inc.php');

    $smarty->assign('loggedIn',$loggedIn);
    $smarty->assign('pageBigTitle','Inscription');
    $smarty->assign('signupError',$signupError);

    $smarty->display('index.tpl');

?>
