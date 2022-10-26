<?php
try{
	$dsn = 'mysql:dbname=php_work; host=localhost; charset=utf8';

	$dbh = new PDO($dsn, 'root', '');

	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$sql = 'INSERT INTO todo_items(expiration_date, todo_item)
			VALUES (:expiration_date,:todo_item)';

	$stmt = $dbh->prepare($sql);

	$stmt->bindValue(':expiration_date', $_POST['expiration_date'], PDO::PARAM_STR);
	$stmt->bindValue(':todo_item', $_POST['todo_item'], PDO::PARAM_STR);

	$stmt->execute();

	header('Location:./');
	exit;
}catch(Exception $e){
	var_dump($e);
	exit;
}



?>