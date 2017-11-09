<?php
    include('php/conndb.php');

    $sid = md5($email.time());

    $sql = 'update utilisateurs set sid = :newsid where email = :email';
    $prep = $pdo->prepare($sql);
    $prep->bindValue(':newsid', $sid);
    $prep->bindValue(':email', $email);
    $prep->execute();

    setcookie('session', $sid, time()+30, '/');
