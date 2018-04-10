<?php
    include('php/conndb.php');

    $sid = md5($email.time());

    $sql = 'update utilisateurs set sid = :newsid where email = :email';
    $prep = $pdo->prepare($sql);
    $prep->bindValue(':newsid', $sid);
    $prep->bindValue(':email', $email);
    $prep->execute();

    $prep = $pdo->prepare('select id from utilisateurs where email = :email');
    $prep->bindValue(':email', $email);
    $prep->execute();

    $uid = $prep->fetch();

    setcookie('session', $sid, time()+600, '/');
    setcookie('userid', $uid[0], time()+600, '/');
