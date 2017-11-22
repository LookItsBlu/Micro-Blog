<?php
		include('conndb.php');

		if($_GET['action']=='add'){

			$sql = "insert into messages(contenu, date) values (:msg, UNIX_TIMESTAMP())";
			$prep = $pdo->prepare($sql);
			$prep->bindvalue(':msg', htmlspecialchars($_POST['message']));
		}
		else if($_GET['action']=='del') {

			$sql = "delete from messages where id = :id";
			$prep = $pdo->prepare($sql);
			$prep->bindvalue(':id', htmlspecialchars($_GET['id']));
		}
		else if($_GET['action']=='edit') {

			$sql = "update messages set contenu = :msg where id = :id";
			$prep = $pdo->prepare($sql);
			$prep->bindvalue(':msg', htmlspecialchars($_POST['msg']));
			$prep->bindvalue(':id', htmlspecialchars($_POST['id']));
		}

		if ($prep->execute() === true) {
			header('Location: ../index.php');
		} else {
			echo "<h1>Error</h1>";
		}
