<?php
    include('php/conndb.php');


    $msgPerPage = 5;


    $search = '%%';
    if(isset($_GET['searchTerm'])) {
        $search = '%'.$_GET['searchTerm'].'%';
    }

    $firstIndex = 0;
    if(isset($_GET["page"])) {
        $firstIndex = ($_GET["page"]-1)*$msgPerPage;
    }

    $sql = "select * from messages where contenu like :search limit :first , :msgPerPage";
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $msgQuery = $pdo->prepare($sql);
    $msgQuery->bindvalue(':search', htmlspecialchars($search));
    $msgQuery->bindvalue(':first', $firstIndex);
    $msgQuery->bindvalue(':msgPerPage', $msgPerPage);
    $msgQuery->execute();


    while($data = $msgQuery->fetch()) {
        // calculate likes for each posts
        $sql = "select COUNT(*) as amnt from likes where messages = :messageid";
        $likesQuery = $pdo->prepare($sql);
        $likesQuery->bindvalue(':messageid', $data['id']);
        $likesQuery->execute();

        //create Edit & Delete Buttons
        $likeBtn = '<a href="#" class="btn btn-success btn-sm likeBtn" data-id="' .$data['id']. '"><i class="fa fa-thumbs-up">'. $likesQuery->fetch()['amnt'] .'</i></a>';
        $delBtn = '<a href="php/updateMsg.php?action=del&id=' . $data['id'] . '" class="btn btn-danger btn-sm delBtn"><i class="fa fa-trash"></i></a>';
        $editBtn = '<a class="btn btn-info btn-sm editBtn"><i class="fa fa-pencil"></i></a>';

        if(strlen($data['contenu']) > 150) { $data['contenu'] = substr($data['contenu'], 0, 150)."... <a href='#' class='show-more' data-id=".$data['id'].">Lire la suite</a>"; }

        //build blockquotes
        $data['contenu'] = preg_replace('/https?:\/\/(.*?)\/(.*\/[^\/\s]*)/', "<a href='http://$1/$2'>$1</a>", $data['contenu']);
        $data['contenu'] = preg_replace('/([^\s]+)@([^\s]+)/', "<a href='mailto:$1@$2'>mail $1</a>", $data['contenu']);

        $msgEntry = '<blockquote> <p>' . $data['contenu'] . '</p> <footer>???, ' . date('d F Y, H:m:s', $data['date']);
        if($loggedIn) { $msgEntry .= ' ' . $likeBtn . $delBtn . ' ' . $editBtn; }
        $msgEntry .= '</footer> </blockquote>';

        echo $msgEntry;
    }
?>
