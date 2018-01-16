<?php
    include('php/conndb.php');

    $currentPage = 1;
    if(isset($_GET["page"])) {
        $currentPage = $_GET["page"];
    }


    $sql = "select * from messages";
    $msgQuery = $pdo->query($sql);

    $pageAmount = ceil($msgQuery->rowCount() / $msgPerPage);



    $mainPageURL = 'index.php?';
    if(isset($_GET["searchTerm"])) {
        $mainPageURL .= 'searchTerm='.$_GET["searchTerm"].'&';
    }
    $paginationHTML = '';

    if($pageAmount>1) {

        $paginationHTML .= "<nav aria-label='Page navigation'><ul class='pagination'>";

        if($currentPage-1<1)
            $paginationHTML .= "<li class='disabled'><a href='#' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>";
        else
            $paginationHTML .= "<li><a href='".$mainPageURL."page=".($currentPage-1)."' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>";

        for($i=1;$i<=$pageAmount;$i++) {
            if ($currentPage == $i)
                $paginationHTML .= "<li class='active'><a href='index.php?page=".$i."'>".$i."</a></li>";
            else
                $paginationHTML .= "<li><a href='".$mainPageURL."page=".$i."'>".$i."</a></li>";
        }

        if($currentPage+1>$pageAmount)
            $paginationHTML .= "<li class='disabled'><a href='#' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>";
        else
            $paginationHTML .= "<li><a href='".$mainPageURL."page=".($currentPage+1)."' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>";

        $paginationHTML .= "</ul></nav>";
    }

    echo $paginationHTML;
?>
