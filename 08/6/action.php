<?php

$dsn = 'mysql:dbname=php_work; host=localhost; charset=utf8';

$dbh = new PDO($dsn, 'root', '');

if(isset($_POST['delete']) && ($_POST['delete'] == 1))
{
	$sql = "DELETE FROM todo_items WHERE id=:id";
	$stmt = $dbh->prepare($sql);
	$stmt->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
}
else
{
	$sql = 'UPDATE todo_items SET is_completed=:is_completed
			WHERE id=:id';
	$stmt = $dbh->prepare($sql);
	$stmt->bindValue(':id',$_POST['id'], PDO::PARAM_INT);
	$stmt->bindValue(':is_completed',$_POST['is_completed'],PDO::PARAM_INT);
}

$stmt->execute();

header('Location:./');
exit;

?>