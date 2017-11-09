<?php
    include('php/conndb.php');

    $sql = "select * from messages";
    $stmt = $pdo->query($sql);

    while($data = $stmt->fetch()) {
        $delBtn = '<a href="php/updateMsg.php?a=del&id=' . $data['id'] . '" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
        $editBtn = '<a class="btn btn-info btn-sm editBtn"><i class="fa fa-pencil"></i></a>';

        $msgEntry = '<blockquote> <p>' . $data['contenu'] . '</p> <footer>???, ' . date('d F Y, H:m:s', $data['date']);

        if($loggedIn) { $msgEntry .= ' ' . $delBtn . ' ' . $editBtn; }

        $msgEntry .= '</footer> </blockquote>';

        echo $msgEntry;
    }
?>
