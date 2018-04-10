<?php
    include('conndb.php');

    $prep = $pdo->prepare('insert into likes values (:msgid, :userid)');
    $prep->bindValue(':msgid', $_POST['id']);
    $prep->bindValue(':userid', $_COOKIE['userid']);
    $prep->execute();

    $getlikes = $pdo->prepare('select COUNT(*) from likes where messages = :msgid');
    $getlikes->bindValue(':msgid', $_POST['id']);
    $getlikes->execute();

    echo $getlikes->fetch()[0];
