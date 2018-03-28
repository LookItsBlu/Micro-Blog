<?php
include('conndb.php');

$prep = $pdo->prepare("select contenu from messages where id=:id");
$prep->execute(array(':id' => htmlspecialchars($_GET['id'])));
echo json_encode($prep->fetch());
