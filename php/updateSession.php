<?php
    include('php/conndb.php');

    $sid = md5($email.time());

    $sql = 'update utilisateurs set sid = :newsid where email = :email';
    $prep = $pdo->prepare($sql);
    $prep->bindValue(':newsid', $sid);
    $prep->bindValue(':email', $email);
    $prep->execute();

    setcookie('_session', $sid, time()+30);
