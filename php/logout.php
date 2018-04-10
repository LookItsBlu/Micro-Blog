<?php
    setcookie('session', '', 0, '/');
    setcookie('userid', '', 0, '/');
    header('Location: ../index.php');
