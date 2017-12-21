<?php
    require_once('../php/smarty/Smarty.class.php');
    $smarty = new Smarty();

    $smarty->template_dir = 'templates/';
    $smarty->compile_dir = 'templates_c/';
    $smarty->config_dir = 'configs/';
    $smarty->cache_dir = 'cache/';

	include('../includes/verifLogin.inc.php');

    $smarty->assign('loggedIn',$loggedIn);
    $smarty->assign('pageBigTitle','Inscription');
    $smarty->assign('name','Anthony');

    $smarty->display('index.tpl');
?>
