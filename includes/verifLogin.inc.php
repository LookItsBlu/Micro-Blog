<?php
    if(isset($_COOKIE['_session'])) {
        include('php/conndb.php');

        $sql = 'select email from utilisateurs where sid = :sid';
        $prep = $pdo->prepare($sql);
        $prep->bindValue(':sid', $_COOKIE['_session']);
        $prep->execute();

        $entry = $prep->fetch();
        if($entry != null) {
            $loggedIn = true;
            $email = $entry['0'];
        }
        else {
            $loggedIn = false;
        }
    }
    else {
        $loggedIn = false;
    }
